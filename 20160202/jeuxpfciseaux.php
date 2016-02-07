<?php



function choixUser(){

	return $_GET["page"];
}


function choixOrdi(){
	 
	$val = mt_rand(0,2);
	
	if ($val == 0) {
		$ordi = "pierre";
		echo "choix ordi : $ordi";
		echo "------------->resultat : ";
		return $ordi;

	} elseif($val == 1) {
		$ordi = "feuille";
		echo "choix ordi : $ordi";
		echo "------------->resultat : ";
		return $ordi;
	} else {
		$ordi = "ciseaux";
		echo "choix ordi : $ordi";
		echo "------------->resultat : ";
		return $ordi;
	} 


}



function comparer($pc,$user){


	if ($pc==$user)
            {
            return "Egalité !" ; 
            }
            
    elseif ($pc=="pierre")
            {
                if ($user=="ciseaux")  
                {
                    return "pierre gagne";
                }
                
                else
                {
                    return "feuille gagne";
                }
            
            }
        
    elseif ($pc=="feuille")
            {
                if ($user=="pierre")  
                {
                    return "feuille gagne";
                }
                
                else
                {
                    return "ciseaux gagnent";
                }
            
            }
            
     elseif ($pc=="ciseaux")
            {
                if ($user=="pierre")  
                {
                    return "pierre gagne";
                }
                
                else
                {
                    return "ciseaux gagnent";
                }
            
            }

}


echo comparer(choixUser(),choixOrdi());


