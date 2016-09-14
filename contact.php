<?php

session_start();

require('config/config.php');
require('model/functions.fn.php');


include 'view/_header.php';
include 'view/contact.php';
include 'view/_footer.php';
 include('config.php');



$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];





$sql="INSERT INTO contact (nom, email, message)
VALUES ('$nom','$email','$message')";


$req = $db->prepare($sql);
$req->execute(); ?>


	
