<?php
session_start();

if($_SESSION['login']) {
    echo "Você está logado";
    echo "<br>";
    echo "Usuario: ". $_SESSION['login'];
}else{
    echo "Erro ao logar";
    session_destroy();
}