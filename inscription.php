<form method="POST" action="inscription.php">
 <fieldset>

 <legend>INSCRIPTION</legend>


   
<label for="pseudo">Pseudonyme</label> <input type="text" name="pseudo" id="pseudo" /> <br/><br/>
<label for="motdepasse">Mot de passe </label> <input type="password" name="motdepasse" id="motdepasse" /> <br/><br/>
<label for="confirmationmdp">Confirmation mot de passe</label> <input type="password" name="confirmationmdp" id="confirmationmdp" /> <br/><br/>
<label for="email">Email</label> <input type="text" name="email" id="email" /> <br/><br/>
<input type="image" src="images/valider.jpeg" /> <br/><br/>

</fieldset> 

</form>
<?php

  

try
{
  $bdd=new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','root','');  

}
catch (Exception $e)

{
  die('Erreur:'.$e->getMessage());

}

if (isset($_POST['pseudo']))

{$reponse=$bdd->prepare('SELECT COUNT(*) AS nbre_pseudo FROM membres WHERE pseudo=? ');
$reponse->execute(array($_POST['pseudo']));
$donnees=$reponse->fetch();
if ($donnees['nbre_pseudo']==1)

{
 echo 'pseudo utilisé';

}



else


{


if ( isset($_POST['motdepasse']) AND isset($_POST['confirmationmdp']) AND $_POST['motdepasse']==$_POST['confirmationmdp'] )


 {if (isset ($_POST['email']) AND  preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['email']))

     {$req=$bdd-> prepare(' INSERT INTO membres (pseudo,pass,email,date_inscription) VALUES (:pseudo,:pass,:email,NOW()) '    );

   $req->execute(array(

   'pseudo'=> htmlspecialchars($_POST['pseudo']),
   'pass'=>  password_hash(htmlspecialchars($_POST['motdepasse']),PASSWORD_DEFAULT),
   'email'=> $_POST['email']
   ));
   echo 'Félicitations vous etes inscrit maintenant !';
   echo '<p> <a href="connexion.php"> connectez-vous </a> <p>';
   $req->closeCursor();}
   else
    {
      echo 'adresse mail non valide';
    }
}

   else 

   { echo 'confirmation mot de passe incorrecte';}}}


   ?>



