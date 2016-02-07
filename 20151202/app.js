
$(document).ready(function() {

$('a').click(function(){ // selectionne tout les A


var val = $(this).attr("href");  // href fait appel a l'id du a selectionné

//this signifie le clique effectué sur l'element a choisi! avec un atrribut href
// la variable cest pour recuperer le href dans le lien qui a été cliqué , on l'utilise pour stocker et reutiliser par la suite 


// on affiche la vairable en la transformant en objet
$(val).toggle(400);

 // toggle fait apparaitre et disparaitre 
 // show fait apparaitre uniquement
});


});

