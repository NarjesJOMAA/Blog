    <div class="container mt-5">
        <section class="jumbotron">
            <article class=" text-center col-12 col-sm-12 col-md-8 offset-md-2">
            <svg class="mt-5 mb-5 bi bi-envelope-open" width="20%" height="20%" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 8.917l7.757 4.654-.514.858L8 10.083.757 14.43l-.514-.858L8 8.917z"/>
            <path fill-rule="evenodd" d="M6.447 10.651L.243 6.93l.514-.858 6.204 3.723-.514.857zm9.31-3.722L9.553 10.65l-.514-.857 6.204-3.723.514.858z"/>
            <path fill-rule="evenodd" d="M15 14V5.236a1 1 0 0 0-.553-.894l-6-3a1 1 0 0 0-.894 0l-6 3A1 1 0 0 0 1 5.236V14a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM1.106 3.447A2 2 0 0 0 0 5.237V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.236a2 2 0 0 0-1.106-1.789l-6-3a2 2 0 0 0-1.788 0l-6 3z"/>
            </svg>
              <h2> Formulaire d'inscription </h2>
  
              <form method="POST" action="traitement.php" role="form">
                <div>
                    <label for="lenom">Nom</label>
                    <input type="text" class="form-control text-center" name="nom" id="lenom" placeholder="Indiquez votre nom" required>
                </div>
                <div>
                    <label for="leprenom">Prenom</label>
                    <input type="text" class="form-control text-center" name="prenom" id="leprenom" placeholder="Indiquez votre prenom" required>
                </div>
                <div class="form-group">
                    <label for="lemail">Adresse mail</label>
                    <input type="email" class="form-control text-center" name = "mail" id="lemail" placeholder="Indiquez votre adresse mail" required>
                </div>
                <div class="form-group">
                    <label for="pw">Mot de passe</label>
                    <input type="password" class="form-control text-center" name = "mdp" id="pw" placeholder="Indiquez votre mot de passe" required>
                </div>
                <div class="form-group">
                    <label for="checkpw">Vérifier mot de passe</label>
                    <input type="password" class="form-control text-center" name = "mdpverif" id="checkpw" placeholder="Retapez votre mot de passe" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="accepter">
                    <label class="form-check-label" for="accepter">Accepter les conditions</label>
                </div>
                <div btnformview>
                <button type="submit" class="btn btn-primary mt-4 mb-3">Envoyer</button>
                </div>
                </form>
            </article>
        </section>
    </div>

    <footer>

        <p class="pt-3 mr-2 text-center">&copy;Narjes - Frederic - 2020</p>

    </footer>

        </body>
</html>



