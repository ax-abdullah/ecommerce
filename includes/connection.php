<?php 

$connection = mysqli_connect('localhost', 'root', '', 'void_store');

if(!$connection){
    die('You are not connected');
}