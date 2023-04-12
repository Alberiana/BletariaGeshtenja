<?php

$emri=$_POST['emri'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


 $conn=mysqli_connect('localhost', 'root','','kontakti');

if($conn->connect_error){
    die("connection failed: ".mysqli_connect_error());
}else{
    $stm= $conn->prepare("INSERT INTO 'formakontaktit'('emri', 'email', 'phone', 'message') 
    VALUES (?, ?, ?, ?, ?)" );
    $stm->bind_param("isssss", $emri, $email, $phone, $message);
    $stm->execute();
    echo "registration succesfully... ";
    $stm->close();
    $conn->close();
}
?>