<?php 

// Istruzioni:
// Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
// Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
// Il database e la tabella non devono essere realmente creati.
// Bonus (non tanto facoltativo):
// Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.
// Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
// Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi.
// Cercate di pensare anche ad una classe che possa avere una sub-class e fate pratica con l'extends.

include 'blog/user.php';
include 'blog/article.php';


$pippo = new User("Pippo", "Depippis", "pippo@bello.com", 34, "Erpippo86", "xxx");
var_dump($pippo);

$articles = [
    new Article("La banana è il vero frutto dell'amore?", "Forse sì, gli esperti si dividono...", "Erpippo86", "Sessuologia"),
    new Article("Mal di testa? La soluzione dell'italiana Beretta", "Tenere le armi in casa...", "Erpippo86", "Salute"),
    new Article("Gare di impennate", "Il team Spread batte tutti...", "Erpippo86", "Finanza"),
    new Article("Il tuo alfabeto conta 20 lettere?", "Potresti avere l'erre moscia...c'hai mai pensato?", "Erpippo86", "Parola dell'esperto"),
    new Article("Sigaretta dopo il sesso", "Esplode allevamento di mucche nel lucchese", "Erpippo86", "Cronaca"),

];
foreach ($articles as $article) {
    var_dump($article);
}