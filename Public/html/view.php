<?php
include("header.php");
include("function.php");

?>

<?php
$result = show_commande($con);
?>

<?php while($row = mysqli_fetch_assoc($result)):?>

<img src="image/<?php echo$row['image_produit'] ?>" alt="" style="width: 200px; height:300px">
<p><?php echo$row['CIN'] ?></p>
<p><?php echo$row['Id_Commande'] ?></p>
<p><?php echo$row['Date_Commande'] ?></p>
<?php endwhile; ?>

<?php
include("footer.php");
?>