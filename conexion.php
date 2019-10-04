<?php    
try{
	$conexion = new PDO('mysql:host=localhost;dbname=id10984293_login_tuto', 'id10984293_admin', '12345');
}catch(PDOException $prueba_error){
	echo "Error: " . $prueba_error->getMessage();
}
?>