<?php 

function connection(){
	try{
		// On se connecte à MySQL
		$host = "127.0.0.1";
		$dbname = "super_projet_ecommerce";
		$user = "root";
		$password = "";
		$bdd = new PDO('mysql:host=$host;dbname=$dbname;charset=utf8', '$user', '$password');
		return 
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
	}	
}
function getAllProducts(){
	$produits = getAllDataFromTable("produit");
}

function getAllCategories(){
	$categories = getAllDataFromTable("categorie");
}

function getAllProductsPerCategorie($categorie){
	if(!empty($categorie)){
		$query = 'SELECT * FROM categorie as c, produit as p where c.id = p.categorie AND c.nom = '.$categorie;
		return getAllDataFromQuery($query);
	}
	return array();
}

function getAllDataFromTable($table){
	if(empty($table)){
		$query = 'SELECT * FROM '$table;
		return getAllDataFromQuery($query);
		}
	}
	return array();
}

function getAllDataFromQuery($query){
	$bdd = connection();

	// On récupère tout le contenu de la table jeux_video
	$reponse = $bdd->query('SELECT * FROM '$table);

	// On affiche chaque entrée une à une
	return $reponse->fetchAll();
}