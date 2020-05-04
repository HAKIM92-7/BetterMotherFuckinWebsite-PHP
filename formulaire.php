<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css" />     
    

    <title>BetterMotherFuckingWebsite</title>             <!--    TITRE D'ONGLET DU SITE --> 
</head>
<?php include("header.php"); ?>
<form method="post" action="cible.php" enctype="multipart/form-data">
        <p>
          <fieldset> 
              <legend>Données Personnelles</legend>
            <label for="pseudo">Votre pseudo</label> : <input type="text" name="pseudo" id="pseudo" placeholder="ex hakim" autofocus/>
            <br /> <br /> 
            <label for="pass">Votre mot de passe :</label>
            <input type="password" name="pass" id="pass" />
            <br /> <br /> 
            <label for="mail">Votre email</label> : <input type="email" name="mail" id="mail" placeholder="ex hakim@gmail.com"/>
            <br /> <br /> 
            <label for="jour">Date de naissance</label> : <input type="date" name="jour" id="jour" />
            <br /> <br /> 
        </fieldset> 
            
            <fieldset>
            <legend>Tranche d'age</legend>
           
            <input type="radio" name="tranche" value="moins de 18" id="moins de 18" checked /><label for="moins de 18">moins de 18</label><br/>
            <input type="radio" name="tranche" value="18-25" id="18-25"  /><label for="18-25">18-25</label><br/> 
             <input type="radio" name="tranche" value="26-35" id="26-35" /><label for="26-35">26-35</label><br/>
             <input type="radio" name="tranche" value="35-50" id="35-50" /><label for="35-50"> 35-50</label><br/>
             <input type="radio" name="tranche" value="plus que 50" id="plus que 50" /><label for="plus que 50">plus que 50</label>  <br/> <br/>
            </fieldset>
             <br /> 
            
        
       <label for="pays">Dans quel pays habitez-vous ?</label><br />
       <select name="pays" id="pays">
           <optgroup label="Europe">
           <option value="france">France</option>
           <option value="espagne">Espagne</option>
           <option value="italie">Italie</option>
           <option value="royaume-uni">Royaume-Uni</option>
          </optgroup>
          <optgroup label="Amérique du nord">
           <option value="canada">Canada</option>
           <option value="etats-unis">États-Unis</option>
        </optgroup>
        <optgroup label="Asie">
           <option value="chine">Chine</option>
           <option value="japon">Japon</option>
        </optgroup>
        <optgroup label="Afrique">
           <option value="Tunisie" selected>Tunisie</option>
        </optgroup>
       </select> <br /><br />

       Voulez vous nous laisser un message ? <br/><br/>
       <textarea name="message" rows="6" cols="35"> ecrire ici </textarea> <br/><br/>

       <input type="file" name="monfichier"/> <br/><br/>
       
       <input type="checkbox" name="accepter" id="accepter" /> <label for="accepter">Accepter les conditions d'utilisation</label>  <br/><br/>

       <input type="submit" value="envoyer"/>








        
            
        </p>
     </form>

     