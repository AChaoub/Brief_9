<?php
include('login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/header+footer.css">
    <link rel="stylesheet" href="css/acceuil.css">
    <link href="https://fonts.googleapis.com/css?family=Jost&display=swap" rel="stylesheet">

    <script src="js/header+footer.js"></script>
    <script src="js/index.js"></script>

    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>
    <div id="ImgAcc">
<div id="imge" ><img src="image/food2.jpg" style="position:absolute;width:100%;height:450px;" ></div>
        <div id="Header">
            <img id="logo" src="image/logo.png" alt="">
            <div id="HeaderWithoutLogo">
                <div id="Rayons">
                    <img id="search" src="image/bars.png" alt="">
                    <p>Rayons</p>
                </div>
                <div id="Recherche">
                    <input type="text" placeholder="Lait,oeufs,coca.....">
                    <button><img src="image/search.png" alt=""></button>
                </div>
                <div id="RechercheMobile">
                    <button><img src="image/search.png" alt=""></button>
                    <p>Recherche</p>

                </div>
                <div id="Moncompte">
                    <img id="profil" src="image/profil.png" alt=""  >
                    <p><a href="profile.php" > Mon Compte</a></p>
                </div>
                <div id="Moncompte">
            
                </div>
               

                <div id="Panier">
                    <button>
                        <img src="image/panier.png" alt="">
                        <p>0,00$</p>
                    </button>

                </div>

            </div>
            <div id="CliqueSearchMobile" style="display: none;">
                <div>
                    <div id="Recherche1">
                        <input type="text" placeholder="Lait,oeufs,coca.....">
                        <button><img src="image/search.png" alt=""></button>
                    </div>
                    <p id="Annuler">annuler</p>
                </div>
                <div id="Panier1">
                    <button>
                        <img src="image/panier.png" alt="">
                        <p>0,00$</p>
                    </button>
                </div>

            </div>
        </div>
        <div id="MessageAcc" style="position:absolute;">
            <div id="div1">
                <p id="Bienvenue">Bienvenue :)</p>
            </div>
            <div id="message1">
                <p>Vos courses en ligne avec Carrefour</p>
            </div>
            <div><button><a href="espace.php" style="text-decoration:none;">Je me connecte</a></button></div>
        </div>

    </div>
    <div id="Popup">
        <div id="Barreclose">
            <div id="Pcat">
                <p> Nos rayons</p>
            </div>
            <div id="close">
                <button id="btnFermer"><img src="image/close.png" alt=""></button>
            </div>
        </div>
        <div id="Categories">
            <div class="Categorie">
                <img src="image/Categorie/Selection.png" alt="">
                <p>Toute la séléction</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Produits-laitiers.png" alt="">
                <p>Produits laitiers, oeufs, fromages</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Boucherie.png" alt="">
                <p>Boucherie, volaille, poissonnerie</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Charcuterie.png" alt="">
                <p>Charcuterie, traiteur, pain</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Fruits-legumes.png" alt="">
                <p>Fruits, légumes </p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Surgeles.png" alt="">
                <p>Surgelés</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Epecerie.png" alt="">
                <p>Epicerie sucrée</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Epicerie-salee.png" alt="">
                <p>Epicerie salée</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Boissons.png" alt="">
                <p>Boissons</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Bebe.png" alt="">
                <p>Bébé</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Hygiene.png" alt="">
                <p>Hygiène, beauté, parapharmacie</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Entretien.png" alt="">
                <p>Entretien</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Animalerie.png" alt="">
                <p>Animalerie</p>
            </div>
            <div class="Categorie">
                <img src="image/Categorie/Loisirs.png" alt="">
                <p>Aller sur le site Maison &amp; Loisirs</p>
            </div>



        </div>
    </div>
    <div class="blanck"></div>

    <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>