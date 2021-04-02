<?php 
    function blogconnect(){

        try {
            $bdd = new PDO('mysql:host=localhost; dbname=blog_bdd', 'root');
            return $bdd;
            }
        catch (PDOException $e) {
            echo('echec de la connexion : ' . $e->getMessage()); 
            exit;
            }
    }
