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
})
</script>
</body>
</html>