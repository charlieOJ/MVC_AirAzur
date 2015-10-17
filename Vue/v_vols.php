<div id="contenu">
<?php

foreach($lesVols as $unVol)
{
        $numVol=$unVol->numVol;
	echo 'Numéro de vol: '.$numVol."</br>";;
       echo ' Départ: '.$unVol->aeroportDepart.'  '.$unVol->dateDepart .'</br>';
        echo 'Arrivée: '.$unVol->aeroportArrivee .'   '.$unVol->dateArrivee .'</br>';
       echo 'Places: '.$unVol->places .'</br>';
        echo 'Prix: '.$unVol->prix .'</br>';

	echo '<a href="../Controler/index.php?action=formReservation&numVol='.$numVol.'">Réserver</a></br></br>';
}
?>
</div>


