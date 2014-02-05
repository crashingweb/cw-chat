<?php 

class Usuario{

	private $id_relacion;
    private $id_usuario_a ;
    private $id_usuario_b;
	private $estado;

	function __construct(){
		//$this->mensaje = $m;
	}

	#getters y setters

	public function getIdRelacion()
	{
	    return $this->id_relacion;
	}
    public function setIdRelacion(var $id_relacion)
    {
        $this->id_relacion = $id_relacion;
    }

	public function getIdUsuarioA()
	{
	    return $this->id_usuario_a;
	}
	public function setIdUsuarioA(var $id_usuario_a)
	{
	    $this->id_usuario_a = $id_usuario_a;
	}

	public function getIdUsuarioB()
	{
	    return $this->id_usuario_b;
	}
	public function setIdUsuarioB(var $id_usuario_b)
	{
	    $this->id_usuario_b = $id_usuario_b;
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