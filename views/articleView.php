<section class="container">
    <article class="row">


<?php

    $date = date('d-m-Y H:i:s', strtotime($infoArticle['updated_at']));

    echo "<div class='col-12 col-md-6 mt-5'><img class='img-fluid pt-5' src='$infoArticle[img]'></div>
            <div class='col-12 col-md-6 mt-5'>
            <h2>$infoArticle[titre]</h2> 
            <h4 class='mt-4'>$name[nom]</h4>
            <p class='mt-3'>$date</p>
            <p class='anim mt-5 border pt-3 pr-3 pl-3 pb-2 bg-warning'>$infoArticle[content]</p>
            </div>
            
            <div class='col-12 p-5'>
            <form method='POST' action='action.php?id=$infoArticle[id]'>
                <div class='form-group'>
                    <label for='leprenom'>Prénom</label>
                    <input type='text' class='form-control text-center' name = 'prenom' id='leprenom'>
                </div>
                <div class='form-group'>
                    <label for='com'>Commentaire</label>
                    <textarea id='com' class='form-control text-center' name = 'com'></textarea>
                </div>
                <button type='submit' class='btn btn-primary mt-4 mb-5'>Publier</button>
            </form>
            </div>

            ";    
                  

                  foreach($commentaires as $commentaire){

                    //echo "<div class='p-3'><span class='pt-1 pr-1 pl-1 pb-1 rounded bg-warning'>COMMENTAIRES</span></div>";


                    $datecomm = date('d-m-Y H:i:s', strtotime($commentaire['date_creation']));

                    echo "                 
                    <div class='col-12 p-3'>
                    <div class='mt-3 pl-2 pr-2 pb-2 pt-2 rounded border border-secondary'>
                        <div class='rounded commentsdiv'><div class='ml-2 comments1'>$commentaire[auteur]</div>
                    </div>
                    <div><p class='comments3'>$commentaire[contenu]</p>
                        <div class='pr-2 rounded commentsdiv comments2'>$datecomm</div></div>
                    </div>
                    </div>
                    ";
                  }                 

?>
    </article>
</section> 

<footer>

    <p class="pt-3 mr-2 text-center">&copy;Narjes - Frederic - 2020</p>
    

</footer>
    
        </body>
</html>
