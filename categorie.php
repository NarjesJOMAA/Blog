
<?php

require('model.php');
$Categories = getCategories(); 

session_start(); 
$idcat = $_GET['idcat'];

if(!empty($_SESSION)){

    include('head_session.php');
}else{

    include('head.php');
}
    
    $articles = getArticlesCategorie($idcat);

    require('views/indexView.php');

?>

<footer><nav><p class="pt-3 mr-2 text-center">&copy;Narjes - Frederic - 2020</p><button onclick="topFunction()" id="myBtn" title="Go to top">^</button></footer>


<script src="assets/js/script.js"></script>



