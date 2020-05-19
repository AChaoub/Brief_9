<?php
    include('header.php');
    // eliminer le cas ou l utilisateur ne selectionne rien et entre dans le panier
    $res=[];
 
    
    if($_SESSION['id_produit_temps']==null)
    {
        $_SESSION['id_produit_temps']=[];
       

    }
    else
    {
        array($_SESSION['id_produit_temps']);
   
    }
   
 

    if(isset($_POST['name_BtnPanier']))
    {
        if( isset($_POST['QTE_SENDER']) && isset($_POST['ID_SENDER']))
        {
            $res = explode(",", $_POST['ID_SENDER']);

            for($i=0;$i<count($res);$i++)
            {
                
                    array_push($_SESSION['id_produit_temps'],$res[$i]);
           

 
            }
 
                    
 
            

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
                    $totalProduitHistorique=0;
                    
             
                   if(count($res)>0)
                   {

                   for($i=0;$i<count($res);$i++)
                   {
                       $sql='SELECT * FROM produit where produit.Id_produit ='.$res[$i];
                       $reponse = $bdd->query($sql);
                       if($reponse!=null)
                       {
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
                        <div style="display: none;" id="'.$ligne['Id_produit'].'" class="produit_commande_cible--IdProduit IDproduit_commande prodTEXT">'.$ligne['Id_produit'].'</div>
                            <div style="display: none;" class="produit_commande_cible--prixFixe prodTEXT">'.$ligne['Prix_produit'].'</div>
                            <div class="produit_commande_cible--prix prodTEXT">'.$ligne['Prix_produit']*$QTE[$i].'</div>
                            <div   class="produit_commande_cible--qte-NEW prodBTN"><button
                                    class="class_btn_minus">-</button></div>
                            <div   class="produit_commande_cible--qteNumber QTEPROD prodTEXT">'.$QTE[$i].'</div>
                            <div   class="produit_commande_cible--qte+ PDQPLUSNEW prodBTN"><button
                                    class="id_btn_plus">+</button></div>
                        </div>
 
 
                    </div>';
                    // premier totalProduit


                    $totalProduit+=($ligne['Prix_produit']*$QTE[$i]);
             
                   
                       }
 



                  
                }
                $_SESSION['total_prix']=$totalProduit;
            }
          echo '<h3 style="text-align:center;color:gray">Historique</h3>';

                    if($_SESSION['id_produit_temps']!=null)
                    {
                        $result=array_unique($_SESSION['id_produit_temps'],1);
                    $resultatSorted=[];
                     
                    $k=0;

                    foreach($result as $ID )
                    {
                        $resultatSorted[$k]=$ID;
                        $k++;

                    }
                    }
                    
             if(count($resultatSorted)>0)
             {
                 //produit send via post

                  $x=count($res);
             
                
 

             for($i=0;$i<count($resultatSorted)-$x;$i++)
             {
                 $sql='SELECT * FROM produit where produit.Id_produit ='.$resultatSorted[$i];
                 $reponse = $bdd->query($sql);
                 if($reponse!=null)
                 {
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
                  <div style="display: none;" class="produit_commande_cible--IdProduit    prodTEXT">'.$ligne['Id_produit'].'</div>
                      <div style="display: none;" class="produit_commande_cible--prixFixe prodTEXT">'.$ligne['Prix_produit'].'</div>
                      <div class="produit_commande_cible--prix prodTEXT">'.$ligne['Prix_produit'].'</div>
                      <div   class="produit_commande_cible--qte-NEW prodBTN"><button
                              class="class_btn_minus">-</button></div>
                      <div   class="produit_commande_cible--qteNumber prodTEXT">1</div>
                      <div   class="produit_commande_cible--qte+ PDQPLUSNEW prodBTN"><button
                              class="id_btn_plus">+</button></div>
                  </div>


              </div>';
              // premier totalProduit


                $totalProduitHistorique+=($ligne['Prix_produit']);
                $_SESSION['total_prix']=$totalProduitHistorique+$totalProduit;
              
                // print_r($QTE);
       
             
                 }




            
          }
         
        }
        // }
            if(isset($_POST['BTNVIDE']))
           {
             if($_SESSION['id_produit_temps']!=null)
             {
                $_SESSION['id_produit_temps']=null;
                header('Location: index.php');
             }
           }           
 
            else if(isset($_POST['BTNVALIDE']))
            {
                if(isset($_POST['QteRespective']))
                {
                    $QTEProd=$_POST['QteRespective'];
                    $QTEProdEach = explode("|", $QTEProd);

                    $ID_PROD=$_POST['IDRespective'];
                    $ID_PRODEach = explode("|", $ID_PROD);
                    // id de la commande generée
                    $reqID='SELECT MAX(commande.Id_Commande) FROM commande';
                        
                        $response = $bdd->query($reqID);
                        $iDcmd=$response->fetchColumn();
                        if($iDcmd==null)
                        {
                            $iDcmd=1;
                        }
                        else
                        {
                            $iDcmd++;
                        }
                        echo $iDcmd;



                    
                    // verification si la qte est suffisante dans la bd
                     
                            $problemStock=false;
                            $collectionQTE=[];
                            for($i=1;$i<count($ID_PRODEach);$i++)
                            {
                            
                            $tempQte;
                            $req='SELECT `Quantite_Max` FROM `produit` WHERE  `Id_produit`= '.$ID_PRODEach[$i];
                                $reponse = $bdd->query($req);
                                $tempQte=$reponse->fetchColumn();
                                

                                // si la quantité en stock est superieure a celle commandée
                                    if(($tempQte-$QTEProdEach[$i])<0)
                                    {
                                        $problemStock=true;
                                         
                                    break;
                                    }
                                array_push($collectionQTE,$tempQte-$QTEProdEach[$i]);
                                

                            }
                            print_r($collectionQTE);
                        
                            //insertion dans la commande
                            if($problemStock==false)
                            {
                                try
                                {
                                    $bdd = new PDO('mysql:host=localhost;dbname=bd_brief9;charset=utf8', 'root', '');
                                }
                                catch(Exception $e)
                                {
                                        die('Erreur : '.$e->getMessage());
                                }
                           
                                $CIN_Client="HH100202";
                                


                                $query = "INSERT INTO commande (CIN, Id_Commande, Date_Commande) 
                                            VALUES(?, ?,CURRENT_TIME())";
                                $stmt = $bdd->prepare($query);
                                $stmt->execute([$CIN_Client, $iDcmd]);
                                $r=0;
                              
 
                                if ($stmt->execute([$CIN_Client, $iDcmd])==false) 
                                {
                                    for($i=0;$i<count($ID_PRODEach);$i++)
                                    {
                                        if($QTEProdEach[$i]!="" && $ID_PRODEach[$i]!="")
                                        {
                                            $sql = "INSERT INTO quantite_commande (Id_Commande, Id_produit, Qte)VALUES ($iDcmd, $ID_PRODEach[$i],$QTEProdEach[$i])";
                                            $bdd->query($sql);
                                            echo'<br>' .$sql;
                                            $sql = "UPDATE produit set produit.Quantite_Max= $collectionQTE[$r]  where Id_produit=".$ID_PRODEach[$i];
                                            $r++;
                                            $bdd->query($sql);
                                            echo'<br>' .$sql;
                                        }
                                     

                                    }

                                }
                                else
                                {
                                    echo 'failed';
                                }
                             

                            }
                             

                            

                //         echo "New record created successfully";
                //         } else {
                //         echo "Error: " . $sql . "<br>" . $conn->error;

                        }

                  


               








                     
                
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
                    <form action="" method="POST">
                    <div class="container_body_right--valide">
                        <p><button id="BTNVALIDE" name="BTNVALIDE">Valider mon panier</button></p>

                    </div>
                    <input style="display:none" type="text" id="HiddenIDS" name="IDRespective">
                    <input style="display:none" type="text" id="HiddenQTES" name="QteRespective">
                    <div class="container_body_right--vider">
                        <p> <button name="BTNVIDE">Vider mon panier</button></p>
                        <!-- <input type="submit"  value="Vider mon panier" > -->

                    </div>
                    </form>


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

 