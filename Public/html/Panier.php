<?php
    include('header.php');

    if(isset($_POST['name_BtnPanier']))
    {
        if( isset($_POST['QTE_SENDER']) && isset($_POST['ID_SENDER']))
        {
            $res = explode(",", $_POST['ID_SENDER']);

            $QTE = explode(",", $_POST['QTE_SENDER']);

            
            
          
            

           
 
        }
          
    }
    
    
    ?>














 
 

<body>
    <div class="container">
        <div class="container_head">
            <button id="backToCategorie" onclick='window.location.href="PageProduits.php"' class="left-arrow"><i class="fas fa-arrow-left"></i></button>
            <span class="span_panier">Panier</span>
            <span class="span_qte">5 Produits</span>


        </div>

        <div class="container_body">
            <div class="container_body_left">
                <div class="div_livraison">
                    <div class="info">
                        <i class="fas fa-info"></i>
                    </div>
                    <div class="info_text">

                        <span>
                            <pre> Pour valider votre commande, ajoutez des articles au panier
  Livraison à partir de 20,00 € de commande
                               </pre></span>




                    </div>
                    <div>
                        <button class="info_button">
                            Continuer mes achats
                        </button>
                    </div>


                </div>
                <div class="Panier_Standard">

                </div>
                <!-- code qui se repete-->
                <div class="produit_commande">
                   
                    
                   <!-- traitement php-->

                   <?php

                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=bd_brief9;charset=utf8', 'root', '');
                    }
                    catch(Exception $e)
                    {
                            die('Erreur : '.$e->getMessage());
                    }
                    $totalProduit=0;

                   for($i=0;$i<count($res);$i++)
                   {
                       $sql='SELECT * FROM produit where produit.Id_produit ='.$res[$i];
                       $reponse = $bdd->query($sql);
                       $ligne = $reponse->fetch();
                       echo'<div class="produit_commande_cible">
                       <div class="produit_commande_cible--img">
                       <img src="../img/Produits/'.$ligne['Image_produit'].'.jfif" alt="">
                       </div>
                       <div class="produit_commande_cible--des prodTEXT">

                           <span>
                               '
                               .$ligne['Description_produit'].'
                           </span>

                       </div>

                       <div class="produit_commande_cible-Manipulation">
                       <div style="display: none;" class="produit_commande_cible--IdProduit prodTEXT">'.$ligne['Id_produit'].'</div>
                           <div style="display: none;" class="produit_commande_cible--prixFixe prodTEXT">'.$ligne['Prix_produit'].'</div>
                           <div class="produit_commande_cible--prix prodTEXT">'.$ligne['Prix_produit']*$QTE[$i].'</div>
                           <div id="5" class="produit_commande_cible--qte-NEW prodBTN"><button
                                   class="class_btn_minus">-</button></div>
                           <div id="l9itha" class="produit_commande_cible--qteNumber prodTEXT">'.$QTE[$i].'</div>
                           <div id="6" class="produit_commande_cible--qte+ PDQPLUSNEW prodBTN"><button
                                   class="id_btn_plus">+</button></div>
                       </div>


                   </div>';
                   $totalProduit+=($ligne['Prix_produit']*$QTE[$i]);
                   $_SESSION['total_prix']=$totalProduit;


                   }




               ?>
                   
 
                      

 
                </div>
            </div>
            <div class="container_body_right">
                <div class="container_body_right--sous">
                    <div class="container_body_right--head">
                        <h4>Récapitulatif</h4>

                    </div>
                    <div class="container_body_right--total_prod flex_items">
                        <div class="container_body_right--leftInfos">
                            Total produits

                        </div>
                        <div class="container_body_right--rightInfos_prix">
                            18.55€
                        </div>


                    </div>
                    <div class="barre"></div>
                    <div class="container_body_right--promoCode ">

                        <div class="flex_items">


                            <i class="fas fa-info-circle"></i><span>Vous avez un code promo ?<br>Ajoutez-le lors de
                                l'étape de paiement !</span>

                        </div>

                    </div>
                    <div class="barres"></div>
                    <div class="container_body_right--total flex_items">
                        <div class="container_body_right--leftInfos">
                            Total

                        </div>
                        <div class="container_body_right--rightInfos_prix">

                        </div>

                    </div>
                    <div class="barres"></div>
                    <div class="container_body_right--valide">
                        <p><button>Valider mon panier</button></p>

                    </div>
                    <div class="container_body_right--vider">
                        <p> <button>Vider mon panier</button></p>

                    </div>


                </div>

            </div>

        </div>




    </div>
</body>
 
                

                <?php
            include('footer.php');
            include('script.php');


            ?>
 
  <script src="../Script/main.js"></script>  

 