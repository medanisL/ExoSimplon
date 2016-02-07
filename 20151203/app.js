"use strict";

$(document).ready(function(){

	$('a').click(function(event){ // event ( parametre) utilisé comme une variable

		event.preventDefault(); // event variable recuperer et utiliser avec la methode .prevent pour enelver l'affichage du lien par defaut

		var val = $(this).attr("href"); 

		$('#cible').load(val);// chargement de page dans une cible creer en html

		
	});







});