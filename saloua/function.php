<?php
function show_commande($con){
    $sql = " SELECT * FROM commande";
    $result = mysqli_query($con,$sql);
    if($result != null){
        return $result;
    }else{
        return false;
    }
}
?>