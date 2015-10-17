<?php
    
?>
<h4>Liste des réservations:</h4>

<table border="1">
    <thead>
        <tr>
            <th>Num Reservation</th>
            <th>Nom Client</th>
            <th>Num Du Vol</th>
            <th>PDF</th>
        </tr>
    </thead>
    <tbody>
        
            <?php
            foreach($lesReservations as $uneReservation){
                echo "<tr><td>".$uneReservation->numReservation."</td>";
                echo "<td>".$uneReservation->nomClient."</td>";
                echo "<td>".$uneReservation->numVol."</td>";
                echo "<td><a href='../Controler/index.php?action=PDF&numReservation=".$uneReservation->numReservation." target='_blank'><img class='imgPDF' src='../Vue/images/pdf.png'/></a></td> </tr>";
            }
            ?>
       
        
    </tbody>
</table>

