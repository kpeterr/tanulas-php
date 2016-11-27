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

            if (isset($_SESSION['nev'])) {
            	echo "Üdvözöllek a 2. oldalon, ".$_SESSION['nev']."<br>";
            } else {
            	echo "Nem vagy bejelentkezve!<br>";
            }

            //var_dump($_SESSION);

            echo '<br><a href="oldal3.php">3. oldal</a>';
        ?>
    </body>
</html>