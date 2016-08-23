<?php
require  '../Modele/fonctions.php';
$numReservation=$_REQUEST['numReservation'];
$lesInfoReservation=getInfoReservation($numReservation);
            
    foreach($lesInfoReservation as $uneInfoReservation){
        $numReservation=$uneInfoReservation->numReservation;
        $idClient=$uneInfoReservation->idClient;
        $paiement=$uneInfoReservation->paiement;
        $nbPlace=$uneInfoReservation->nbPlace;
        $nomClient=$uneInfoReservation->nomClient;
        $prenomClient=$uneInfoReservation->prenomClient;
        $mailClient=$uneInfoReservation->mailClient;
        $adresseClient=$uneInfoReservation->adresseClient;
        $cpClient=$uneInfoReservation->cpClient;
        $villeClient=$uneInfoReservation->villeClient;
        $telephoneClient=$uneInfoReservation->telephoneClient;
        $numVol=$uneInfoReservation->numVol;
        $aeroportDepart=$uneInfoReservation->aeroportDepart;
        $aeroportArrivee=$uneInfoReservation->aeroportArrivee;
        $dateDepart=$uneInfoReservation->dateDepart;
        $dateArrivee=$uneInfoReservation->dateArrivee;
        $prix=$uneInfoReservation->prix;
    }
// permet d'inclure la biblioth�que fpdf
require('../Modele/fpdf/fpdf.php');

// instancie un objet de type FPDF qui permet de cr�er le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();
// d�finit la police courante
$pdf->SetFont('Arial','B',16);
//afficher une image
$pdf->Image('../Vue/images/avion.jpg',10,10, 64, 48);
// affiche du texte
$pdf->Cell(40,10,'                                          Resumer de r�servation sur AirAillaince');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','',13);
$pdf->Cell(40,10,'Info Client:');
$pdf->Ln();
$pdf->Cell(40,10,'Identit�: '.$nomClient.'   '.$prenomClient);
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
$pdf->Cell(40,10,'D�part: '.$aeroportDepart.'  '.$dateDepart);
$pdf->Ln();
$pdf->Cell(40,10,'Arriv�e: '.$aeroportArrivee.'  '.$dateArrivee);
$pdf->Ln();
$pdf->Cell(40,10,'Nombre de place: '.$nbPlace);
$pdf->Ln();
$pdf->Cell(40,10,'Prix Unitaire: '.$prix);
$pdf->Ln();
$pdf->Cell(40,10,'Prix Total: '.$prix*$nbPlace);
$pdf->Ln();



// Enfin, le document est termin� et envoy� au navigateur gr�ce � Output().
$pdf->Output();
?>
