<?php
include('login.php');
include('header.php');
?>
<?php
// session_start();

// $con =mysqli_connect($servername,$username,$password,$dbname);
?>

<h4>Bonjour admin!</h4>
<table class="table table-bordered" style="width: 56%;margin-bottom: 1rem;color: #212529;margin-left: 18rem;text-align: center;" methode="POST">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Option</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><svg  class="bi bi-check-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1013.5 8a.5.5 0 011 0 6.5 6.5 0 11-3.25-5.63.5.5 0 11-.5.865A5.472 5.472 0 008 2.5z" clip-rule="evenodd"/>
</svg></th>
      <td><a href="consulter.php" style="text-decoration: none;color:black;">Consulter les informations des produits</a></td>
     
    </tr>

    <tr>
      <th scope="row"><svg class="bi bi-check-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1013.5 8a.5.5 0 011 0 6.5 6.5 0 11-3.25-5.63.5.5 0 11-.5.865A5.472 5.472 0 008 2.5z" clip-rule="evenodd"/>
</svg></th>
      <td colspan="2"><a href="command.php" style="text-decoration: none;color:black;">Entrer une nouvelle commande</td>
     
    </tr> 
  </tbody>
</table>
<button type="button" class="btn btn-outline-primary" style="margin-left: 35rem;padding: 0.375rem 2.75rem;margin-bottom: 2rem;">valider</button>


<?php
include('footer.php');
?>