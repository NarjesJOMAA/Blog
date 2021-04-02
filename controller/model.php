<?php

require('connection_bdd.php');

function getArticle($premiereEntree, $articlesParPage){
    $bdd = blogconnect();
    $query_articles = 'SELECT id, titre, img, created_at, descript, slug FROM articles 
                        ORDER BY created_at DESC LIMIT '.$premiereEntree.', '.$articlesParPage.'';
    $articles = $bdd->query($query_articles)->fetchALL(PDO::FETCH_ASSOC);
    return $articles;
}

function getArticlesCategorie($idcat){
    $bdd = blogconnect();
    $query_articlescategorie = "SELECT id, titre, img, created_at, descript, slug FROM articles WHERE articles.categorie_id= '$idcat' ";
    $articles = $bdd->query($query_articlescategorie)->fetchALL(PDO::FETCH_ASSOC);
    return $articles;
}


function getname($id){
    $bdd = blogconnect();
    $query_name = 'SELECT nom FROM auteurs
    INNER JOIN articles ON articles.auteur_id = auteurs.id 
    WHERE articles.id='.$id;
    $name = $bdd->query($query_name)->fetch(PDO::FETCH_ASSOC);
    return $name;
}

function getInfoArticle($id){
    $bdd = blogconnect();
    $query_infoArticle = 'SELECT id, titre, img, created_at, content, updated_at FROM articles
    WHERE articles.id='.$id;
    $infoArticle = $bdd->query($query_infoArticle)->fetch(PDO::FETCH_ASSOC);
    return $infoArticle;

}

function getEmails(){
    $bdd = blogconnect();
    $query_getEmail = 'SELECT mail FROM auteurs';
    $getEmails = $bdd->query($query_getEmail)->fetchALL(PDO::FETCH_ASSOC);
    return $getEmails;
}

function getPassword(){
    $bdd = blogconnect();
    $query_getPassword = 'SELECT mdp FROM auteurs';
    $getPassword = $bdd->query($query_getPassword)->fetchAll(PDO::FETCH_ASSOC);
    return $getPassword;

}

function getId($mail){
    $bdd = blogconnect();
    $query_getId = "SELECT id, nom, prenom, mdp FROM auteurs WHERE mail = '$mail'"; 
    $getId = $bdd->query($query_getId)->fetch(PDO::FETCH_ASSOC);
    return $getId;
}

function getArticlesAuteur($id){
    $bdd = blogconnect();
    $query_articles = "SELECT id, titre, slug FROM articles WHERE articles.auteur_id= '$id'
                        ORDER BY created_at DESC LIMIT  0,10";
    $articlesAuteur = $bdd->query($query_articles)->fetchALL(PDO::FETCH_ASSOC);
    return $articlesAuteur;
}

function getCategories(){
    $bdd = blogconnect();
    $query_Categories = "SELECT id, nom_categorie FROM categories";
    $Categories = $bdd->query($query_Categories)->fetchALL(PDO::FETCH_ASSOC);
    return $Categories;
}

function insertAuteur($nom, $prenom, $mail, $passwodCryt){
    $bdd = blogconnect();
    $query_inserAuteur = 'INSERT INTO auteurs (`id`,`nom`,`prenom`,`mail`,`mdp`) VALUES (NULL, :nom, :prenom, :mail, :mdp)';
    $inserAuteur = $bdd->prepare($query_inserAuteur);
    $inserAuteur->execute([':nom' => $nom , ':prenom'=> $prenom , ':mail' => $mail, ':mdp'=> $passwodCryt]);
}


function insertArticle($titre,$slug,$img,$contenu,$descriptif,$auteur_id,$categorie_id){
    $bdd = blogconnect();
    $content = $bdd->quote($contenu);
    $descript = $bdd->quote($descriptif);
    $query_insert = "INSERT INTO articles (`id`,`titre`,`slug`,`img`,`content`,`descript`,`auteur_id`,`categorie_id`)
                        VALUES (NULL, '$titre', '$slug', '$img', $content, $descript, '$auteur_id', '$categorie_id')";
    $bdd->query($query_insert);
}

function getComments($id){
    $bdd = blogconnect();
    $query_commentaires = 'SELECT contenu, date_creation, auteur FROM billets WHERE billets.article_id ='.$id;
    $commentaires = $bdd->query($query_commentaires)->fetchALL(PDO::FETCH_ASSOC);
    return $commentaires;
}

function insertComments($contenu,$article_id,$createur){
    $bdd = blogconnect();
    $content = $bdd->quote($contenu);
    $auteur = $bdd->quote($createur);
    $query_comments = "INSERT INTO billets (`id`,`contenu`,`article_id`,`auteur`)
                            VALUES (NULL, $content, '$article_id', $auteur)";
    $bdd->query($query_comments);

}

function getnb(){
    $bdd = blogconnect();
    $retour_total= 'SELECT COUNT(*) AS total FROM articles'; 
    $total = $bdd->query($retour_total)->fetch(PDO::FETCH_ASSOC);
    return $total; 
}

