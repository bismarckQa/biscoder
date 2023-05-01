<?php 
/*Conexion a la base de datos*/

/*
try {
	$user= 'qafy058';
	$pasw='Ositos1402';
	$conexion = new PDO('mysql:host=qafy058.biscoder.com;dbname=qafy058',$user,$pasw);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET utf8");

} catch (PDOException $e) {
	echo 'Error : '. $e->getMessage();
}*/
try {
	$user = 'root';
	$pasw ='';
	$conexion = new PDO('mysql:host=localhost;dbname=qafy058' ,$user, $pasw);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET utf8");


	
} catch (PDOException $e) {
	echo "Error  de coneccion ".$e-> getMessage();  
}
?>
