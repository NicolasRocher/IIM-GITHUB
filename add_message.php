<?php
require('config/config.php');

include 'config.php';




$email = $_POST['email'];
$text = $_POST['text'];

var_dump($_POST);




$sql="INSERT INTO contact (email, text)
VALUES ('$email','$text')";


$req = $db->prepare($sql);
$req->execute();

header('Location: contact.php');
?>