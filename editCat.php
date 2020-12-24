<?php
    
require 'conx.php';
session_start();
    if (!empty($_GET['id']))
    {
        $id=$_REQUEST['id'];
    }
    
    
    if (!empty($_POST))
    {
        $nom=$_POST['nom'];
        $description=$_POST['description'];
        //$picture=$_FILES['picture'];
        $valid=true;
       
        //Update DATA
        $id=$_GET['id'];
    
        if ($valid)
    {
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="UPDATE `categories` SET `nom`=?,`description`=? WHERE id=?;";
        
        $query = $pdo->prepare($sql);
        $query->execute(array($_POST['nom'],$_POST['description'],$_GET['id']));
        $_SESSION['msg'] = 'Account created successfully.';
        header("location: listeCat.php");

    }}
    else
    {
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * from categories where id=?";
        $query=$pdo->prepare($sql);
        $query->execute(array($id));
        $categories=$query->fetch(PDO::FETCH_ASSOC);
        $nom=$categories['nom'];
        $description=$categories['description'];
        $_SESSION['msg'] = 'ERROR: could not create account.';

        
        
        
        }


include "editCat.phtml";
   
              
?>


