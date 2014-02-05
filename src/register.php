<?php
class register
{
    public $username;
    public $password;
    public $repassword;
    public $email;
    public $fullname;
    public $query;
    public $numrows;
    public $error;
    public $error2;
    public $error3;
    public $error4;
    public $ok;
    public $fields;
    public $regquery;
    
    public function __construct($username, $password, $repeatpassword,  $email, $fullname)
    {
    include "config.php";
        $this->username     =    $username;
        $this->password     =    $password;
        $this->repassword   =    $repeatpassword;
        $this->email        =    $email;
        $this->fullname     =    $fullname;
        $this->query        =    mysql_query("SELECT * FROM usuario WHERE usuario = '".$this->username."'");
        $this->numrows      =    mysql_num_rows($this->query);
        $this->error        =    "Nombre de usuario en uso.";
        $this->error2       =    "Las contraseñas no coinciden";
        $this->error3       =    "Nombre completo y/o nombre de usuarios superan los 25 caracteres.";
        $this->error4       =    "La contraseña debe tener un minimo de 6 caracteres y un maximo de 25";
        $this->ok           =    "Te has registrado correctamente";
        $this->fields       =    "Por favor, rellena todos los campos.";
    }

    public function check()
    {
        if($this->numrows!=0)
        {
            die ($this->error);
        }
        if($this->username&&$this->password&&$this->email&&$this->fullname)
        {
            if($this->password == $this->repassword)
            {
                if(strlen($this->username)>25||strlen($this->fullname)>25)
                {
                    echo $this->error3;
                }
                else
                {
                    if(strlen($this->password)>25||strlen($this->password)<6)
                    {
                        echo $this->error4;
                    }
                    else
                    {
                        $this->password = md5($this->password);
                        $register = mysql_query("INSERT INTO `usuario` (`id_usuario`, `nombre_completo`, `usuario`, `contrasena`, `email`, `admin`) VALUES (NULL, '".$this->fullname."', '".$this->username."', '".$this->password."', '".$this->email."', '0')");
                        echo $this->ok;
                    }
                }
            }
            else
            {
                echo $this->error2;
            }            
        }
        else
        {
            echo $this->fields;
        }
    }
}
include_once "clear.php";
$reg = new register(clear($_POST['username']), clear($_POST['password']), clear($_POST['repeatpassword']), clear($_POST['email']), clear($_POST['fullname']));
echo $reg->check();
?>