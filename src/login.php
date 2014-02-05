<?php
class login
{
    public $user;
    public $post_password;
    public $query;
    public $mysql_password;
    public $error;
    public $ok;
    public $numrows;
    public $fields;

    public function __construct($username, $password)
    {    
        include "config.php";
        $this->user             =    $username;
        $this->post_password    =    $password;
        $this->query            =    mysql_query("SELECT * FROM users WHERE username = '".$this->user."'");
        $this->mysql_password   =    mysql_fetch_array($this->query);
        $this->numrows          =    mysql_num_rows($this->query);
        $this->error            =    "Nombre de usuario o password incorrectos.";
        $this->ok               =    "Bienvenido ".$this->user.". Te has logueado correctamente.";
        $this->fields           =    "Por favor, rellena todos los campos.";
    }
    public function check()
    {
        if($this->user && $this->post_password)
        {
            if($this->numrows !=0)
            {
                if($this->mysql_password['password'] == md5($this->post_password))
                {
                    session_start();
                    $_SESSION['username'] = $this->user;
                    echo $this->ok;
                }
                else
                {
                    echo $this->error;
                }
            }
            else
            {
                echo $this->error;
            }
        }
        else
        {
            echo $this->fields;
        }
    }
}
include_once "clear.php";
$login = new login(clear($_POST['username']), clear($_POST['password']));
echo $login->check();
?>