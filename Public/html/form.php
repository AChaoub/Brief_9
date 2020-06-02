<?php
include('header.php');
include('../html/login.php');
?>
<?php
 if(isset($_POST['submit']))
 {
     $CIN=htmlentities(trim($_POST['CIN']));
     $Nom_client=htmlentities(trim($_POST['Nom_client']));
     $Prenom_client=htmlentities(trim($_POST['Prenom_client']));
     $Date_Naissance=htmlentities(trim($_POST['Date_Naissance']));
     $Tel_Client=htmlentities(trim($_POST['Tel_Client']));
     $Email=htmlentities(trim($_POST['Email']));
     $Password=htmlentities(trim($_POST['Password']));
     $Adresse=htmlentities(trim($_POST['Adresse']));
     $NumCarte=htmlentities(trim($_POST['NumCarte']));


     if ($CIN&&$Nom_client&&$Prenom_client&&$Date_Naissance&&$Tel_Client&&$Email&&$Password&&$Adresse&&$NumCarte)
      {

          $query= "INSERT INTO `client`  (`CIN`, `Nom_client`, `Prenom_client`, `Date_Naissance`, `Tel_Client`, `Email`, `Password`, `Adresse`, `NumCarte`) VALUES ('KH100200', 'salwa', 'elbyed', '1996-05-24', '0622553366', 'salwa@gmail.com', 'password123', 'ASFI 112', 'CARTESALWA152')";

               if(mysqli_query($con,$query)){
           
    }else{
        echo 'bad'.$query .mysqli_error($con);
    }
          
      } 
      ///////
   
      ///////
      
      else {
         echo "veulliez saisir tous les champs";
     }
     
    }
  

?>



<form action="" method="POST" style="width: 56%;margin-bottom: 4rem;color: #212529;margin-left: 18rem;text-align: center; margin-top: 4rem;">
<div class="form-group">
    
    <input type="CIN" class="form-control" id="formGroupExampleInput2" name="CIN" placeholder="CIN">
  </div>
<!-- <input type="CIN" name="CIN" placeholder="CIN"> -->
<div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Nom_client" placeholder="Nom_client">
  </div>
<!-- <input type="text" name="Nom_client" placeholder="Nom_client"> -->
<div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Prenom_client" placeholder="Prenom_client">
  </div>
<!-- <input type="text" name="Prenom_client" placeholder="Prenom_client"> -->
<div class="form-group">
    
    <input type="date" class="form-control" id="formGroupExampleInput2" name="Date_Naissance" placeholder="Date_Naissance">
  </div>
<!-- <input type="date  " name="Date_Naissance" placeholder="Date_Naissance"> -->
<div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Tel_Client" placeholder="Tel_Client">
  </div>
<!-- <input type="text" name="Tel_Client" placeholder="Tel_Client"> -->
<div class="form-group">
    
    <input type="email" class="form-control" id="formGroupExampleInput2" name="Email" placeholder="Email">
  </div>
<!-- <input type="email" name="Email" placeholder="Email"> -->
<div class="form-group">
    
    <input type="password" class="form-control" id="formGroupExampleInput2" name="Password" placeholder="Password">
  </div>
<!-- <input type="password" name="Password" placeholder="Password"> -->
<div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" name="Adresse" placeholder="Adresse">
  </div>

<!-- <input type="text" name="Adresse" placeholder="Adresse"> -->
<div class="form-group">
    
    <input type="number" class="form-control" id="formGroupExampleInput2" name="NumCarte" placeholder="NumCarte">
  </div>
<!-- <input type="number" name="NumCarte" placeholder="NumCarte"> -->
<input type="submit" value="login" name="submit" placeholder="submit" style="height: 53px;border: thin; background-color: #cc2323; border-radius: 7px;color: white;padding: 12px 30px;">
<!-- <input type="submit" value="login" name="submit" placeholder="submit"> -->
<p> <a href="../html/profile.php">Connectez vous</a></p>
</form>











<?php
include('footer.php');
?>