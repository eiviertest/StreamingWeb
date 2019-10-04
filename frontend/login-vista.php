<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StreamingWeb</title>    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/style.css">    
</head>
<body> 
    <!-- Include the SDK para JavaScript  -->   
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0&appId=2383589298561819&autoLogAppEvents=1"></script>
    <div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="https://www.tecnologiadetuatu.elcorteingles.es/wp-content/uploads/2019/03/Portada-Stadia.jpg" alt="">
                <h2>StreamingWeb</h2>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login active">Iniciar sesion</li></a>
                <a href="register.php"><li class="module-register">Registrarse</li></a>
            </div>
        </div>        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Bienvenido a</h1><h2>StreamingWeb</h2></div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="clave">
            </div>            
            <?php if(!empty($error)): ?>
                <div class="mensaje">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>            
            <button type="submit">Entrar<label class="lnr lnr-chevron-right"></label></button>
        </form>
        <br>
        <p align="center">Ó</p>
        <!-- Botón Login facebook -->
        <div class="fb-login-button" data-width="100" data-size="medium" data-button-type="continue_with" data-auto-logout-link="true" data-use-continue-as="true"></div>
    </div> 
    <!-- Estructura comentarios -->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>