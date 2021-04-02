
<?php

        require('model.php');
        $Categories = getCategories();
        include('head_session.php');

        session_start(); 

        if(!empty($_SESSION)){
        

                $id = $_GET['id'];
                $infoArticle = getInfoArticle($id);
                $name = getname($id);
                $commentaires = getComments($id);
                
                require('views/articleView.php');

        }else{
                header('location:connexion.php');
        }
         



