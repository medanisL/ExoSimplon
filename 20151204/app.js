// portéé de variable exercice1
/*
var foo = 12; // var globale
function maFonction(multip){ // fonction qui mutiplie

	return multip*foo;

};




function jeSaisPas(truc){

	var foo=10; // changement de la variable general elle prendra la valeur 10

	return maFonction(truc); // on appel la premiere fonction avec le parametre truc

};

console.log(maFonction(10));

 // du coup quand on appel la fonction jeSaispas le foo devient 10 il remplace la variable externe et il fait le calcul de la premiere fonction


// eviter l'utilisation de variable a l'exterieur 

*/

//exercice 2 

/*

var truc = {nom:"lakhdar",prenom:"anis",github:"medanisL"} // declarer un dictionnaire

// boucle for pour parcourir l'objet 


for (var val in truc ) { // on utilise une variable val qui servira d'index pour parcourir l'objet

	console.log(val+":"+truc[val]); // afficher l'objet avec le val qui remplacera les clé a chaque fois
}

*/

//exercie 3 : afficher les valeur des clé dans les p ( qui sont dans les div)
// en les mettant dans les div ( qui ont un attribut qui est le meme que les clé )
$(document).ready(function(){

 var truc = {nom:"lakhdar",prenom:"anis",github:"medanisL"}

 for (var val in truc ) {
 
$("[data-me="+val+"] p").html(truc[val])

};



});


