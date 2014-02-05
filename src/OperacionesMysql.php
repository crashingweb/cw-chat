<?php 
class OperacionesMysql
{
	//thelions_chat
	private $servidor = 'localhost';
	private $usuario = 'root';
	private $pass = 'root';
	private $basedatos = 'chat';
	
	/*private $usuario = 'thelions_chat';
	private $pass = 'thelions_chat';
	private $basedatos = 'thelions_chat';*/

	public function Conectar(){
		$con = mysqli_connect($this->servidor,$this->usuario,$this->pass,$this->basedatos) or die('Lo siento, no hay conexión.');
		return $con;
	}
	public function SeleccionarTodosMensajes(){
		$sql = "SELECT * FROM mensaje_usuario_conversacion";
		$con = $this->Conectar();
		$res = mysqli_query($con,$sql) or die ('Lo siento error al seleccionar datos.');
		return $res;
	}

	public function InsertarMensaje($mensaje){
		$sql = "INSERT INTO mensaje_usuario_conversacion(id_usuario_conversacion,mensaje,fecha_ingreso_mensaje) VALUES ('1','$mensaje->mensaje',now())";
		$con = $this->Conectar();
		mysqli_query($con,$sql) or die ('Lo siento pero no inserta.'.mysqli_error($con));
	}

}

include_once "mensaje.php";
if(isset($_POST["method"])) {
    $method = $_POST["method"];
    $mensaje = $_POST['mensaje'];
    if($method=="insertar") {
    	$mens = new Mensaje($mensaje);
       	$op = new OperacionesMysql();
		$op->InsertarMensaje($mens);
		echo "Mensaje se Inserto Correctamente";
    }
}

?>