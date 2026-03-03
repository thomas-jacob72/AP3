<?php

$siteName = "Nom du site";
$annonceTitle = "Titre annonces / nouveautés";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $siteName; ?></title>
</head>

<body>


<table width="100%" border="1" cellspacing="10" cellpadding="0">
    
    
    <tr>
        <td width="5%">
            <font>☰</font>
        </td>
        <td width="60%" align="center">
            <font>Recherche........................................................</font>
        </td>
        <td width="25%" align="center">
            <font><b><?php echo $siteName; ?></b></font>
        </td>
        <td width="10%" align="center">
    <a href="index.php">
        <img src="logo.jpg" width="50" border="0">
    </a>
</td>
    </tr>

    <tr>
        
        <td  width="20%" valign="top">
    <br>
        - <a href="index.php">Accueil</a><br><br>
        - <a href="articles.php">Articles / Services</a><br><br>
        - <a href="contact.php">Contact</a><br><br>
        - <a href="apropos.php">À propos de</a>
       

        
        </td>

        
        <td colspan="2" valign="top">

            
            <table width="100%" border="1" cellpadding="10">
                <tr>
                    <td align="center">
                        
                        <b><?php echo $annonceTitle; ?></b>
                        
                    </td>
                </tr>
            </table>

            
            <table width="100%" border="1" cellpadding="150">
                <tr>
                    <td align="center">
                        <font>Photo</font>
                    </td>
                </tr>
            </table>

        </td>
    </tr>

</table>

</body>
</html>