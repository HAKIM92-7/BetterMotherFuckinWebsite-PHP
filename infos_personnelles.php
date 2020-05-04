
<?php session_start();






try
{
  $bdd=new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','root','');  

}
catch (Exception $e)

{
  die('Erreur:'.$e->getMessage());

}


$req=$bdd->prepare('SELECT pseudo,nom_prenom,date_naissance,email,poste,description,passions,autres_passions FROM membres  WHERE id=?');
$req->execute(array($_SESSION['id']));

while ($donnees=$req->fetch())

{?>


<form  method="POST" action="infos_personnelles_post.php" >
<fieldset> 
<legend>Informations personnelles</legend>


<label for="nomprenom"> Nom & Prénom </label> <input type="text" name="nomprenom" id="nomprenom" value=<?php echo $donnees['nom_prenom'];?> /> <br/><br/>
<label for="datedenaissance"> Date de naissance </label> <input type="date" name="datedenaissance" id="datedenaissance" value=<?php echo $donnees['date_naissance'];?> /> <br/><br/>
<label for="poste"> Poste </label> <input type="text" name="poste" id="poste" value=<?php echo $donnees['poste'];?>/> <br/><br/>

<textarea name="description" rows="8" cols="40"> <?php echo $donnees['description'];?></textarea>
 
<h3>Passions</h3>

<?php 

if ( preg_match('#sport#',$donnees['passions']))

{?>

<label for="sport"> Sport</label> <input type="checkbox" name="sport" value="sport"  checked/> 

<?php }



else {
   
   ?> 
   
   <label for="sport"> Sport</label> <input type="checkbox" name="sport" value="sport" /> 
   
<?php }


if ( preg_match('#social media#',$donnees['passions']))

      { ?> 
   
   <label for="socialmedia"> Socialmedia</label> <input type="checkbox" name="socialmedia" value="social media" checked/>


<?php }



else {?>


<label for="socialmedia"> Social media</label> <input type="checkbox" name="socialmedia" value="social media" />
   
  
<?php }


if ( preg_match('#jeux video#',$donnees['passions']))

      { ?> 
   
   <label for="jeuxvideo"> Jeux video</label> <input type="checkbox" name="jeuxvideo" value="jeux video" checked/> <br/><br/>


<?php }



else {?>

<label for="jeuxvideo"> Jeux video</label> <input type="checkbox" name="jeuxvideo" value="jeux video" /> <br/><br/>  
  
<?php }



if ( preg_match('#lecture#',$donnees['passions']))

      { ?> 
   
   <label for="lecture"> Lecture</label> <input type="checkbox" name="lecture" value="lecture" checked/>


<?php }



else {?>

<label for="lecture"> Lecture</label> <input type="checkbox" name="lecture" value="lecture" />
  
<?php }



if ( preg_match('#sortir dans la nature#',$donnees['passions']))

      { ?> 
   
   <label for="sortirnature"> Sortir dans la nature</label> <input type="checkbox" name="sortirnature" value="sortir dans la nature"  checked/>


<?php }



else {?>

<label for="sortirnature"> Sortir dans la nature</label> <input type="checkbox" name="sortirnature" value="sortir dans la nature" />
  
<?php }




if ( preg_match('#autres#',$donnees['passions']))

      { ?> 
   
   <label for="autres"> Autres</label> <input type="checkbox" name="autres" value="autres" checked/> <br/><br/>


<?php }



else {?>

<label for="autres"> Autres</label> <input type="checkbox" name="autres" value="autres" /> <br/><br/>
  
<?php }

?>





   <p>  Autes passions !</p>

   <textarea name="precisionautres"  rows="6" cols="40">


   <?php echo $donnees['autres_passions'];?>

     


   </textarea> <br/><br/>



<input type="submit" value="envoyer"/>



  

</fieldset>


</form>

<p><a href="texte.php">retourner à la page d'acceuil</a></p>

<?php } 

$req->closeCursor();

?>




