<?php 

class Usuario{

	private $id_usuario;
    private $nombre_completo ;
    private $usuario;
    private $contrasena ;
    private $email;
	private $admin; 
	private $estado;

	function __construct(){
		//$this->mensaje = $m;
	}

	#getters y setters

	public function getIdUsuario()
	{
	    return $this->id_usuario;
	}
    public function setIdUsuario(var $id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

	public function getNombreCompleto()
	{
	    return $this->nombre_completo;
	}
    public function setNombreCompleto(var $nombre_completo)
    {
        $this->nombre_completo = $nombre_completo;
    }

	public function getUsuario()
	{
	    return $this->usuario;
	}
    public function setUsuario(var $usuario)
    {
        $this->usuario = $usuario;
    }

	public function getContrasena()
	{
	    return $this->contrasena;
	}
	public function setContrasena(var $contrasena)
	{
	    $this->contrasena = $contrasena;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	public function setEmail(var $email)
	{
	    $this->email = $email;
	}

	public function getAdmin()
	{
	    return $this->admin;
	}
	public function setAdmin(var $admin)
	{
	    $this->admin = $admin;
	}

	public function getEstado()
	{
	    return $this->estado;
	}
	public function setEstado(var $estado)
	{
	    $this->estado = $estado;
	}

}

?>