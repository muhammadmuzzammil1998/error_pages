<?php 
    if(!file_exists("error_list.xml")) die("ERROR: Unable to load error_list.xml\n"); 
    $errors = simplexml_load_file("error_list.xml");
    foreach ($errors->error as $error) {
        $fileData = "<!-- https://github.com/muhammadmuzzammil1998/error_pages (MIT License) -->
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>$error->code - muzzammil.xyz </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel='shortcut icon' href='//raw.githubusercontent.com/muhammadmuzzammil1998/error_pages/master/favicon.ico' type='image/x-icon'>
    <style>@import url(https://fonts.googleapis.com/css?family=Montserrat:300);#content-wrapper,a,body,p{position:absolute}*{margin:0;transition:all .5s}body{background-color:#$error->color;height:100%;width:100%;font-family:Montserrat;mix-blend-mode:luminosity}#content-wrapper{background-color:rgba(255,255,255,.5);left:5%;height:auto;top:5%;right:5%;bottom:5%;border-radius:5px;padding:5%;box-shadow:1px 1px 7px 3px rgba(0,0,0,.2);text-align:center;overflow-y:auto}#content{font-size:10vh;word-break:keep-all}#content::after{content:attr(desc)}#error{font-size:20vh}#error::after{content:attr(error)}p{font-size:1.5vh;bottom:15vh;left:25%;right:25%}p::after{content:attr(text)}a{font-size:3vh;text-decoration:none;color:rgba(0,0,0,.6);bottom:5vh;left:15%;right:15%}a:hover{color:rgba(0,0,0,1)}a::after{content:attr(data)}</style>
</head>
<body>
    <div id=\"content-wrapper\">
        <div id=\"error\" error=\"$error->code\"></div>
        <div id=\"content\" desc=\"$error->desc\"></div>
        <p text=\"$error->text\"></p>
        <a href='$error->href' data='$error->data'></a>
    </div>
</body>
</html>";
        $errorFile = fopen($error->code . ".html", "w") or die("Unable to open file!" . $errorFile);
        fwrite($errorFile, $fileData);
        fclose($errorFile);
    }
 ?>
