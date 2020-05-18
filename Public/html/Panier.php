<?php
include('header.php')
?>
 

<body>
    <div class="container">
        <div class="container_head">
            <button class="left-arrow"><i class="fas fa-arrow-left"></i></button>
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
                <div class="produit_commande">
                    <div class="produit_commande_title">
                        <span>Produits laitiers, oeufs, fromages</span>
                    </div>
                    <div class="produit_commande_cible">
                        <div class="produit_commande_cible--img">
                            <img src="../Images/char1.jpg" alt="" srcset="">
                        </div>
                        <div class="produit_commande_cible--des prodTEXT">

                            <span>
                                Herta au torchon sans nitrite<br>
                                4 tranches 140g
                            </span>

                        </div>

                        <div class="produit_commande_cible-Manipulation">
                        <div style="display: none;" class="produit_commande_cible--IdProduit prodTEXT"></div>
                            <div style="display: none;" class="produit_commande_cible--prixFixe prodTEXT">3.09</div>
                            <div class="produit_commande_cible--prix prodTEXT">3.09</div>
                            <div id="5" class="produit_commande_cible--qte-NEW prodBTN"><button
                                    class="class_btn_minus">-</button></div>
                            <div id="l9itha" class="produit_commande_cible--qteNumber prodTEXT">0</div>
                            <div id="6" class="produit_commande_cible--qte+ PDQPLUSNEW prodBTN"><button
                                    class="id_btn_plus">+</button></div>
                        </div>


                    </div>
                    <!--
                            deuxieme

                        -->
                    <div class="produit_commande_cible">
                        <div class="produit_commande_cible--img">
                            <img src="../Images/char1.jpg" alt="" srcset="">
                        </div>
                        <div class="produit_commande_cible--des prodTEXT">

                            <span>
                                <br>
                                4 tranches 140g
                            </span>

                        </div>

                        <div class="produit_commande_cible-Manipulation ">
                        <div style="display: none;" class="produit_commande_cible--IdProduit prodTEXT"></div>
                            <div style="display: none;" class="produit_commande_cible--prixFixe prodTEXT">11.4</div>
                            <div class="produit_commande_cible--prix prodTEXT">11.4</div>
                            <div id="5" class="produit_commande_cible--qte-NEW prodBTN"><button
                                    class="class_btn_minus">-</button></div>
                            <div id="l9itha" class="produit_commande_cible--qteNumber prodTEXT">0</div>
                            <div class="produit_commande_cible--qte+ PDQPLUSNEW prodBTN"><button
                                    class="id_btn_plus">+</button></div>
                        </div>


                    </div>

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

 