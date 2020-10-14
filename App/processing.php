<?php

error_reporting(0);
$pdo = new PDO('mysql:host=localhost;dbname=me', 'root', '');
$sql = "TRUNCATE TABLE `docs`";
$statement = $pdo->prepare($sql);
$statement->execute();
global $result;
if(isset($_POST['submit']) && isset($_FILES)) {
    
    $language = $_POST['langin'];
    $result = $language[0];

    require __DIR__ . '/vendor/autoload.php';
    $target_dir = "uploads/";
    $uploadOk = 1;
    $FileType = strtolower(pathinfo($_FILES["attachment"]["name"],PATHINFO_EXTENSION));
    $target_file = $target_dir . generateRandomString() .'.'.$FileType;
    // Check file size
    if ($_FILES["attachment"]["size"] > 5000000) {
        header('HTTP/1.0 403 Forbidden');
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if($FileType != "pdf" && $FileType != "png" && $FileType != "jpg") {
        header('HTTP/1.0 403 Forbidden');
        echo "Sorry, please upload a pdf file";
        $uploadOk = 0;
    }
    if ($uploadOk == 1){
        if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) {
            uploadToApi($target_file);
        }
        else{
            header('HTTP/1.0 403 Forbidden');
        }
    } 
}
else {
    header('HTTP/1.0 403 Forbidden');
    echo "Sorry, please upload a pdf file";
}
function uploadToApi($target_file){
    require __DIR__ . '/vendor/autoload.php';
    $fileData = fopen($target_file, 'r');
    $client = new \GuzzleHttp\Client();
    foreach ($language as $value) {
       echo $value;
     }
    try{
         $r = $client->request('POST', 'https://api.ocr.space/parse/image',[
                                                                                'headers' => ['apiKey' => 'afe859067588957'],
                                                                                'multipart' => [
                                                                                                    [
                                                                                                        'name' => 'file',
                                                                                                        'contents' => $fileData,
                                                                                                        'language'=> $language[0]
                                                                                                    ]
                                                                                                ]
                                                                            ], ['file' => $fileData]);
        $response =  json_decode($r->getBody(),true);
        if($response['ErrorMessage'] == "") {
            foreach($response['ParsedResults'] as $pareValue){
               // $pareValue['ParsedText']; 
            }   
            if(isset($_POST['submit'])) {
                $language = $_POST['langin'];
                $lanout = $_POST['langout'];
                $result = $language[0];
                $nome = $pareValue['ParsedText'];
                $language_out = $lanout[0];
                $link = mysqli_connect("localhost","root","","me");
                $test = mysqli_query($link,"INSERT INTO docs ( `nome`, `doc`, `language_out`)
                VALUES ('$nome','$result','$language_out')")or die(mysqli_error($link));
                header("Location: http://localhost/OCR/app/panel.php");
            }  
        }   else {
                header('HTTP/1.0 400 Forbidden');
                var_dump($response['ErrorMessage']);
            }
    } 
        catch(Exception $err){
            header('HTTP/1.0 403 Forbidden');
            echo $err->getMessage();
        }
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>