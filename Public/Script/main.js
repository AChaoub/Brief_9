// var BTNplus = document.getElementsByClassName('produit_commande_cible--qte+');
// var QteSpanValue= document.getElementsByClassName('id_span_qte');

// var BTNminus = document.getElementsByClassName('class_btn_minus');

calcul_price();
$(function () {

    //diminue quantité

    $(".produit_commande_cible--qte-").on('click', function (e) {





        var number = Number($(this).next('.produit_commande_cible--qteNumber').text());



        if (number > 1) {
            number--;
            var prix = Number($(this).prev().prev('.produit_commande_cible--prixFixe').text());
            var expression = prix * number;
            $(this).prev('.produit_commande_cible--prix').text(expression);


            $(this).next('.produit_commande_cible--qteNumber').text(number);
            $(this).next('.produit_commande_cible--qteNumber').text(number);
            $(this).html("<button class='id_btn_plus'>-</button>");
            $(this).next().next('.PDQPLUS').html("<button class='id_btn_plus'>+</button>");

        } else {

            $(this).next('.produit_commande_cible--qteNumber').text("0");

            $(this).html("<button  class='class_btn_minus'><i style='color:red;' class='fas fa-trash-alt'></i></button>");

        }

        calcul_price();
        // alert($(this).attr('id'));
        // console.log(number);

    });

    // auguement quantité
    $(".PDQPLUS").on('click', function (e) {




        var number = Number($(this).prev('.produit_commande_cible--qteNumber').text());


        if (number < 4) {
            number++;
            var prix = Number($(this).prev().prev().prev().prev('.produit_commande_cible--prixFixe').text());

            $(this).prev().prev().prev('.produit_commande_cible--prix').text(prix * number);


            $(this).prev('.produit_commande_cible--qteNumber').text(number);
            $(this).html("<button class='id_btn_plus'>+</button>");
            $(this).prev().prev('.produit_commande_cible--qte-').html("<button class='id_btn_plus'>-</button>");

        } else {

            $(this).html("<button class='id_btn_plus'><i style='color:red;' class='far fa-hand-paper'></i></button>");

        }

        calcul_price();
        // alert($(this).attr('id'));
        // console.log(number);

    });





});

// for(var i=0;i<BTNplus.length;i++)
// {
//     BTNplus[i].addEventListener('click',()=>{
//         var cpt = Number(QteSpanValue[i].innerText);
//         if(cpt<4)
//         {
//             cpt++;
//             QteSpanValue[i].innerText=cpt;
//         }
//         else
//         {
//             var btnValuePlus= document.getElementsByClassName('id_btn_plus');

//             btnValuePlus[i].innerHTML="<i class='far fa-hand-paper'></i>";
//             btnValuePlus[i].style.color="red";

//         }


//     })

//     BTNminus[0].addEventListener('click',()=>{
//         var cpt = Number(QteSpanValue.innerText);
//         if(cpt>1)
//         {
//             cpt--;
//         QteSpanValue.innerText=cpt;
//         }
//         else
//         {
//             BTNminus.innerHTML="<i class='fas fa-trash-alt'></i>";
//         }


//     })
// }

// function Panier(){
//     var produit = document.getElementsByName('produit');
//     var btn = document.getElementById("confirmer");
//     var produitSelect =[];
//     var j=0;
//     var prix = document.getElementsByClassName('Prix');
//     var quantite = document.getElementById('quantite');
//     var Somme=0;
//     for (var i=0;i<produit.length;i++)
//     {
//         if(produit[i].checked)
//         {
//             produitSelect[j]=produit[i].id;
//             j++;
//             Somme += Number(prix[i].innerHTML);
//         }
//     }
//     // alert(produitSelect);
//     // alert("Total prix = " +Somme);
//     quantite.innerText = "Le prix total est : "+ Somme + "DHS";

// }

function calcul_price() {
    var totalPrix = document.getElementsByClassName('container_body_right--rightInfos_prix');


    var allPrices = document.getElementsByClassName('produit_commande_cible--prix');

    var sommePrix = 0;


    for (var i = 0; i < allPrices.length; i++) {
        sommePrix += Number(allPrices[i].innerHTML);
    }
    // sommePrix+="€";   

    totalPrix[0].innerHTML = Number(sommePrix.toFixed(2));
    totalPrix[1].innerHTML = Number(sommePrix.toFixed(2));
    livraison_msg(sommePrix);


}

function livraison_msg(prix) {
    var div_toDisplay = document.getElementsByClassName('div_livraison');
    if (prix >= 20) {
        div_toDisplay[0].style.visibility = "hidden";
    } else {
        div_toDisplay[0].style.visibility = "visible";
    }

}