<section class="imgform container body">
    <article class="row">
        <div class="text-center col-12 col-md-8 offset-md-2">

            <svg class="mt-5 mb-5 bi bi-file-text" width="20%" height="20%" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
            <path fill-rule="evenodd" d="M4.5 10.5A.5.5 0 0 1 5 10h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
            </svg>

              <h2> Créer un article </h2>
  
            <form method="POST" action="post.php" enctype="multipart/form-data" class="p-5">
                <div>
                    <label for="title">Titre</label>
                    <input type="text" class="form-control text-center" name="titre" id="title" required>
                </div>
                <div>
                    <label class="mt-2 for="slug">Slug</label>
                    <input type="text" class=" form-control text-center" name="slug" id="slug" required>
                </div>

                <div>
                    <label class="mt-2 for="img">Image</label>
                    <input type="file" class=" form-control" name="img" id="img" required>
                </div>


                <div>
                    <label class="mt-2 for="descript">Description</label>
                    <textarea id="descript" class="form-control text-center" name = "descript" required></textarea>
                </div>

                <div>
                    <label class="mt-2 for="content">Contenu</label>
                    <textarea id="content" class="form-control text-center" name = "content" required></textarea>
                </div>

                <div>
                    <label class="mt-2 for="categorie">Catégorie</label>
                    <select id="categorie" class="form-control text-center" name = "categorie" required>
                        <?php
                            foreach($Categories as $Categorie){
                                echo("
                                <option value = "."$Categorie[id]".">$Categorie[nom_categorie]</option>
                                ");
                            }
                        ?>

                    </select>
                </div>
                <button type="submit" class="mt-4 mb-5 btn btn-primary">Soumettre</button>                

            </form>
        </div>
    </article>
</section>

<footer>

    <p class="mt-5 pt-3 mr-2 text-center">&copy;Narjes - Frederic - 2020</p>

</footer>                
        </body>
</html>
