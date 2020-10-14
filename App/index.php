  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="http://localhost/ocr/app/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">OCR Translator PHP</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    
                       
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
              
            <div class="container h-100">
                <p style="color:whitesmoke"> 1° First Upload Document </p>
                    <?php
                        $config = array(
                            'bg'=>'Български', 'ca'=>'Català', 'cy'=>'Cymraeg', 'cz'=>'Česky', 'da'=>'Dansk', 'de'=>'Deutsch', 'el'=>'Ελληνικα', 'en'=>'English',
                            'es'=>'Español', 'et'=>'Eesti', 'fi'=>'Suomi', 'fr'=>'Français', 'gl'=>'Galego', 'he'=>'עברית', 'hr' => 'Hrvatski', 'hu' => 'Magyar', 'in'=>'Bahasa Indonesia', 'it'=>'Italiano',
                            'ja'=>'日本語','ka'=>'ქართული','kr'=>'한 글','mk'=>'Македонски', 'nl'=>'Nederlands', 'nl-be'=>'Nederlands (België)', 'no'=>'Norsk', 'pl'=> 'Polski', 'pt-br'=>'Português (Brasil)', 'pt-pt'=>'Português (Portugal)', 
                            'ro'=>'România', 'ru'=>'Русский', 'sk'=> 'Slovenčina', 'sl'=>'Slovensko', 'sr'=>'Srpski', 'sv'=> 'Svenska', 'th'=>'&#x0e20;&#x0e32;&#x0e29;&#x0e32;&#x0e44;&#x0e17;&#x0e22;', 
                            'tr'=>'Türkçe', 'uk'=>'Українська', 'zh'=>'中文 (简体)', 'zh-tw'=>'中文 (繁體)'
                        );
                     ?>   
                       
                     
                    
                             
                        <form id="upload" method='POST' action='./processing.php' enctype="multipart/form-data">
                            <div>
                                <div class="fb-file form-group "><label for="attachment" class="fb-file-label">Upload Pdf File<span class="fb-required">*</span><span class="tooltip-element" tooltip="choose your pdf">?</span></label>
                                        <input type="file" placeholder="choose your pdf" class="form-control" name="attachment"  title="choose your pdf" required="required" aria-required="true">
                                        
                                        <br>
                                        <p> choose the Langage of Document</p>
                                        <select name="langin[]" multiple="multiple">
                                            <?php foreach ($config as $cruL => $langNmame) {?>
                                                 <option value="<?php echo $cruL ?>"><?php echo $langNmame ?></option>
                                            <?php } ?> 
                                        </select>
                                        <br>
                                        <p> choose the Langage o translate</p>
                                         <select name=langout[]" multiple="multiple">
                                            <?php foreach ($config as $cruL => $langNmame) {?>
                                                 <option value="<?php echo $cruL ?>"><?php echo $langNmame ?></option>
                                            <?php } ?> 
                                        </select>
                                </div>
                                <div class="fb-button form-group "><button type="submit" class="btn btn-success" name="submit" >upload</button></div>
                            </div>
                        </form>
                     <p style="color:whitesmoke"> 2° click to View document translated</p>
                     <div class="container-fluid"><a class="navbar-brand js-scroll-trigger" href="http://localhost/ocr/app/panel.php"><button id="btnView" class="btn btn-success" >View</button></a></div>
                    </div>
        </header>
        <!-- About-->
       
        <!-- Services-->
       
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                       
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Translator online</div>
                            </div>
                        </a>
                    </div>
                    
                   
                 
                </div>
                
                  
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 </div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    
    
