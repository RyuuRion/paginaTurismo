<?php

    
$mysqli = mysqli_connect("localhost","root","","mdbturismo");

if(!$mysqli){

   die("murio la db WEEEEEEYYY". mysqli_connect_error() . PHP_EOL);
}

?>