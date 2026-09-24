<?php 
if(session_start() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION = array();
session_destroy();

header("Location: /MINI SISTEMA/index.php");

echo "<script>alert('Mensagem enviada com sucesso!');</script>";
?>


