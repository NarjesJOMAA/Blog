
<?php
    require('model.php');
    $Categories = getCategories();
    include('head_session.php');
    session_start();
    $_SESSION['usr_id'];
    $_SESSION['nom'];
    $_SESSION['prenom'];
    
    $id = $_SESSION['usr_id'];
    
    if(isset($_POST) && !empty($_POST)){

        $titre = $_POST['titre'];
        $slug = $_POST['slug'];
        $descript = $_POST['descript'];
        $content = $_POST['content'];
        $categorie = $_POST['categorie'];


        if(isset($_FILES) && !empty($_FILES)){
            
            $uploads_dir = 'assets/upload';
            $tmp_name = $_FILES["img"]["tmp_name"];
            $name = basename($_FILES["img"]["name"]);
            move_uploaded_file($tmp_name, "$uploads_dir/$name"); 
        }

        $img = "$uploads_dir/$name";

        insertArticle($titre, $slug, $img, $content, $descript, $id, $categorie);

    }

    require('views/postView.php');
    

?>
