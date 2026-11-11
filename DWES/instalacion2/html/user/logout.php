<?php
require_once __DIR__  .'userFunction.php';
$_SESSION= [];
session_destroy();
header("Location: $url");
exit;
           