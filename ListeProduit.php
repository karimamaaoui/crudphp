<?php 
session_start();
    if(!isset($_SESSION['user']))
    {
        header('location:login.php');
        exit();
    }

include ("conx.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql='SELECT produits.*, categories.nom as nom_categorie from produits INNER Join categories ON produits.categories_id=categories.id';
    $query=$pdo->query($sql);
    $produits=$query->fetchAll(PDO::FETCH_ASSOC);
    include "ListeProduit.phtml";






?>


