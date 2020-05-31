<?php
include('login.php');
include('header.php');
?>

<br>
<br>
<div class="col-md-10 " style="margin: auto;">
        <?php
            $sql="SELECT * FROM produit";
            $stm=$con->prepare($sql);
            $stm->execute();
            $result=$stm->get_result();
        ?>
            <h4 class="text-center bg-primary text-white p-2">Produit</h4>
            <br>
            <table class="table mr-4">
            <thead class="thead-dark">
                <tr>
                    <th>Id_produit</th>
                    <th>Description_produit</th>
                    <th> Quantite_Max</th>
                    <th> Prix_produit</th>
                   

                </tr>
            </thead>
            <tbody >
            <?php while($row=$result->fetch_assoc()){ ?>
                <tr>
                    <td><?=$row['Id_produit'];?></td>
                    <td><?=$row['Description_produit'];?></td>
                    <td><?=$row['Quantite_Max'];?></td>
                    <td><?=$row['Prix_produit'];?></td>
                 
            <?php } ?>
            </tbody>
        </table>
</div>
<br>
<div class="col-md-4 " style="margin:auto;">
<button type="button" class="btn btn-success btn-block p-2 "><a href="admin.php" style="text-decoration: none; color:white;">Retour</a></button>
</div>
<br>
<br>
<?php
include('footer.php');
?>