$(function(){
    
    $("#validerForm").on("click",
        function(){
            $("#formReservation").load("../Vue/v_validerReservation.php",
                {"numVol":$("#numVol").val(),
                "nomClient": $("#nomClient").val(),
                "prenomClient": $("#prenomClient").val(),
                "mailClient":$("#mailClient").val(),
                "adresseClient":$("#adresseClient").val(),
                "cpClient":$("#cpClient").val(),
                "villeClient":$("#villeClient").val(),
                "telephoneClient":$("#telephoneClient").val(),
                "nbPlace":$("#nbPlace").val(),
                "paiement":$("#paiement").val()});
        }
        );
    

});


