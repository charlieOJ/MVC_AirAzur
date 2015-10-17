<?php

require  '../Modele/fonctions.php';
$lesVols=  getLesVols();
print_r($lesVols);

foreach($lesVols as $unVol)
{
	echo $unVol->numVol."</br>";;
       echo $unVol->aeroportDepart.'</br>';
        echo $unVol->aeroportArrivee .'</br>';
        echo $unVol->dateDepart .'</br>';
        echo $unVol->dateArrivee .'</br>';
        echo $unVol->places .'</br>';
        echo $unVol->prix .'</br>';
	// à compléter?*/
}

