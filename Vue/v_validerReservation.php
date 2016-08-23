<?php
$_SESSION['nomClient']=$_REQUEST['nomClient'];
$_SESSION['prenomClient']=$_REQUEST['prenomClient'];
$numVol=$_REQUEST['numVol'];
$mailClient=$_REQUEST['mailClient'];
$adresseClient=$_REQUEST['adresseClient'];
$cpClient=$_REQUEST['cpClient'];
$villeClient=$_REQUEST['villeClient'];
$telephoneClient=$_REQUEST['telephoneClient'];
$nbPlace=$_REQUEST['nbPlace'];
$paiement=$_REQUEST['paiement'];
require  ('../Modele/fonctions.php');
?>
<h4>Validation</h4>

<p>La reservation pour le vol numéro <?php echo $numVol?> 
    du client <?php echo $_SESSION['nomClient']; ?>  <?php echo $_SESSION['prenomClient']; ?>  à été valider.</p>



<?php
//requete incluant info dans table client
creationClient($_SESSION['nomClient'], $_SESSION['prenomClient'],  $mailClient, $adresseClient, $cpClient, $villeClient, $telephoneClient);
//requete incluant dans table reservation
creationReservation($numVol, $paiement, $nbPlace);

?>