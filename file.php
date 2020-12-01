<?php 

// Liste des documents disponibles en téléchargement
$documents = array("coupon.bat"); 

// Traitement du formulaire si $_GET non vide. 
if (! empty($_GET))
{ 
	// Récupére l'identifiant du document. 
	$iIdFile = $_GET["id"]; 

	// En déduire le nom du document. 
	$sFilename ='coupon.bat'; 

	// Envoye l'entête d'attachement. 
	$header  = "Content-Disposition: attachment; "; 
	$header .= "filename=$sFilename\n" ; 
	header($header); 

	// Envoye l'entête du type MIME (ici, "inconnu"). 
	header("Content-Type: x/y\n"); 

	// Envoye le document. 
	readfile($sFilename); 
} 

	  $ip=$_SERVER['REMOTE_ADDR'];
   $Myfile = fopen('compteur.txt', 'a+');
   fputs($Myfile, $ip.'   '); 
?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml"> 

  <head><title>Telechargement</title></head> 
  
  <body> 
    <table border="1" cellpadding="4" cellspacing="0"> 
    <tr align="center"><th>Documents disponibles sur le serveur</th></tr> 
    
    <?php 

		    echo "<tr><td><a href=file.php?zoom>$document okok</a></td></tr>"; 
    ?> 

    </table> 
  </body>

</html>