<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_brief9";


$con =mysqli_connect($servername,$username,$password,$dbname);

if($con){
    ?>
      <script>
        alert("Connection Successful");
      </script>
    <?php

}else{

    ?>
       <script>
          alert("No Connection");
       </script>

    <?php   
}

    
?>