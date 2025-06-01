<?php

$con = mysqli_connect("localhost","root","","kuliah");  

if(!$con) {
    echo ("Connection Failed:" . mysqli_connect_error());
} 

?>