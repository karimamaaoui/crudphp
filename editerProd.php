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
            $edit_images=$_FILES['fileimage']['name'];
            var_dump($edit_images);
            $tmp=$_FILES['fileimage']['tmp_name'];

            
            
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql1="UPDATE `produits` SET `nom`='$nom',`description`='$description',`prix`=$prix,`image`='$edit_images',`categories_id`=$categorie WHERE id=$id;";
            $q = $pdo->prepare($sql1);
            
            if ($q)
            {
                move_uploaded_file( $_FILES['fileimage'] ['tmp_name'], "upload/".$_FILES['fileimage']['name']); 
                
            }
        
                $_SESSION['message']="mise  a jour  ";
        
            
        //header("location: ListeProduit.php");
        //exit();
    
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
        
        }

    




include "editerProd.phtml";
        
?>



