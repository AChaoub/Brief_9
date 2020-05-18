<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/acceuil.css">

    <title>Auchan</title>
</head>
<body>
    <?php
    include('header.php');
    ?>
    
<div class="head">
<h1 class="title">Mon compte Auchan</h1>
</div>

 <div class="menu">

 <h2><a href="#" class="menu_item ">Tableau de bord</a></h2>
        <a href="<?php echo "view.php"; ?>" class="menu__item">Mes commandes</a> 
        <a href="#" class="menu__item1">Mes produits</a>
        <a href="#" class="menu__item2">Bons de réductions</a>
        <a href="#" class="menu__item3">Besoin d’aide</a>

      
            <button class="submit" type="submit"><a href="profile.php"> Déconnexion</a></button>
       
 </div>

  <div class="menu2"><img src="image/imag2.jpg" >
     <p class="titl2">Mon compte</p>
     <hr class="lign">
     <h2 class="titl3">bienvenue dans votre <br> espace :)</h2>
  </div>

 
  <div class="contener">

      <div class="table1">
          <p class="titre">Aucune commande en cours</p>
          <button class="btn"><h3><a href="<?php echo "view.php"; ?>">Voir toutes mes commandes</a></h3></button>
      </div>

      <div class="table2">
           <img src="image/imag4.jpg" >
          <p class="titre2"><a href="#">Mes produit</a></p>
       
      </div>

      <div class="table3">
           <img src="image/imag5.jpg" >
          <p class="titre3"><a href="#">Bons de réductions</a></p>
       
      </div>

      <div class="table4">
           <img src="image/imag6.jpg" >
          <p class="titre4"><a href="#">Mes défis waaoh!</a></p>
       
      </div>

      
  </div>

  <div class="content">
      <p class="parag"> &nbsp; &nbsp; Faire ses courses en ligne c'est facile avec Auchan : remplissez votre panier sur notre site web ou notre appli, choisissez un créneau pour récuperer votre commande, et réceptionnez au choix vos courses soit dans un drive Auchan, soit directement à votre domicile ! Notre service de livraison à domicile est actuellement proposé sur les agglomérations de Paris, Lyon et Lille.</p>
      <p class="parag2" >&nbsp; &nbsp; Parmi vos univers et rayons favoris : <a href="#"> Produits bio, Bières et cidres, Coca-Cola et sodas, couches bébé, packs et bouteilles d'eau plate, lessive, jus de fruit, laits et céréales bébé, bonbons, chocolat, fromage à raclette, tartiflette, poulet et volaille, pâtes, gâteaux et desserts surgelés, biscuits, barres chocolatées, épices, légumes en conserve, pommes de terre, fruits, céréales petit-déjeuner, fruits secs, sauces et condiments, lait et boissons végétales, charcuterie, apéritifs sans alcool, confitures, miels et pâtes à tartiner, oeufs, papier toilette, fromage râpé, yaourts, chocolat en poudre, fruits frais, légumes frais, oeufs, lait, farine, yaourts et fromage blanc, jambons, jambons de volaille, légumes en conserve, riz, pâtes, oeufs de Pâques, ...</a></p>
      <h3 class="para">Et hop, vos courses rapidement faites !</h3>  
      <p class="parag3">Vos courses à domicile,<br>en drive ou en consigne</p>
      <p class="parag4">Paiement en ligne <br>ou au retrait</p>
      <p class="parag5">Qualité et fraîcheur <br>des produits garanties</p>
    </div>

  <div class="foot1">
  <h1 class="foot2">Oui à la newsletter !</h1>
  <p class="foot3">Recevez les meilleures offres des magasins Auchan et d'Auchan.fr *</p>
  <input type="email" name="email" id="email" value="Votre E-mail" class="mail" >
  <button class="boton">Envoi</button>
  </div>  





</body>
</html>