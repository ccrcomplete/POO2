<?php 

if(isset($_POST['submit'])){
    if(isset($_POST['usr'])){
    include_once('ClassPoo.php');

    $user = $_POST['usr'];
    $pass = $_POST['pas'];
    $loguin = new Loguin();
    $loguin ->entrarDatos($user, $pass);
    $loguin ->loguear();
    $response = $loguin->loguear();

    if($response === "true"){
        header("location: ../inicio.php");
    }
    else{
        echo'<script language"javaScript"> alert("error de datos");</script>';
    }
 }
}

?>