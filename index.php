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
include 'blog/post.php';
include 'blog/article.php';
include 'blog/category.php';
include 'blog/comment.php';

$users =[
    new User("Pippo", "Depippis", "pippo@bello.com", 34, "Erpippo86", "xxx", 'moderatore'),
    new User('Guido', 'La Barca', "drivingboat@sail.com", 43, 'guidu77', 'yyy'),
    new User('Massimo', 'Impegno', 'maxeffort80@max.com', 41, 'madmax', 'xyz', 'admin')
];
foreach ($users as $user) {
    var_dump($user);
}

$post = new Post("Content", "Author", "tag");
var_dump($post);

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

$categories = [
    new Category("Fashion"),
    new Category("Sport"),
    new Category("Food"),
    new Category("Economics"),
    new Category("Health"),
    new Category("Experts' opinion")
];

foreach ($categories as $category) {
    var_dump($category);
}

$comments = [
    new Comment("Non mi piace...", "Aurelio76"),
    new Comment("Mi piace...", "Aurelio76")
];

foreach ($comments as $comment) {
    var_dump($comment);
}