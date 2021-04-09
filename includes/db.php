<?php


$db = mysqli_connect(
    'localhost',
    'root',
    'root',
    'pinta'
);

if(!$db){
    die("error BD");
}