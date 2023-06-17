<?php
$filename="example.txt";
$file=fopen($filename,"w");
if($file){
    $text="Hello php";
    fwrite($file,$text);
    echo "Data written successfully!";
}
else{
    echo "Error";
}