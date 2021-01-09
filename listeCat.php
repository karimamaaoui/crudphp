<?php

//creation de la conx
include "conx.php";

//execution d'une requete

$sql='SELECT * from categories';

$query=$pdo->query($sql);

$categories= $query->fetchAll(PDO::FETCH_ASSOC);

include "listeCat.phtml";


?>







