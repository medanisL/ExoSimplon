<?php 

function connect(){
ORM::configure('mysql:host=localhost;dbname=fake.io');
ORM::configure('username', 'root');
ORM::configure('password', 'toor');
ORM::configure('error_mode', PDO::ERRMODE_WARNING);
}

function loadData(){ // ca recuper l'user en fonctionnan de son id qui est dans GET 

$id= $_GET['id'];
$person = ORM::for_table('users')->findOne($id);
return $person; 
 
}


function getPeople(){

$people=ORM::for_table('users')->find_many(); // function qui recupere les users de la database
return $people;  
}

function addUser(){
    $newUser = ORM::for_table('users')->create();

    $newUser->nom = $_POST['nom'];
    $newUser->prenom = $_POST['prenom'];
    $newUser->tel = $_POST['tel'];
    $newUser->naissance = $_POST['naissance'];

    $newUser->save();
}


function start(){
  if (!empty($_POST['nom']))
{
        addUser();
        $tableauPeople = getPeople();
        require '../views/list.php';
}
elseif(!isset($_GET['id']))
{   // charge la page list 
	$tableauPeople = getPeople();
	require '../views/list.php';
}
else
{						// avec l'id charge la page show
	$data=loadData();
	require '../views/show.php';

}

}

?>