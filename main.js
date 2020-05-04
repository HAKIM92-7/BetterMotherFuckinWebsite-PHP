

  

function visitwebsite()
{  let Mychoice = prompt ('voulez vous visiter le fameux site xxxvidsxxx? o/n'); 
   localStorage.setItem('reponse',Mychoice);
                                                                                        //visiter le site ou non

}
visitwebsite();
let choice=localStorage.getItem('reponse');

if (choice ==='o') { window.location.replace("https://www.youtube.com/watch?v=dQw4w9WgXcQ"); } //redirect vers youtube



let myinscription=document.getElementById('inscrire');


myinscription.addEventListener ('click',function() { 
window.location.href="inscription.php";
});




