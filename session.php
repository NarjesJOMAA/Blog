
<?php

    require('model.php');
    $Categories = getCategories();
    include('head_session.php');

    session_start();

    if (!empty($_SESSION)){

        $id = $_SESSION['usr_id'];
        $nom = $_SESSION['nom'];
        $prenom= $_SESSION['prenom'];

        $articlesAuteur = getArticlesAuteur($id);
        
        echo '<div class="container pt-5 col-6 mt-5"><div class="row"><div class="jumbotron text-center">
                <svg class= "border border-primary mb-5 image-fluid mt-5 mb-1 bi bi-person" width="30%" height="30%" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                </svg> <h3>'; 
        echo   '<span>' .$nom. '</span>' ;
        echo   '<span class="ml-2">' .$prenom. '</span>' ;

        echo '</h3> <a href="./post.php"><button class="btn btn-primary mt-5 ">Créer un nouveau article</button></a><a href="./deconnexion.php"><button class="btn btn-primary mt-5 ml-3">Déconnexion</button></a><div class="mt-5">';

        echo '<h5>Vos articles:</h5>';
                foreach ($articlesAuteur as $articleAuteur) {
                    echo '<p><a href="./article.php?id=' .$articleAuteur['id']. '">';
                    echo $articleAuteur['titre'] ;
                    echo '</a></p>';
                } 

        echo '</div></div></div></div>';


    }else{

    if (isset($_POST) && !empty($_POST)){

        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];

        $getEmails = getEmails();
        $bddEmails = [];

        foreach($getEmails as $getEmail){
            array_push($bddEmails, $getEmail['mail']);
        }

        $getPassword = getPassword();

            if (in_array($mail,$bddEmails)) {

                $getId = getId($mail);

                if (password_verify($mdp, $getId['mdp'])) {

                    $_SESSION['usr_id'] = $getId['id'];
                    $_SESSION['nom'] = $getId['nom'];
                    $_SESSION['prenom'] = $getId['prenom'];
                    
                    $id = $_SESSION['usr_id'];
                    $nom = $_SESSION['nom'];
                    $prenom= $_SESSION['prenom'];

                    $articlesAuteur = getArticlesAuteur($id);
                    
                    echo '<div class="container pt-5 col-6 mt-5"><div class="row"><div class="jumbotron text-center">
                            <svg class= "border border-primary mb-5 image-fluid mt-5 mb-1 bi bi-person" width="30%" height="30%" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            </svg> <h3>'; 
                    echo   '<span>' .$nom. '</span>' ;
                    echo   '<span class="ml-2">' .$prenom. '</span>' ;

                    echo '</h3> <a href="./post.php"><button class="btn btn-primary mt-5 ">Créer un nouveau article</button></a><a href="./deconnexion.php"><button class="btn btn-primary mt-5 ml-3">Déconnexion</button></a><div class="mt-5">';
                    echo '<h5>Vos articles:</h5>';

                            foreach ($articlesAuteur as $articleAuteur) {
                                echo '<p><a href="./article.php?id=' .$articleAuteur['id']. '">';
                                echo $articleAuteur['titre'] ;
                                echo '</a></p>';
                            } 

                    echo '</div></div></div></div>';
                    
                            

                }else {
                
                    header('location:messagemdp.php');

                }  

            }else{

                header('location:messagemdp.php');
            }

    }

    }
    ?>
