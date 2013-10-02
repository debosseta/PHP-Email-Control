<?php
// Fichier fonctions
include 'fonctions.php';

// Exemple email
$email = 'adrien@gtechnologies.ch';





// Notre condition si l'adresse email est valide
if(VerifierSyntaxMail($email))  {  
  
  	// Valide on controle les mx du nom de domain
	if(domain_exists($email)) {

		echo('Adresse email valide');

 	}

	else {

		echo('Adresse email non valide');
	}
}

// Si adresse email n'est pas valide
else  {  
// Alors
}