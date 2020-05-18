<script>
    $(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $("#Header").css("background-color", "white");
            $("#Panier").css("background-color", "black");
            $("#Paragpanier").css("color", "white");
            $("#imgpanier").attr("src","../img/panier2.png");
            $("#imgpanier").css("width","45px");
            $("#imgpanier").css("height","45px");


        } else {
            
            $("#Panier").css("background-color", "white");
            $("#Header").css("background-color", "tranparent");
            $("#Paragpanier").css("color", "black");
            $("#imgpanier").attr("src","../img/panier.png");
            
            
        }
    });

    $(function () {
    
    //diminue quantité

        $(".produit_commande_cible--qte-").on('click', function (e) {
            var number = Number($(this).next('.produit_commande_cible--qteNumber').text());
            if(number>0)
            {
                number--;
                var prix = Number($(this).prev().prev('.produit_commande_cible--prixFixe').text());
                var expression =prix*number.toFixed(2);
                $(this).prev('.produit_commande_cible--prix').text((expression).toFixed(2));
                $(this).next('.produit_commande_cible--qteNumber').text(number);
                $(this).next('.produit_commande_cible--qteNumber').text(number);
                $(this).html("<button class='id_btn_plus'>-</button>");
                $(this).next().next('.PDQPLUS').html("<button class='id_btn_plus'>+</button>");
            }
            else
            {
                //number++;
                $(this).html("<button  class='class_btn_minus'><i style='color:red;' class='fas fa-trash-alt'></i></button>");
                $(this).next('.produit_commande_cible--qteNumber').text("0");
            }
    
        });

        // auguement quantité
        $(".PDQPLUS").on('click', function (e) {
            var number = Number($(this).prev('.produit_commande_cible--qteNumber').text());
            if(number<4 )
            {
                number++;
                var prix = Number($(this).prev().prev().prev().prev('.produit_commande_cible--prixFixe').text());
                $(this).prev().prev().prev('.produit_commande_cible--prix').text((prix*number).toFixed(2));
                $(this).prev('.produit_commande_cible--qteNumber').text(number);
                $(this).html("<button class='id_btn_plus'>+</button>");
                $(this).prev().prev('.produit_commande_cible--qte-').html("<button class='id_btn_plus'>-</button>");
            }
            else
            {
                //number--;
                $(this).html("<button class='id_btn_plus'><i style='color:red;' class='far fa-hand-paper'></i></button>");
                

            }
    
        });
        
       



});
})
</script>
</body>
</html>