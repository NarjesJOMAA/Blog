<?php
    require('model.php');

    $id = $_GET['id'];
    $prenom = $_POST['prenom'];
    $com = $_POST['com'];

    insertComments($com,$id,$prenom);

    header('location:index.php');

