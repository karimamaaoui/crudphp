<?php
    require 'conx.php';
    if (!empty($_GET['id']))
    {
        $id=$_REQUEST['id'];
    }
    
        $query=$pdo->query('SELECT id,nom FROM categories');
        $categories=$query->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($_POST))
    {
        $id=$_GET['id'];
        $nom=$_POST['nom'];
        $description=$_POST['description'];
        $prix=$_POST['prix'];
        $categorie=$_POST['categorie'];
    
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql1="UPDATE `produits` SET `nom`='$nom',`description`='$description',`prix`=$prix,`categories_id`=$categorie WHERE id=$id;";
        
        $q = $pdo->prepare($sql1);
        $q->execute(array($nom,$description, $prix, $categorie, $id));
       
        
        header("location: ListeProduit.php");
        exit();
    }
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


