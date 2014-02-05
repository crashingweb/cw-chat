<?php 

class MensajeUsuarioConversacion{

	private $id_mensaje_usuario_conversacion;
	private $id_usuario_conversacion;
	private $mensaje;
	private $fecha_ingreso_mensaje;
	private $estado;

	#getters y setters

	public function getIdMensajeUsuarioConversacion()
	{
	    return $this->id_mensaje_usuario_conversacion;
	}
	public function setIdMensajeUsuarioConversacion(var $id_mensaje_usuario_conversacion)
	{
	    $this->id_mensaje_usuario_conversacion = $id_mensaje_usuario_conversacion;
	}

	public function getIdUsuarioConversacion()
	{
	    return $this->id_usuario_conversacion;
	}
	public function setIdUsuarioConversacion(var $id_usuario_conversacion)
	{
	    $this->id_usuario_conversacion = $id_usuario_conversacion;
	}

	public function getMensaje()
	{
	    return $this->mensaje;
	}
	public function setMensaje(var $mensaje)
	{
	    $this->mensaje = $mensaje;
	}

	public function getFechaIngresoMensaje()
	{
	    return $this->fecha_ingreso_mensaje;
	}
	public function setFechaIngresoMensaje(var $fecha_ingreso_mensaje)
	{
	    $this->fecha_ingreso_mensaje = $fecha_ingreso_mensaje;
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