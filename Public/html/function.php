
<?php
function getAllDataFromTable($table)
{
    include 'login.php';
    $req = "SELECT * FROM $table";
    $res = $con->query($req);
    // 
    return $res;
}
?>