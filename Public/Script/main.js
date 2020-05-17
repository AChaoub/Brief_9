var BTNplus = document.getElementsByClassName('produit_commande_cible--qte+');
var QteSpanValue= document.getElementById('id_span_qte');

var BTNminus = document.getElementsByClassName('produit_commande_cible--qte-');

BTNplus[0].addEventListener('click',()=>{
    var cpt = Number(QteSpanValue.innerText);
    if(cpt<4)
    {
        cpt++;
        QteSpanValue.innerText=cpt;
    }
    else
    {
        var btnValuePlus= document.getElementById('id_btn_plus');
        btnValuePlus.style.fontSize="12";
        btnValuePlus.innerText="M";
    }

 
})

BTNminus[0].addEventListener('click',()=>{
    var cpt = Number(QteSpanValue.innerText);
    if(cpt>1)
    {
        cpt--;
    QteSpanValue.innerText=cpt;
    }
    else
    {
        BTNminus[0].s
    }
    
 
})