<?php
#Lien pour l'article de traitment pour l'upload des photos
#https://makitweb.com/how-to-upload-image-file-using-ajax-and-jquery/
$filename = $_FILES['Image_produit']['name'];
$location = "image/" . $filename;n
$imageFileType = pathinfo($location, PATHINFO_EXTENSION);
$fileNameNoExtension = pathinfo($location, PATHINFO_FILENAME);
// 
if (strlen($fileNameNoExtension) <= 100) {
    if ($imageFileType == "png") {
        if (move_uploaded_file($_FILES['Image_produit']['tmp_name'], $location)) {
            include 'login.php';
            // 
            try {
                include 'login.php';
                $req = $con->prepare("INSERT INTO produit (`Description_categorie`,`Quantite_Max`,`Image_produit`,`Id_categorie`,`Prix_produit`) VALUES(?,?,?,?,?)");
                $req->bind_param("sssss", $_POST["Description_categorie"], $_POST["Quantite_Max"], $fileNameNoExtension, $_POST["Id_categorie"], $_POST["Prix_produit"]);
                if ($req->execute() == 1)
                    echo '105';
                else echo '104';
            } catch (Exception $err) {
                echo '103';
            }
        } else echo "102";
    } else echo "101";
} else {
    echo '100';
}