<form method="POST" >

<fieldset>
<legend>Connexion</legend>

<label for="pseudo">Pseudo</label> <input type="text" name="pseudo" id="pseudo" /> <br/><br/>
<label for="motdepasse">Mot de passe</label> <input type="password" name="motdepasse" id="motdepasse" /> <br/><br/>
<label for="connexionauto">Connexion automatique</label><input type="checkbox" name="connexionauto" id="connexionauto" />   <br/><br/>


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






if (isset($_POST['pseudo']) AND isset($_POST['motdepasse']))

{
   $req=$bdd-> prepare( ' SELECT id,pass FROM membres WHERE pseudo=?' );
   $req->execute(array(

   htmlspecialchars($_POST['pseudo']) ,
   

 ));
 $donnees=$req->fetch();


 $verif_mdp=password_verify ($_POST['motdepasse'],$donnees['pass']);

 if (!$donnees)

{
     
    echo 'pseudo ou mot de passe incorrect';


}

else

{
  if ($verif_mdp)

  {  session_start();
     $_SESSION['id']=$donnees['id'];
     $_SESSION['pseudo']=$_POST['pseudo'];
     header('Location: texte.php');
  }

  else
  {

   echo 'pseudo ou mot de passe incorrect';

  }



$req->closeCursor();



}

}

?>





