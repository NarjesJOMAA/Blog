<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <title>BLOG</title>

            <link rel="icon" type="image/png" href="https://www.icone-png.com/png/40/39751.png">
            <!-- Liaison au fichier css de Bootstrap -->
            <link rel="stylesheet" href="./assets/lib/bootstrap.min.css">
            <link rel="stylesheet" href="./assets/css/form.css">
            <link rel="stylesheet" href="./assets/css/style.css">
            <link rel="stylesheet" href="./assets/css/mediaquery.css">            
            
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            
        </head>
    
        <body>
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a href="./index.php" class="navbar-brand">
                        <img class='imgrotat'src="https://www.icone-png.com/png/15/15224.png" width="35" height="35" title="" alt=""></a>
                    <span class="navbar-text rainbow">Limousin Blog</span>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarLinks">
                        <ul class="ml-auto navbar-nav">
                            <li class="nav-item text-center">
                                <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown">Catégories
                                <span class="caret "></span></button>
                                <ul class="dropdown-menu text-center">
                                <li><a href="./index.php">Tous</a></li>

                                    <?php                                                                           
                                        foreach($Categories as $Categorie){
                                            echo("
                                            <li><a href='./categorie.php?idcat="."$Categorie[id]"."'>$Categorie[nom_categorie]</a></li>
                                            ");
                                        }
                                    ?>
                                </ul>
                                </div> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center bg-light" href="./form.php">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center bg-light" href="./connexion.php">Connexion</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            
        

