<?php
session_start();
    require 'conx.php';
    if (!empty($_GET['id']))
    {
        $id=$_REQUEST['id'];
    }
    
        $query=$pdo->query('SELECT nom FROM categories');
        $categories=$query->fetchAll(PDO::FETCH_ASSOC);
        
    if (!empty($_POST))
    {
        if (isset($_POST['editer']))
        {
            $id=$_GET['id'];
            $nom=$_POST['nom'];
            $description=$_POST['description'];
            $prix=$_POST['prix'];
            $categorie=$_POST['categorie'];
      
            $images=$_FILES['fileimage']['name'];
            $type=$_FILES['fileimage']['type'];
            $size=$_FILES['fileimage']['size'];
            $temp=$_FILES['fileimage']['tmp_name'];
            var_dump($temp);
            $folder ="upload/";
            $path=$folder.$images;
            $allowed=array('jpeg','png' ,'jpg'); $images=$_FILES['fileimage']['name']; 

            $ext=pathinfo($images, PATHINFO_EXTENSION);
                
            if (file_exists($path)) {
                $images=rand().$images;
                $path=$folder.$images;
            }
            if(!in_array($ext,$allowed) ) 
                
            {    
                echo" Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
            
            }
                
            else{ 
                move_uploaded_file( $_FILES['fileimage'] ['tmp_name'], $path); 
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query=$pdo->prepare("UPDATE `produits` SET `nom`='$nom',`description`='$description',`prix`=$prix,`image`='$images' WHERE id=$id;");
                $query->execute(array($_POST['nom'],$_POST['description'],$_POST['prix'], $images,$_POST['categorie']));
                header("Location:ListeProduit.php");
    }
}}
    else
    {
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * from produits where id=?";
        $query=$pdo->prepare($sql);
        $query->execute(array($id));
        $produit=$query->fetch(PDO::FETCH_ASSOC);
        $nom=$produit['nom'];
        $description=$produit['description'];
        $prix=$produit['prix'];
        $edit_images=$produit['image'];
        
        }

include "editerProd.phtml";
        
?>



