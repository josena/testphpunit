<?php
namespace App;

Class User {
    public $name;
    public $email;
    private $passwd;
    private $passwd_date_upd;
    
    public function __construct($email)
    {
        $this->email = $email;
        $this->getData();
    }
    
    private function getData()
    {
        // cargamos los datos desde la base
        // de datos a través del $this->email
        $this->name = "Jose Nabor";
        $this->passwd = "prueba123";
        $this->passwd_date_upd = "2023/05/16";
    }
    
    public function getName()
    {
        return $this->name;
    }

    private function updatePswd(string $passwd)
    {
        $this->passwd = $passwd;
    }
    
    private function updateDateUpd()
    {
        $this->passwd_date_upd = now();
    }
    
    private function checkPasswd(string $passwd)
    {
        return $this->passwd == $passwd;
    }
    
    public static function updateUserPasswd(
        string $email,
        string $passwd_old,
        string $passwd_new,
        bool $returnString
    ) {
        // Cargamos el usuario
        $user = new User($email);
        
        // Si el passwd actual es correcto, actualizamos
        if ($user->checkPasswd($passwd_old)) {
            $user->updatePswd($passwd_new);
            $user->updateDateUpd();
            return $returnString ?
                'Contraseña actualizada' :
                true;
        }
        return $returnString ?
            'La contraseña actual no es correcta' :
            false;
    }
}

$user1 = new User("jmorfin@ucol.mx");
$user1->getName();
?>