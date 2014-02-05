<?php 

class UsuarioConversacion{

	private $id_usuario_conversacion;
	private $id_usuario;
	private $id_conversacion;
	private $estado;

	#getters y setters

	public function getIdUsuarioConversacion()
	{
	    return $this->id_usuario_conversacion;
	}
	public function setIdUsuarioConversacion(var $id_usuario_conversacion)
	{
	    $this->id_usuario_conversacion = $id_usuario_conversacion;
	}

	public function getIdUsuario()
	{
	    return $this->id_usuario;
	}
	public function setIdUsuario(var $id_usuario)
	{
	    $this->id_usuario = $id_usuario;
	}

	public function getIdConversacion()
	{
	    return $this->id_conversacion;
	}
	public function setIdConversacion(var $id_conversacion)
	{
	    $this->id_conversacion = $id_conversacion;
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