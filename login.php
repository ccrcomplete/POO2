<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        login Form
                    </div>
                    <form method="post" action="./db/functions.php" id="loginform">
                        <input type="text" name="usr" placeholder="Usuario" required>
                        
                        <input type="password" placeholder="Contraseña" name="pas" required>

                        <div class="forgotP">
                            <a href="">Forgot password?</a>
                        </div>
                        
                        <input class="login" type="submit" name="submit" value="submit">

                        <h3 id="textDownLine">Or login with</h3>
                    </form>
                    <div class="pie-form">
                        <div class="icons">     
                            <a href="#" id="facebook" class="fa fa-facebook">Facebook</a>
                            <a href="#" id="instagram" class="fa fa-instagram">Instagram</a>
                        </div>
                    </div>
                    <div class="inferior">
                        <h3>Dont you have account?</h3>
                        <a href="#"><span>Sing up</span></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
            
    </body>
</html>