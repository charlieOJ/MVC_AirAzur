<div id="contenu">
<?php

foreach($lesVols as $unVol)
{
        $numVol=$unVol->numVol;
	echo 'Num�ro de vol: '.$numVol."</br>";;
       echo ' D�part: '.$unVol->aeroportDepart.'  '.$unVol->dateDepart .'</br>';
        echo 'Arriv�e: '.$unVol->aeroportArrivee .'   '.$unVol->dateArrivee .'</br>';
       echo 'Places: '.$unVol->places .'</br>';
        echo 'Prix: '.$unVol->prix .'</br>';

	echo '<a href="../Controler/index.php?action=formReservation&numVol='.$numVol.'">R�server</a></br></br>';
}
?>
</div>


