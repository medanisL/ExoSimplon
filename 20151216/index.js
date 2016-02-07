// POO methode de travail pour avoir un code plus laisible et plus simple

var me = {

	name:"", // les valeur c'est des propriété 
	last_name:"Lakhdar",
	birthday:"01/10/1991",
	github:"medanisL",
	occupation:"web developer",

	// methode getter(recupere valeur de la clé de l'objet) et setter (modifie l'objet exemple setName ca modifie le nom) agissent sur les proprieté : en dehors de l'objet on fait appel a ses methode comme des fonction 
	
	getFullname: function() { // renvoi le nom et prenom de l'objet
		return this.name+" "+this.last_name; // le this ici fait reference a l'objet me en particulier! 
	},
	getOccupation: function() {
		return this.occupation;
	},
	setName: function(val) { // methode qui utilise comme parametre (varible val) 
		this.name=val;  // recupere la valeur de name dans me et on l'assigne a une variable val  
	},

	getField: function(cle) { // field est un champs arbitaire   
		return this[cle];
	},

	setField: function(key,val) { 
		this[key]=val; // 
	},

	getGithub: function() {
		return "https://github.com/" + this.github;

	},

	setGithub: function(bidule) {
		this.github=bidule;
	},

	getInfos: function() {
		return "Bonjour, je m'appelle " +" " + me.getFullname() + "je suis né le" + " " + me.getField()  +" " +"je suis" + " " +me.getOccupation() + "vous pouvez en savoir plus sur " + " "+ me.getGithub();  
		// me.getfullname on fait appel a la methode 
	},



};

/* console.log(me);
 console.log('here comes my full name')
 console.log(me.getFullname());
 */


me.setName("anis"); // changer le setName en faisant appel a la methode setName
me.setGithub("medanisL");
me.getField("name");
me.setField("name","lalalal");
console.log(me.github); // appel de l'objet suivi de sa methode getinfos() ! 
console.log(me.getGithub());