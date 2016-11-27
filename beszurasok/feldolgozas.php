<?php

/*
* A POST egy szuperglobális tömb,
* amit bárhonnan elérhetünk a PHP-n belül.
*/
	/*
	echo "A POST tömb hossza: ".count($_POST)."<br>";
	// A count egy számláló függvény, amely visszaadja a tömb hosszát

	if (count($_POST) > 0) { // Amennyiben a tömb nem üres (tömb>0)
	    //var_dump($_POST); // Kiíratjuk a tömb tartalmát
	    echo "Név: ".$_POST['nev']."<br>";
	    echo "Kor: ".$_POST['kor'];
	}
	*/

	if (count($_POST) > 0) { 
		if ($_POST['felhasznalonev'] == 'John' && $_POST['jelszo'] == '1234') {
			echo "Belépés engedélyezve!";
		} else {
			echo "Belépés megtagadva!";
		}
	}

?>