<?php session_start();
if(isset($_SESSION['usuario'])) {
    header('location: index.php');
}
$error = '';    
if($_SERVER['REQUEST_METHOD'] == 'POST'){        
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $clave = hash('sha512', $clave);        
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=id10984293_login_tuto', 'id10984293_admin', '12345');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }        
    $statement = $conexion->prepare('
        SELECT * FROM login WHERE usuario = :usuario AND clave = :clave'
    );        
    $statement->execute(array(
        ':usuario' => $usuario,
        ':clave' => $clave
    ));            
    $resultado = $statement->fetch();       
    if ($resultado !== false){
        $_SESSION['usuario'] = $usuario;
        header('location: principal.php');
    }else{
        $error .= '<i>Usuario o contraseña incorrecta, favor de verificar sus datos.</i>';
    }
}    
require 'frontend/login-vista.php';
?>