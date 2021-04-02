<?php
    
    foreach ($articles as $article){
        $id = $article['id'];
        $name=getname($id);
        $date = date('d-m-Y H:i:s', strtotime($article['created_at']));
        echo "<div class='jumbotron ml-5 mr-5 mt-5 pt-2'>
            <p class='anim text-right'>$date</p>
            <h2 class='ml-3'>$article[titre]</h2> 
            <p class='ml-3 mt-3 name'>$name[nom]</p>
            <div class='col-12'>
            <img src='$article[img]'class='effet tailleimg ml-4 img-fluid'>
            </div>
            <div class='col-12 border mt-5 pt-3 pl-4 pr-3 pb-3' >
            <p>$article[descript]</p>
            <a href='./article.php?id="."$article[id]"."'><button type='submit' class='btn btn-primary ml-3 mt-3 pt-2 pb-2 pl-4 pr-4''>Lire</button></a>
            </div>
            </div>";        
    }
    


