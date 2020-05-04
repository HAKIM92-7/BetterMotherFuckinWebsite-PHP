

<?php

session_start();

try
{
  $bdd=new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','root','');  

}
catch (Exception $e)

{
  die('Erreur:'.$e->getMessage());

}


$req=$bdd->prepare('SELECT pseudo,nom_prenom,date_naissance,email,poste,description,passions,autres_passions FROM membres  WHERE id=?' );

$req->execute(array($_SESSION['id']));

while ($donnees=$req->fetch())

{?>

 <p><strong>PSEUDO : </strong><?php echo $donnees['pseudo']?></p> <br/><br/>
 <p><strong>NOM & PRENOM : <?php echo $donnees['nom_prenom']?></p> <br/><br/>
 <p><strong>DATE DE NAISSANCE:</strong> <?php echo $donnees['date_naissance']?></p> <br/><br/>
 <p><strong>EMAIL :</strong> <?php echo $donnees['email']?></p> <br/><br/>
 <p><strong>POSTE :</strong> <?php echo $donnees['poste']?></p> <br/><br/>
 <p><strong>DESCRIPTION POSTE :</strong> <?php echo $donnees['description']?></p> <br/><br/>
 <p><strong>PASSIONS : </strong><?php echo $donnees['passions']?></p> <br/><br/>
 <p><strong>AUTRES PASSIONS : </strong><?php echo $donnees['autres_passions']?></p> <br/><br/>

 





<?php
}



$req->closeCursor();

?>

<p> <a href='infos_personnelles.php'>Editer vos informations personnelles </a> </p>


