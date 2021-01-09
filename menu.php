<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
.dropbtn {
  background: linear-gradient(to right ,#cbb4d4,#20002c);
  color: white;
  padding: 16px;
  font-size: 20px;
  border: none;
  text-transform:uppercase;
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
  font-size: 18px;

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

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
          <h5>  <a class="navbar-brand" href="">BOUTIQUE</a></h5>
        </div>

        <div class="nav navbar-header">
           <div class="dropdown">
                <button class="dropbtn">Compte</button>
                    <div class="dropdown-content">
                        <a href="home.php">Profile</a>
                        <a href="logout.php">Se deconnecter</a>
                    </div>

            </div>

           <div class="dropdown">
                <button class="dropbtn">Produits</button>
                    <div class="dropdown-content">
                        <a href="ListeProduit.php">Listes des Produits</a>
                        <a href="addProduit.php">Ajouter Nouveau Produit</a>
                    </div>
            </div>


            <div class="dropdown">
                <button class="dropbtn">Categories</button>
                    <div class="dropdown-content">
                        <a href="listeCat.php">Listes des Categories</a>
                        <a href="addCat.php">Ajouter Nouveau Categorie</a>
                    </div>
            </div>
        
        
        
        </div>
    </div>
</nav>


