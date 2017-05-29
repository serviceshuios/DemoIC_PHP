<?php 


function getAllProducts(){
	$produits = getAllDataFromTable("produit");
}

function getAllDataFromTable($table){
	if(empty($table)){
		try{
			// On se connecte à MySQL
			$host = "127.0.0.1";
			$dbname = "super_projet_ecommerce";
			$user = "root";
			$password = "";
			$bdd = new PDO('mysql:host=$host;dbname=$dbname;charset=utf8', '$user', '$password');
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
				die('Erreur : '.$e->getMessage());
		}

		// Si tout va bien, on peut continuer

		// On récupère tout le contenu de la table jeux_video
		$reponse = $bdd->query('SELECT * FROM '$table);

		// On affiche chaque entrée une à une
		return $reponse->fetchAll();
		
		}
	}
}