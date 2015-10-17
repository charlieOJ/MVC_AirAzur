<?php
require 'connection.php';


function getLesVols(){
    
    $bdd=connect();
    // Déclaration d?un tableau
    $vols = array();
    
    // Requete de selction des vols
    try{
        $requete="select * from vols";
        
        $resultat=$bdd->query($requete);
        while($ligne=$resultat->fetch(PDO::FETCH_OBJ)){
                $vols[]=$ligne;
        }
    }
    catch(PDOException $e){
            echo "erreur dans la requete " .$e->getMessage();
    }

    return $vols;
}

function getLesReservations(){
    
    $bdd=connect();
    // Déclaration d?un tableau
    $reservations = array();  
    // Requete de selction des vols
    try{
        $requete="select reservation.idReservation as numReservation,
                reservation.idClient as idClient,
                reservation.paiement as paiement,
                reservation.nbPlace as nbPlace,
                client.nomClient as nomClient,
                client.prenomClient as prenomClient,
                client.mailClient as mailClient,
                client.adresseClient as adresseClient,
                client.cpClient as cpClient,
                client.villeClient as villeClient,
                client.telephoneClient as telephoneClient,
                vols.numVol as numVol,
                vols.aeroportDepart as aeroportDepart,
                vols.aeroportArrivee as aeroportArrivee,
                vols.dateDepart as dateDepart,
                vols.dateArrivee as dateArrivee,
                vols.prix as prix
                 from vols, reservation, client
                 where client.idClient=reservation.idClient
                 and vols.numVol=reservation.numVol";
        
        $resultat=$bdd->query($requete);
        while($ligne=$resultat->fetch(PDO::FETCH_OBJ)){
                $reservations[]=$ligne;
        }
    }
    catch(PDOException $e){
            echo "erreur dans la requete " .$e->getMessage();
    }

    return $reservations;
}



function creationClient($nomClient, $prenomClient,  $mailClient, $adresseClient, $cpClient, $villeClient, $telephoneClient){
        $_SESSION['nomClient']=$nomClient;
        $_SESSION['prenomClient']=$prenomClient;
        $_SESSION['mailClient']=$mailClient;
        $_SESSION['adresseClient']=$adresseClient;
        $_SESSION['cpClient']=$cpClient;
        $_SESSION['villeClient']=$villeClient;
        $_SESSION['telephoneClient']=$telephoneClient;
        
    $bdd=connect();
    try{
        $newClient="insert into client (nomClient, prenomClient,  mailClient, adresseClient, cpClient, villeClient, telephoneClient)
                   values('$nomClient', '$prenomClient',  '$mailClient', '$adresseClient', '$cpClient', '$villeClient', '$telephoneClient')";
        
        $resultat=$bdd->exec($newClient);
    }
    catch(PDOException $e){
            echo "erreur dans la requete " .$e->getMessage();
    }
}

function creationReservation($numVol, $paiement, $nbPlace){
        $_SESSION['numVol']=$numVol;
        $_SESSION['paiement']=$paiement;
        $_SESSION['nbPlace']=$nbPlace;
        
    $bdd=connect();
    try{
        $lastId="select max(idClient) as idClient from client";
        $resLastId=$bdd->query($lastId);
        while($lastIdClient=$resLastId->fetch(PDO::FETCH_OBJ)){
                $idClient=$lastIdClient->idClient;
        }
        $newReservation="insert into reservation (idClient, numVol, paiement, nbPlace )
                        values($idClient, '$numVol', '$paiement', '$nbPlace')";
        $resultat=$bdd->exec($newReservation);
    }
    catch(PDOException $e){
            echo "erreur dans la requete " .$e->getMessage();
    }
}

?>