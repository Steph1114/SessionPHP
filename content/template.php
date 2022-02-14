<?php

    // include('common/session.php');

    $variableProduit = filter_input(INPUT_GET, 'variableProduit', FILTER_SANITIZE_STRING);
           
     switch ($variableProduit) {

         case 'souris':
          $variableProduit = 'souris';
           include("content/souris.php");
           break;

         case 'robot':
          $variableProduit = 'robot';
           include("content/robot.php");
           break;

         case 'halteres':
          $variableProduit = 'halteres';
           include("content/halteres.php");
           break;

         case 'casque':
          $variableProduit = 'casque';
           include("content/casque.php");
           break;

         case 'chaussures':
          $variableProduit = 'chaussures';
           include("content/chaussures.php");
           break;

         case 'bracelet':
            $variableProduit = 'bracelet';
            include("content/bracelet.php");
            break;
 
         case 'montre':
            $variableProduit = 'montre';
            include("content/montre.php");
            break;

         default;
           include("common/nav.php");
           break;                        
     }

    //  $variableProduit = 'souris';

  //    if ($loc != 'home') {
  //     if (count($_SESSION['visites']) < 3) {
  //         $_SESSION['visites'][$variableProduit] = time();
  //     } else {
  //         array_shift($_SESSION['visites']);
  //         $_SESSION['visites'][$variableProduit] = time();
  //     }
  // }
 // var_dump($_SESSION['visites']);


    //session time will be saved into this variable once session is open
    $sessionStarted = time();

    //check if one of our variables (session) is being or has been saved 
    if((!isset($_SESSION['visites'][$variableProduit])) || (!isset($_SESSION['visites'][$variableProduit]) < $sessionStarted)){

      //affect time of new session into 'visites'
        $_SESSION['visites'][$variableProduit] = time();

    };

    //sort an array in descending order
    arsort($_SESSION['visites']);

    $arrVisitedPages = $_SESSION['visites'];

    //save names of visited articles into array
    $nameVisitedProduct = [];

    foreach ($arrVisitedPages as $key => $value) {
        # code...
        $nameVisitedProduct[] = $key;
        
    }; 

    ?>

    <h2 class="navigation">Votre historique de navigation</h2>

    <?php

    //Display the last 3 visited pages
    echo  '<b>Les pages visitées sont<b> :';
    echo "<br>";
    //$i = each page being visited
    for ($i=0; $i <= 3; $i++) { 

        if (!isset($_SESSION['visites'])) {
          return null;
        } elseif (isset($nameVisitedProduct[$i])) {
          
          echo  $nameVisitedProduct[$i];
          echo "<br>";
        }
        // else{
        //   echo  $nameVisitedProduct[$i];
        //   echo "<br>";
          
        // }
        
    }
    
            // if (isset($_SESSION['visites'])) {
            //          # code...
            //     for ($i=0; $i <= 3; $i++) { 
            //     echo  $nameVisitedProduct[$i];
            //     echo "<br>"; }
    
            // } else{
              
            //   return null;
            // }


?>