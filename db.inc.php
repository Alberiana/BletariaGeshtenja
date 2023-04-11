<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="lqsym";
$dbName="contactForm";

$conn=mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

if($conn){
    die("connection failed: ".mysqli_connect_error());
}else{
    echo "connected";
}