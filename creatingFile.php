<?php
$filename="example.txt";
$file=fopen($filename,"w");
if($file){
    echo "file created successfully";
}
else{
    echo "Error";
}