<?php

require __DIR__ . " /../Model/register.php";

$array = ["uname" => $_REQUEST['uname'], "password" => $_REQUEST['password']];
$_SESSION['newUser']=$array;
header('Location: https://miranda.josemanuelmunoz.com/matricula');