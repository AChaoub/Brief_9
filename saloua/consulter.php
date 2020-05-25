<?php
include('header.php');
?>

<form style="width: 56%;margin-bottom: 1rem;color: #212529;margin-left: 18rem;text-align: center; margin-top: 4rem;">
<select class="form-control" style="    margin-bottom: 13px;">
  <option>Réf.Produit</option>
</select>
  <div class="form-group">
   
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Qté en stock:">
  </div>
  <div class="form-group">
  
    <input type="text" class="form-control" id="formGroupExampleInput2"Désigniation du produit:">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2"Prix unitaire:">
  </div>

  <button type="button" class="btn btn-outline-primary" style="padding: 0.375rem 2.75rem;"><a href="admin.php" style="text-decoration: none;">Retour</a></button>
  
</form>

      
<?php
include('footer.php');
?>