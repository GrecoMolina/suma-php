<?php

$nousuario = $_POST['usuario'];
$clave = $_POST['clave'];
$redirect_url = 'loginexitoso.html';

if ($nousuario == "admin" && $clave == "admin") {
    header('Location: ' . $redirect_url);
    exit;
} else {
    echo "rechazado";
}
?>