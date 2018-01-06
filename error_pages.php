<?php
    if(!file_exists("main.css")) echo "WARNING: main.css not found. Pages may not be able to display errors correctly.\n";
    if(!file_exists("error_list.xml")) die("ERROR: Unable to load error_list.xml\n"); 
    $errors = simplexml_load_file("error_list.xml");
    foreach ($errors->error as $error) {
        $fileData = "<!DOCTYPE html>
<html>
<head>
    <title>Uh... 3RR0R!!!!!1</title>
    <link rel='stylesheet' href='main.css'>
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
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