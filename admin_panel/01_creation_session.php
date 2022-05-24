<? php
error_reporting(0);
session_start();
// Connexion BD
$dbname = 'admin_panel';
$username = 'root';
$password = 'admin';
$charset = 'utf8';

$connexion = mysqli_connect($host, $user, $pass, $db) or die (mysqli_Error()); //connexion
mysqli_query($connexion,"SET CHARACTER SET 'utf8'");
mysqli_query($connexion,"SET NAMES 'utf8'");

// Les fonctions
function query($query){		
	global $connexion;		
	return mysqli_query($connexion,$query);	
}

function row($query){ //row(..)['email']
	return mysqli_fetch_assoc($query);
}

function row2($query){ //row(..)['email'] 
	return mysqli_fetch_array($query);
}

function row3($query){ //row(..)[7]
	return mysqli_fetch_row($query);
}	

function rows($query){ //rows(..) - 
	return mysqli_num_rows($query);
}

function affected_rows(){ 
	global $connexion;
	return mysqli_affected_rows($connexion);
}

function creer_session($par){		
	foreach ($par as $cle => $valeur){			
		$_SESSION[$cle] = $valeur;		
	}	
}




function control_autorisation($clas,$caracteristiqe){ 
	$pouvoirs = row(query('SELECT pouvoirs_caracteristique FROM pouvoirs WHERE ID=\''.$clas.'\' LIMIT 1'));
	$caracteristique = explode(',', $pouvoir['pouvoirs_caracteristique']);
	if (in_array($caracteristique, $caracteristiques)){ 
		return true;
	}else{ 
		return false;
	}
}


function pouvoirs($autorisation){ 
	$clas_requete = query('SELECT SQL_CALC_FOUND_ROWS clas_email,clas_autorisation FROM utilisateurs WHERE ID=\''.$autorisation.'\' LIMIT 1');
	if (row3(query('SELECT FOUND_ROWS()'))[0]){
		$yetki = row($yetki_sorgu);
		return $autorisation['autorisation_email'].';'.$autorisation['autorisation_nom'];
	}
	return '';
}




