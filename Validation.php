<?php
session_start();
include "conx.php";

$name=$_POST['user'];
$pass=$_POST['pwd'];
$secure_pass=password_hash($pass,PASSWORD_BCRYPT);

$sql="SELECT * FROM  users WHERE name='$name' && password='$pass' ";

$query=$pdo->prepare($sql);
$query->execute([$_POST['user'],$_POST['pwd']]);


if ($query->rowCount()==1)
{   
    $_SESSION['user']=$name;
    if (password_verify($pass,$secure_pass))
    {
        header('location:home.php');
        exit();
    }
}

else{

    echo "<script type='text/javascript'>alert('Mot passe incorrecte');</script>";
    require 'userLogin.php'; 

}
    
    
?>