
<?php session_start(); ?>
<p> pseudo= <?php echo htmlspecialchars($_POST['pseudo']) ; ?>
<p> mot de passe= <?php echo $_POST['pass'] ; ?>
<p> email= <?php 

        if (isset($_POST['mail']) AND preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['mail']))

        {


          $texte=htmlspecialchars ($_POST['mail']) ;
          $texte=preg_replace('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#','<a href="mailto:$0">$0</a>',$texte) ;       
        
          echo $texte ;
        
        
        
        
        
        }

          else {echo 'l\'adresse mail n\'est pas valide';} ?> </p>


<p> date= <?php echo $_POST['jour'] ; ?>    
<p> message= <?php 
          if (isset($_POST['message']) )

          {

          if(preg_match('#http://[a-z0-9.=?&_-]+#i',$_POST['message']))

          {
              $texte2=htmlspecialchars($_POST['message']) ;

              $texte2=preg_replace('#http://[a-z0-9.=?&_/-]+#i','<a href="$0">$0</a>',$texte2);

              echo $texte2;

          }

         else

         { 
             echo htmlspecialchars($_POST['message']);
         }

        }

      ?>
<p> pays= <?php echo $_POST['pays'] ; ?>
<p> accepter= <?php echo $_POST['accepter'] ; ?>
<p> tranche d'age = <?php echo $_POST['tranche'] ; ?>

<?php if (isset ($_FILES['monfichier']) AND $_FILES['monfichier']['error']==0  )
    { if ($_FILES['monfichier']['size'] <= 1000000)
        {   
            // Testons si l'extension est autorisée
            $infosfichier = pathinfo ($_FILES['monfichier']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees))
            { move_uploaded_file($_FILES['monfichier']['tmp_name'] , "uploads/" .$_SESSION['id'].'.'.$extension_upload);
                
            }

           

        

        }
    
    
    
    }

    ?>
