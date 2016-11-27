<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Munkamenet kezelés (session)</title>
    </head>
    <body>
        <?php
            echo "<h1>Munkamenet kezelés (session)</h1>";

            session_start();

            echo "Üdvözöllek a 3. oldalon, ".$_SESSION['nev']."<br>";

            if (session_destroy()) { // A munkamenet lezárása
            	echo "A Munkamenet törlése sikeres!";
            } else {
            	echo "A Munkamenet törlése sikertelen!";
            }
            
        ?>
    </body>
</html>