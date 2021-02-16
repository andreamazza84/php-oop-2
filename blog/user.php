<?php 

/** User 
 * 
*/
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
