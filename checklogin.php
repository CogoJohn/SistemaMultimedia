 <?php
session_start();


define('DB_SERVER','localhost');
define('DB_NAME','final');
define('DB_USER','root');
define('DB_PASS','siclaro');

$conexion = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    if (!$conexion){ 
        die('Error de Conexión: ' . mysqli_connect_errno());    
    };  

$usuario = $_POST['uname'];
$pass = $_POST['psw'];
 
if(empty($usuario) || empty($pass)){
header("Location: http://localhost/final/index.php");
exit();
}
 
//mysql_connect('localhost','root','*****') or die("Error al conectar " . mysql_error());
//mysql_select_db('login') or die ("Error al seleccionar la Base de datos: " . mysql_error());
 
$result = mysqli_query($conexion,"SELECT * from usuarios where usuario ='" . $usuario . "'");
 
if($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
if($row['password'] == $pass){
session_start();
$_SESSION['usuario'] = $usuario;
header("Location: exito.php");
}else{
header("Location: http://localhost/final/index.php");
exit();
}
}else{
header("Location: http://localhost/final/index.php");
exit();
}


?>