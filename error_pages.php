<?php
    if(!file_exists("main.css")) echo "WARNING: main.css not found. Pages may not be able to display errors correctly.\n";
    if(!file_exists("error_list.xml")) die("ERROR: Unable to load error_list.xml\n"); 
    $errors = simplexml_load_file("error_list.xml");
    foreach ($errors->error as $error) {
        $fileData = "<!DOCTYPE html>
<html>
<head>
    <title>Uh... 3RR0R!!!!!1</title>
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
    <style>@import url(https://fonts.googleapis.com/css?family=Montserrat:300);div,span{text-shadow:0 1px 0 rgba(137,137,137,.5),0 2px 0 rgba(137,137,137,.5),0 3px 0 rgba(137,137,137,.5),0 4px 0 rgba(137,137,137,.5),0 5px 0 rgba(137,137,137,.5),0 6px 0 rgba(137,137,137,.5),0 7px 0 rgba(137,137,137,.5)}a:hover,body{color:#fff}*{margin:0}body{background:#000;font-family:Montserrat;text-align:center;font-size:100pt}div{margin-top:5%}div::before{content:attr(error)}span::before{content:attr(desc)}p:after{font-size:15%;content:attr(text)}a{color:grey;transition:all .5s;cursor:pointer;text-decoration:none;font-size:25%}a::before{content:attr(data)}</style>
</head>
<body>
    <div error='" . $error->code . "'></div>
    <span desc='" . $error->desc . "'></span>
    <p text='" . $error->text . "'></p>
    <a href='" . $error->href . "' data='" . $error->data . "'></a>
</body>
</html>";
        $errorFile = fopen($error->code . ".html", "w") or die("Unable to open file!" . $errorFile);
        fwrite($errorFile, $fileData);
        fclose($errorFile);
    }
 ?>