<?php
if (isset($_POST['valider']) ){
    

    if((isset($_POST['nomClient']))&&(isset($_POST['prenomClient']))&&(isset($_POST['nbPlace']))&&(isset($_POST['mailClient']))&&(isset($_POST['adresseClient']))&&(isset($_POST['cpClient']))&&(isset($_POST['villeClient']))&&(isset($_POST['telephoneClient']))&&(isset($_POST['paiement']))){
            //requete incluant info dans table client
            creationClient($_POST['nomClient'], $_POST['prenomClient'],  $_POST['mailClient'], $_POST['adresseClient'], $_POST['cpClient'], $_POST['villeClient'], $_POST['telephoneClient']);
            //requete incluant dans table reservation
            creationReservation($_SESSION['numVol'], $_POST['paiement'], $_POST['nbPlace']);
        header("location:index.php?action=valideForm&numVol=".$_SESSION['numVol']."&nomClient=".$_POST['nomClient']."&prenomClient=".$_POST['prenomClient']);
    }
    else{
        header("Location:../Controler/index.php?action=formReservation&numVol=".$_SESSION['numVol']."");
        echo 'Veuillez remplir tous les champs.';
    }
            //requete incluant info dans table client
     //       creationClient($nomClient, $prenomClient,  $mailClient, $adresseClient, $cpClient, $villeClient, $telephoneClient);
            //requete incluant dans table reservation
       //     creationReservation($numVol, $paiement, $nbPlace);


    
}
else{
    echo '<form method="POST" action="index.php?action=formReservation&numVol='.$_SESSION['numVol'].'">';
 ?>
        <fieldset>
            <legend>Reservation pour le vol numero <?php echo $_SESSION['numVol']; ?></legend>
            <fieldset>
                <legend>Résumer: </legend>
                <?php
                    foreach($lesVols as $unVol){
                        if ($unVol->numVol==$_SESSION['numVol']) {
                            echo 'Numéro de vol: '.$_SESSION['numVol']."</br>";;
                            echo ' Départ: '.$unVol->aeroportDepart.'  '.$unVol->dateDepart .'</br>';
                            echo 'Arrivée: '.$unVol->aeroportArrivee .'   '.$unVol->dateArrivee .'</br>';
                            echo 'Places: '.$unVol->places .'</br>';
                            echo 'Prix: '.$unVol->prix .'</br>';
                         }
                    }
                ?>
            </fieldset>
            <fieldset>
                <legend>Vos informations: </legend>
                <input type='hidden' name='numVol' value='<?php $_SESSION['numVol'];?>'/>

                <label>Nom: </label>
                    <input name="nomClient" type="text" />
                </br>
                <label>Prénom: </label>
                    <input name="prenomClient" type="text" />
                </br>
                <label>Mail: </label>
                    <input name="mailClient" type="mail" />
                </br>
                <label>Adresse: </label>
                    <input name="adresseClient" type="text" />
                </br>
                <label>Code Postal: </label>
                    <input name="cpClient" type="text" />
                </br>
                <label>Ville: </label>
                    <input name="villeClient" type="text" />
                </br>
                <label>Téléphone: </label>
                    <input name="telephoneClient" type="text" />
                </br>
                <label>Nombre de places:</label>
                <input type='text' name='nbPlace'/>
                </br>
                <label> Moyen de paiement: </label>
                </br> 
                    <input type="radio" name="paiement" value="CB"/><label>Carte Bleu</label></br>
                    <input type="radio" name="paiement" value="Paypal"/><label>Paypal</label></br>
                    <input type="radio" name="paiement" value="Cheque"/><label>Cheques</label>
                    </br>

            </fieldset>
            <input type="submit" name="valider" value="Valider"/><input type="reset" name="annuler" value="Annuler"/>
        </fieldset>
    </form>
<?php
}
?>