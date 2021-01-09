<?php
session_start();
include "conx.php";

$name=$_POST['user'];
$pass=$_POST['pwd'];
$sql="SELECT * FROM  users WHERE name='$name' ";

$query=$pdo->prepare($sql);
$query->execute([$_POST['user'],$_POST['pwd']]);


if ($query->rowCount()==1)
{
    
    echo "<script type='text/javascript'>alert('Nom est déja defini');</script>";
    require_once "userLogin.php";
}

else{
    $sql2="INSERT INTO users (name,password) VALUES ('$name','$pass')";
    $query=$pdo->prepare($sql2);
    $query->execute([$_POST['user'],$_POST['pwd']]);
    echo " Compte creez  avec succes ";
}

    
    
?>