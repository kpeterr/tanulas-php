<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Szuperglobális változók - $_POST</title>
    </head>
    <body>

        <h1>Szuperglobális változók - $_POST</h1>

        <!-- A POST metódussal elküldött adatok
        számunkra láthatatlan formában közlekednek
        a szerver és a kliens gép között -->

        <form method="post" action="beszurasok/feldolgozas.php">
            <label>Felhasználónév:</label>
            <input type="text" name="felhasznalonev">
            <br>
            <label>Jelszó:</label>
            <input type="text" name="jelszo">
            <br>
            <button type="submit">Küldés</button>
        </form>
        
    </body>
</html>