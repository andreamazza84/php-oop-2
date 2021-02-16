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

class User
    {
    public $name;
    public $lastname;
    public $email;
    public $age;
    public $username;
    private $password;
    public $access_rights;
    public function __construct(string $name, string $lastname, string $email, int $age, string $username, string $password, string $access_rights="user")
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->age = $age;
        $this->username = $username;
        $this->password = $password;
        $this->access_rights = $access_rights;
    }
}

$pippo = new User("Pippo", "Depippis", "pippo@bello.com", 34, "Erpippo86", 'xxxx');
var_dump($pippo);