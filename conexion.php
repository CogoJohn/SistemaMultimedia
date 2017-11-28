 <?php
define('DB_SERVER','localhost');
define('DB_NAME','final');
define('DB_USER','root');
define('DB_PASS','siclaro');

$conexion = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());	
	};	
		

//$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
//mysql_select_db(DB_NAME,$con);
?> 