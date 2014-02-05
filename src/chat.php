<?php  
     session_start();
    include 'mensaje.php';
    include 'OperacionesMysql.php';
    $op = new OperacionesMysql();
    $res = $op->SeleccionarTodosMensajes();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>JS Bin</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
$( document ).ready(function() {
  $("#sendMessage").focus();
  contenido.scrollTop = 50000;

    $("#sendMessage").keypress(function(e) {

        if(e.which == 13) {
            $.ajax({  
              type: "POST",  
              url: "OperacionesMysql.php",
              data: {method: 'insertar',mensaje: $("#sendMessage").val()},
              success: function(msg){
                alert(msg);
                location.href='chat.php';
              }  
            });

            
        }
    });
}); 

</script>

</head>
<body>
  <table border="1">
    <tr>
      <td>
        <div id="contenido" style="height: 300px; overflow-y: scroll;">
          <?php  
              while ($fila = mysqli_fetch_assoc($res)) {
                  echo'<span class="user_1">'.$_SESSION['username'].':</span>'.$fila['mensaje'].'<br> ';
              }
          ?>

        </div>
      </td>
    </tr>  
    <tr>
      <td>
        <textarea id="sendMessage" rows="4" cols="50" placeholder="Escribe y apretar enter para mandar tu mensaje."></textarea>
      </td>
    </tr>     
  </table>
  <?php  
    echo 'Hola '.$_SESSION['username'];

    echo '<br><a href="logout.php"> Logout. </a>';
  ?>
</body>
</html>