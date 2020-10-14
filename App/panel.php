<?php
require_once ('vendor\autoload.php');
 $mysqli = new mysqli("localhost", "root", "", "me");
                if ($mysqli->connect_errno) {
                 die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
                }
                $sql = "SELECT * FROM docs";
                foreach ($mysqli->query($sql) as $row){ 
                   $getTRans = $row['nome']."<br />";
                   echo "<br /><br />";
                }
                $source = $row['doc'];
                $target = $row['language_out'];
                $text = $getTRans;
                $trans = new Statickidz\GoogleTranslate();
                $result = $trans->translate($source, $target, $text);
?>


<html>
    <head>
    <title>Result</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js'></script>
    </head>
    <body>
        <div class="form-group container">
            <label for="exampleTextarea">Result</label>
            <textarea class="form-control" id="exampleTextarea" rows="20">
              <?php echo  $result; ?>
            </textarea>
            <P>Original Text</P>
            <textarea class="form-control" id="exampleTextarea" rows="20">
               <?php echo  $row['nome']; ?>
            </textarea>
        </div>
    </body>
</html>