<div class="container">
        <section class="jumbotron mt-5">
            <article class="text-center col-12 col-md-8 offset-md-2">
            <svg class="mt-5 mb-5 bi bi-lock" width="20%" height="20%" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
            </svg>
              <h2> Connexion </h2>
              <form role="form" action="session.php" method="POST">
                <div class="form-group">
                    <label for="lemail">Adresse mail</label>
                    <input type="email" class="form-control text-center" name = "mail" id="lemail" placeholder="Indiquez votre adresse mail">
                </div>
                <div class="form-group">
                    <label for="pw">Mot de passe</label>
                    <input type="password" class="form-control text-center" name="mdp"  id="pw" placeholder="Indiquez votre mot de passe">
                </div>
                <button type="submit" class="btn btn-primary mt-4 mb-4">Connexion</button>
                </form>
            </article>
        </section>
</div>

<footer>

    <p class="pt-3 mr-2 text-center">&copy;Narjes - Frederic - 2020</p>

</footer>

        </body>
</html>
