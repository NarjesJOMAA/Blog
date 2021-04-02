
<?php

    require('model.php');
    $Categories = getCategories(); 

    session_start(); 

    if(!empty($_SESSION)){

        include('head_session.php');
    }else{

        include('head.php');
    }

        $total = getnb();
        $nb = $total["total"];
        
        $articlesParPage=10;
      
        $nombreDePages = ceil($nb/$articlesParPage);
      
        if(isset($_GET['page'])){
      
            $pageActuelle=intval($_GET['page']);
      
                if($pageActuelle>$nombreDePages){
      
                $pageActuelle=$nombreDePages;
                }
        }else{
      
            $pageActuelle=1;  
        }
        
        $premiereEntree=($pageActuelle-1)*$articlesParPage;

        $articles = getArticle ($premiereEntree, $articlesParPage);
        
    
        require('views/indexView.php');


?>
    
    
    <footer><nav><ul class="pagination justify-content-center">
            <li class="page-item <?= ($pageActuelle == 1) ? "disabled" : "" ?>">
                <a href="./index.php?page=<?= $pageActuelle - 1 ?>" class="page-link">Précédente</a>
            </li>
            <?php for($page = 1; $page <= $nombreDePages; $page++): ?>
                <li class="page-item <?= ($pageActuelle == $page) ? "active" : "" ?>">
                    <a href="./index.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                </li>
            <?php endfor ?>
                <li class="page-item <?= ($pageActuelle == $nombreDePages) ? "disabled" : "" ?>">
                <a href="./index.php?page=<?= $pageActuelle + 1 ?>" class="page-link">Suivante</a>
            </li>
                                                 
        
    </ul></nav><p class="pt-3 mr-2 text-center">&copy;Narjes - Frederic - 2020</p><button onclick="topFunction()" id="myBtn" title="Go to top">^</button></footer>
    
    
    <script src="assets/js/script.js"></script>
    
    

