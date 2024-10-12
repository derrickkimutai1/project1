
<?php
class fnc {

    public $name;
    public $fname;
    protected $username;
    private $password;

    // Constructor
    public function __construct($fname){
        $this->fname = $fname;
    }

    // Method to calculate user's age
    public function user_age($yob){
        $age = date('Y') - $yob;
        return $age;
    }

    // Method to hash the password
    public function hash_pass($pass){
        return password_hash($pass, PASSWORD_DEFAULT);
    }

}

// Creating an object and initializing the fname property
$Obj = new fnc("Alex");

?>
