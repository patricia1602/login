<?php 

// destroi a sessão
session_destroy();

// redirecina para a sessão principal
header('Location: index.php?rota=home');
?>