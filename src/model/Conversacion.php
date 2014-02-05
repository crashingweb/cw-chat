<?php 

class Conversacion{

	private $id_conversacion;
	private $inicio_conversacion;
	private $estado;

	function __construct(){
		//$this->mensaje = $m;
	}

	#getters y setters

	public function getIdConversacion()
	{
	    return $this->id_conversacion;
	}
	public function setIdConversacion(var $id_conversacion)
	{
	    $this->id_conversacion = $id_conversacion;
	}

	public function getInicioConversacion()
	{
	    return $this->inicio_conversacion;
	}
	public function setInicioConversacion(var $inicio_conversacion)
	{
	    $this->inicio_conversacion = $inicio_conversacion;
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