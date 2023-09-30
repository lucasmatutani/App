<?php
session_start();
$_SESSION['usuario'] = $_REQUEST['usuarios'];
$_SESSION['usuario_email'] = $_REQUEST['usuario_email'];


header("location: ./respostas.php");