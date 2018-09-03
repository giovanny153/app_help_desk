<?php
session_start();
$_SESSION['autenticado']=null;
header("Location: index.php");
?>