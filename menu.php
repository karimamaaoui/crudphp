<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">BOUTIQUE</a>
        </div>

        <div class="nav navbar-header">
           <button type="button" active> <a href="login.php">Home</a></button>
           <div class="dropdown">
                <button class="dropbtn">Produits</button>
                    <div class="dropdown-content">
                        <a href="ListeProduit.php">Listes des Produits</a>
                        <a href="addProduit.php">Ajouter Nouveau Produit</a>
                        <a href="editerProd.php">Editer Produit</a>
                    </div>
            </div>


            <div class="dropdown">
                <button class="dropbtn">Categories</button>
                    <div class="dropdown-content">
                        <a href="listeCat.php">Listes des Categories</a>
                        <a href="addCat.php">Ajouter Nouveau Categorie</a>
                        <a href="editCat.php">Editer Categorie</a>
                    </div>
            </div>
        
        
        
        </div>
    </div>
</nav>


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>