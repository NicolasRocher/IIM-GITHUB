<?php

session_start();

require('config/config.php');
require('model/functions.fn.php');


include 'view/_header.php';
include 'view/inscription.php';
include 'view/_footer.php';
include('config.php');



$nom = $_POST['nom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];






$sql="INSERT INTO inscription (nom, email, mdp)
VALUES ('$nom','$email','$mdp')";


$req = $db->prepare($sql);
$req->execute(); ?>


	
