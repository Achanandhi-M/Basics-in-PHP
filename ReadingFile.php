<?php
$fileName="index.php";
$file=fopen($fileName,"r");
if($file){
    $content=fread($file,filesize($fileName));
    echo "File content : $content";
    fclose($file);
}
else{
    echo "Error";
}
?>