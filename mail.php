<?php

    /* Blocco raccoglitore variabili */ 
    $nome = $_POST['nome'];
    $mailfrom = $_POST['mailfrom'];
    $oggetto = $_POST['oggetto'];
    $testo = $_POST['testo'];
    /* Fine Blocco */

    if  ( $nome != "" & $mailfrom != "" & $testo != "" & $oggetto != "") { /* Controlla SE i campi sono vuoti */

		$mail = "gnuf.openchallenge@gmail.com";

		/* Blocco composizione del corpo dell' e-Mail */  
		$corpo = "Nome: ".$nome."
		E-Mail: ".$mailfrom."
		"."
		".$testo;
		/* Fine Blocco */

		if ( @mail($mail,$oggetto,$corpo ) ) {

		echo "OK. La mail è stata inviata correttamente."; 
		
		} else {

		echo "Attenzione. La mail non è stata inviata correttamente.";

		}

    }

 ?>



