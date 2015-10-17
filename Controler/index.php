<div id='contenu'>
<?php 
session_start();
    
   
    include '../Vue/v_header.php';
    if(!isset ($_REQUEST['action'])){
        $action='accueil';
    }
    else {
        $action=$_REQUEST['action'];
    }
    switch ($action){
        case 'accueil':
            include ('../Vue/v_accueil.php');
            break;
        case 'voirVols':
            require  '../Modele/fonctions.php';
            $lesVols=getLesVols();
            include ('../Vue/v_vols.php');
            break;
        case 'formReservation': 
            $_SESSION['numVol']=$_REQUEST['numVol'];
            require  ('../Modele/fonctions.php');
            $lesVols=getLesVols();
            include ('../Vue/v_formReservation.php');
            break ;
        case 'valideForm':
            $_SESSION['numVol']=$_REQUEST['numVol'];
            $_SESSION['nomClient']=$_REQUEST['nomClient'];
            $_SESSION['prenomClient']=$_REQUEST['prenomClient'];
            include ('../Vue/v_validForm.php');
            break;
        case 'reservation':
            require  ('../Modele/fonctions.php');
            $lesReservations=getLesReservations();
            include ('../Vue/v_listeReservation.php');
            session_destroy();
            break;
        case 'PDF':
            $numReservation=$_REQUEST['numReservation'];
            header ('Location:../Vue/v_pdfReservation.php?numReservation='.$numReservation);  
            break ;
    }
   
        include '../Vue/v_footer.php';

?>
</div>