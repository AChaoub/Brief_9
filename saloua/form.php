<?php
include('header.php');
include('login.php');
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



<form action="" method="POST" >
<input type="CIN" name="CIN" placeholder="CIN">
<input type="text" name="Nom_client" placeholder="Nom_client">
<input type="text" name="Prenom_client" placeholder="Prenom_client">
<input type="date  " name="Date_Naissance" placeholder="Date_Naissance">
<input type="text" name="Tel_Client" placeholder="Tel_Client">
<input type="email" name="Email" placeholder="Email">
<input type="password" name="Password" placeholder="Password">

<input type="text" name="Adresse" placeholder="Adresse">
<input type="number" name="NumCarte" placeholder="NumCarte">
<input type="submit" value="login" name="submit" placeholder="submit">
<p> <a href="profile.php">Connectez vous</a></p>
</form>











<?php
include('footer.php');
?>