<?php

// Controle de la syntax email xxx@xx.xx
function VerifierSyntaxMail($email)  
{  
   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';  
   if(preg_match($Syntaxe,$email))  
      return true;  
   else  
     return false;  
}

// Controle de la validité du nom de domaine @xxx.xx
function domain_exists($email, $record = 'MX'){
	list($user, $domain) = split('@', $email);
	return checkdnsrr($domain, $record);
}

?>