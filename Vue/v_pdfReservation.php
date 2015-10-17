<?php
require  '../Modele/fonctions.php';
            $lesReservations=getLesReservations();
            $numReservation=$_REQUEST['numReservation'];
            foreach($lesReservations as $uneReservation){
                if($uneReservation->numReservation==$numReservation){
                    $numReservation=$uneReservation->numReservation;
                    $idClient=$uneReservation->idClient;
                    $paiement=$uneReservation->paiement;
                    $nbPlace=$uneReservation->nbPlace;
                    $nomClient=$uneReservation->nomClient;
                    $prenomClient=$uneReservation->prenomClient;
                    $mailClient=$uneReservation->mailClient;
                    $adresseClient=$uneReservation->adresseClient;
                    $cpClient=$uneReservation->cpClient;
                    $villeClient=$uneReservation->villeClient;
                    $telephoneClient=$uneReservation->telephoneClient;
                    $numVol=$uneReservation->numVol;
                    $aeroportDepart=$uneReservation->aeroportDepart;
                    $aeroportArrivee=$uneReservation->aeroportArrivee;
                    $dateDepart=$uneReservation->dateDepart;
                    $dateArrivee=$uneReservation->dateArrivee;
                    $prix=$uneReservation->prix;
                }
            }
// permet d'inclure la bibliothèque fpdf
require('../Modele/fpdf/fpdf.php');

// instancie un objet de type FPDF qui permet de créer le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();
// définit la police courante
$pdf->SetFont('Arial','B',16);
//afficher une image
$pdf->Image('../Vue/images/avion.jpg',10,10, 64, 48);
// affiche du texte
$pdf->Cell(40,10,'                                          Resumer de réservation sur AirAillaince');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','',13);
$pdf->Cell(40,10,'Info Client:');
$pdf->Ln();
$pdf->Cell(40,10,'Identité: '.$nomClient.'   '.$prenomClient);
$pdf->Ln();
$pdf->Cell(40,10,'Localisation: '.$adresseClient.'  '.$cpClient.'   '.$villeClient);
$pdf->Ln();
$pdf->Cell(40,10,'E-mail: '.$mailClient);
$pdf->Ln();
$pdf->Cell(40,10,'Telephone: '.$telephoneClient);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(40,10,'Info Vol: ');
$pdf->Ln();
$pdf->Cell(40,10,'Numero de vol: '.$numVol);
$pdf->Ln();
$pdf->Cell(40,10,'Départ: '.$aeroportDepart.'  '.$dateDepart);
$pdf->Ln();
$pdf->Cell(40,10,'Arrivée: '.$aeroportArrivee.'  '.$dateArrivee);
$pdf->Ln();
$pdf->Cell(40,10,'Nombre de place: '.$nbPlace);
$pdf->Ln();
$pdf->Cell(40,10,'Prix Unitaire: '.$prix);
$pdf->Ln();
$pdf->Cell(40,10,'Prix Total: '.$prix*$nbPlace);
$pdf->Ln();



// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$pdf->Output();
?>
