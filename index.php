<? session_start(); ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css" />     
    <meta name="viewport" content="width=device-width" />

    <title>BetterMotherFuckingWebsite</title>             <!--    TITRE D'ONGLET DU SITE --> 
</head>




<body>
<div id="blockpage">                  <!--ouverture du contenaire-->

<?php include('header.php') ?>


<div id="imagebanière">


<!-- l'image de banière   --> 

<div id="descriptionbanière"> 
  
  <p>la beauté est créee pour Ètre observée</p>       

<button id="inscrire">inscrivez-vous</button>
</div>

</div>


   

    
<?php
$monfichier = fopen('compteur.txt', 'r+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues = $pages_vues+1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose($monfichier);

echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';

 

?>

    
    
        <section>
        
         <div id='article1'>
             <article>




            <h2 class="premiertitre">Seriously , what the fuck else ?</h2>
           
            <p> You probably build websites using vim and feeling hardcore. You think your 4.99KB
                <a href="https://thebestmotherfucking.website/" title="website">motherfuckingwebsite(.com) </a>is going to get you some fucking award to put on your damn footer as a link. You think your fucking default font is gonna make your website
                run even on a toast       <br/>  <!--  insertion de l'url du site the BMF  -->   
            <?php echo "ce texte est en php" ; ?>                            
                             
                                                
            </p>
            
        </article>
         </div>

            <div id='article2'>             <!-- insérer un article dans la section   -->   
                <article>
                    <h2 class="deuxiemetitre">Well guess what, motherfucker:</h2>
                    <p>You. Are. Over-designing. Look at this shit. It's a motherfucking website. Why the fuck do you need to animate a fucking trendy-ass banner flag when I hover over that useless piece of shit? You spent hours on it and added 80 kilobytes
                        to your fucking site, and some <span>motherfucker</span>jabbing at it on their iPad with fat sausage fingers will never see that shit. Not to mention blind people will never see that shit, but they don't see any of your shitty
                        shit. You never knew it, but this is your perfect website. Here's why.
                <a href="images/horror.gif"><img src="images/trump.jpeg" class="imagetrump" alt="trumping" title="fuck you" /> </a> <br/>  cliquez sur l'image pour voir la surprise </p>
                     <!-- insertion de l'image de trump-->

                </article>
            </div>
        </section>

    <div id='aside'>
    
    <div id="aside1">
    
    <aside>
        <h2>It's fucking lightweight ! </h2>     <!-- insertion d'un petit paragraphe sous forme de nav  avec l'image de roue-->   
        <p>
            <a href="images/roues.jpg"><img src="images/roues2.jpeg" class="imageflottante" alt="imageflottante" title="agrandir" /></a> entire page weighs less than the gradient-meshed facebook logo on your fucking Wordpress site. Did you seriously load 100kb of jQuery UI just so you
            could animate the fucking background color of a div? You loaded all 7 fontfaces of a shitty webfont just so you could say "Hi. " at 100px height at the beginning of your site? You piece of shit.</p>

 
            <h2 class="troisiemetitre">This is a website. Look at it. You've never seen one before.</h2>
            <p> Like the man who's never grown out his beard has no idea what his true natural state is, you have no fucking idea what a website is. All you have ever seen are shitty skeuomorphic bastardizations of what should be text communicating a fucking
                message. This is a real, naked website. Look at it. It's fucking beautiful.</p>
        </aside></div>

    <div id="aside2">

    <aside>
        <h2>motherfucker Jones </h2> 
        <p>Dans cette video vous allez découvrir notre ami Motherfucker Jones , qui va vous faire éclater de rire .</p> <br/>
        <p>Attachez vos ceintures !!</p>
        <video src="videos/motherfucker_jones.mp4"  controls poster="images/motherfucker.jpg" width="430" height="300" preload="none"></video>

    

    </aside> 
</div>   
    </div>  <!--fermeture ASIDE -->

    
    
    
</div>  <!--fermeture du contenaire-->
    
<footer>    
        
    <!-- pied de page -->
    <div id="myfooter">
    <div id="myfooter1">
    <h2>My own MotherFucking Website</h2>
    <p class="email">if you want to contact me send me an <a href="mailto:barouni.hakim@gmail.com">e-mail</a></p>
    </div>
    <div id="socialmedia">
    <a href="https://fr-fr.facebook.com/"><img src="images/facebook.png" alt="imagefacebook"  title="facebook"/> </a>
    <a href="https://www.instagram.com/"><img src="images/instagram.png" alt="imageinstagram"  title="instagram"/></a>
    <a href="https://twitter.com/"><img src="images/twitter.png" alt="imagetwitter"  title="twitter"/></a>
       </div>
    </div>
    <p class="copyright">copyright © 2019 all rights reserved</p>



</footer>

   
                    

    
      
     
    


     <script src="main.js"></script>   <!--référence au fichier JavaScript-->  


   

</body>
</html>
