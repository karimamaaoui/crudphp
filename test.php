<?php
include "conx.php";

$pass = "1234";
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
if (password_verify($pass, $pass_hash))
{
  echo "Mot de passe correct";
}
else
{
  echo "Mot de passe incorrect";
}
header("location:login.php");
?>