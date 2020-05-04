<?php session_start();

try
{
  $bdd=new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','root','');  

}
catch (Exception $e)

{
  die('Erreur:'.$e->getMessage());

}








$req=$bdd->prepare('UPDATE membres SET nom_prenom=:nv_nom_prenom,date_naissance=:nv_date_naissance,poste=:nv_poste,description=:nv_description,

WHERE id=:id_membre') ;


$req->execute(array(


    'nv_nom_prenom'=>htmlspecialchars($_POST['nomprenom']),
   'nv_date_naissance' => $_POST['datedenaissance'],
   'nv_poste'=> htmlspecialchars($_POST['poste']),
    'nv_description'=>htmlspecialchars($_POST['description']),
    
    'id_membre' => $_SESSION['id']
    




));

$req->closeCursor();


if (isset($_POST['sport'])|| ($_POST['socialmedia']) || ($_POST['jeuxvideo']) || ($_POST['lecture'])|| ($_POST['sortirnature'])|| ($_POST['autres']))
{
  $reponse=$bdd->prepare('UPDATE membres SET passions=:passions,autres_passions= :nv_autres_passions WHERE id=:id_membre ');

  $reponse->execute(array(
 
  'passions' => $_POST ['sport'].' & '.$_POST['socialmedia'] .' & '.$_POST['jeuxvideo'].' & '. $_POST['lecture']
  .' & '.$_POST['sortirnature'].' & '.$_POST['autres'],

  'nv_autres_passions'=>$_POST['precisionautres'],



  'id_membre' =>$_SESSION['id']




  ));





$reponse->closeCursor();


}








header('Location:infos_personnelles.php');

?>





