<?php
include('header.php');
include('login.php');
?>
<?php

  include 'function.php';
  // 
  $produits = getAllDataFromTable('produit');
  $index = 0;
  while ($row = $produits->fetch_assoc()) {
      $prodId = $row["Id_produit"];
      $prodCategId = $row["Id_categorie"];
      $prodPrice = $row["Prix_produit"];
      $prodImage = $row["Image_produit"];
      $prodDescrp = null;
      $qt = $row["Quantite_Max"];
      // 
      $categs = getAllDataFromTable('categorie');
      while ($row = $categs->fetch_assoc()) {
          if ($prodCategId == $row["Id_categorie"])
              $prodDescrp = $row["Description_categorie"];
      }
    }
?>
<form style="width: 56%;margin-bottom: 4rem;color: #212529;margin-left: 18rem;text-align: center; margin-top: 4rem;">
<h3>Entrer un nouveau produit </h3>
  
  <div class="form-group">
  <?php
    $query="SELECT * FROM `categorie` ";
    $stmt=$con->prepare($query);
    $stmt->execute();
    $result=$stmt->get_result();
  ?>


                           <select class="form-control" id="formGroupExampleInput2" name="Description_categorie"  >
                           <?php while($row=$result->fetch_assoc()){ ?>
                                <option value=""><?=$row['Description_categorie'];?></option>
                           
                                   <?php } ?>
                            </select>
                       
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Prix_produit" placeholder="Prix_produit">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Quantite_Max" placeholder="Quantite_Max:">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Description_categorie" placeholder="Description_categorie">
  </div>

  <form>
  <div class="form-group">

    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
  <button type="button" class="btn btn-outline-primary" style="padding: 0.375rem 2.75rem;margin-left: 30rem;margin-top: -2rem;"><a href="admin.php" style="text-decoration: none;">Retour</a></button>
  <button type="button" class="btn btn-outline-primary" id="btnAddProductExecute" style="padding: 0.375rem 2.75rem;margin-top: -2rem;"><a href="admin.php" style="text-decoration: none;">Envoyer</a></button>
</form>




<!-- $query="SELECT * FROM `categorie`";
$stmt=$con->prepare($query);
$stmt->execute(); -->














<?php
include('footer.php');
?>