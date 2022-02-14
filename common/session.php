<?php

    // Ouvrir/réactiver la session. 
    session_start();

    if (!isset($_SESSION['date'])) {

        //Ouverture session - heure / date
        $sessionBegin = date('d/m/Y H:i:s');
        $_SESSION['date'] = $sessionBegin;

        //Enregistrer l'identifiant de la session
        session_id();

       // echo 'Session ouverte';
    }


    ?>