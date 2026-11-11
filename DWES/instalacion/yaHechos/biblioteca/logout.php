<?php 
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/auth.php';

$currentUser = requireAuth($pdo); //por si acaso lo pongo
$_SESSION = [];
session_destroy();
header("Location: login.php");
exit;

?>