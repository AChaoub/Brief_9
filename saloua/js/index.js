// function validation(){
//       if(validation_email() && validation_pass())
//       {
//         header('Location:admin.php');
//       }
//       else
//       {
//           alert("email ou mot de passe est incorrect");
//       }
// }
// function validation_email(){
//     var Letters =(/admin@gmail.com/);
//     var nom =document.getElementsByName("Email").value();
   
//      if(Letters.test(nom)===true){
//           alert('email est valide');
//      }
//       else {
//           alert('email pas valide');
//       }
// }
// function validation_pass(){
//     var pas =/admin/;
//     var password =document.getElementsByName("Password").value();
    
//       if(pas.test(password)==true){
//         alert('password est valide');
        
//       }
//       else {
//         alert('password pas valide');
//     }
    
  
//     }

$('#btnAddProductExecute').on('click', () => {
    var fd = new FormData();
    // 
    fd.append('prodImage', $('#Image_produit')[0].files[0]);
    fd.append('prodDescrp', $('#Description_categorie').val());
    fd.append('prodCategId', $('#Id_categorie option:selected').val());
    fd.append('prodPrice', $('#Prix_produit').val());
    fd.append('qt', $('#Quantite_Max').val());
    // 
    $.ajax({
        url: 'NvProduit.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: f l; alse,
        success: async response => {
            var params = {
                content: "",
                type: "error",
                behavior: {
                    type: "normal"
                },
                duration: 3000
            }
            // 
            switch (response) {
                case '100':
                    params.content = "Le nom d'image est tres long";
                    break;
                case '101':
                    params.content = "Type d'image doit étre d'une extension .png";
                    break;
                case '102':
                    params.content = "Erreur pendant l'upload d'image";
                    break;
                case '103':
                case '104':
                    params.content = "Erreur pendant l'execution de votre demande";
                    break;
                case '105':
                    params.content = "Produit ajoutée avec succes!";
                    params.type = "success";
                    params.duration = 2000;
                    break;
                default:
                    params.content = 'Erreur cote server';
            }
            // 
            await toast(params);
            if (response == '105')
                window.location.reload();
        },
    });
});
