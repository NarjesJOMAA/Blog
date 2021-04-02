<?php

require('model.php');

if (isset($_POST) && !empty($_POST)){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $mdpverif = $_POST['mdpverif'];


    if ($mdpverif === $mdp){

        $passwodCryt = password_hash("$mdp", PASSWORD_BCRYPT);

        insertAuteur($nom, $prenom, $mail, $passwodCryt);

    }else{
        echo "Mot de passe incorrecte!";
    }

}

header('location:connexion.php');




