<?php
  /*****************************************
  *  Constantes et variables
  *****************************************/
  
  $message = '';      // Message à afficher à l'utilisateur
 
  /*****************************************
  *  Vérification du formulaire
  *****************************************/
  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST))
  {
    // Le nom est-il rempli ?
    if(empty($_POST['first_name']))
    {
      $message = 'Veuillez indiquer votre prenom svp !';
    }
      // Le prenom est-il rempli ?
      elseif(empty($_POST['last_name']))
    {
      $message = 'Veuillez indiquer votre nom svp !';
    }
     // L'année de naissance est-il rempli ?
      elseif(empty($_POST['birth_year']))
    {
      $message = 'Veuillez indiquer votre année de naissance svp !';
    }
  
      else
    {
      // L'identification a réussi
      $message = 'Bienvenue '. first_name .' !';
    }
  }
?>