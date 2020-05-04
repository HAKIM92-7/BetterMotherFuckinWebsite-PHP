
<header>
        
        <div  id="principaltitle" >   
          <div id="logo">  
    <p><img src="images/MFK.jpg" alt="imagelogo"></p>                                                                         <!--ENTETE DU SITE-->  
       <h1>THIS IS MY BEAUTIFUL WEBSITE </h1>    
   </div> 
       <h2 class="titre01">And it's REALLY perfect</h2> 
   </div>  
   
                                                                                   
       
       <div class="session">
       <p><?php 
        if (isset ($_SESSION['pseudo']) AND isset ($_SESSION['id']))

        { echo 'Bonjour ' .$_SESSION['pseudo']. ' Bienvenue à notre site !';}

        ?></p>

       </div>
   

       <nav id='menu'>
           
           <ul>
           <li><a href='#' title=cliquez>liens utiles</a></li>
           <li><a href='#' title=cliquez>Galerie</a></li>
           <li><a href='#' title=cliquez>Services</a></li>                                  <!--menu de navigation--> 
           <li><a href='#' title=cliquez>contact</a></li>
           <?php 
           
           if (isset($_SESSION['pseudo']) AND isset ($_SESSION['id']))
           
           {
           
           echo'<li><a href=\'deconnexion.php\' title=cliquez>Deconnexion</a></li>';
           echo '<li><a href=\'profil.php\' title=cliquez>Profil</a></li>';
           
            }

           else 

           {

            echo '<li><a href=\'connexion.php\' title=cliquez>Connexion</a></li>';


           }

           ?>


           </ul>
           </nav>  
           
   </header>