<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Szuperglobális változók</title>
    </head>
    <body>

        <h1>Szuperglobális változók</h1>

        <form>
            <input type="text" name="nev" placeholder="Név">
            <br>
            <input type="text" name="kor" placeholder="Életkor">
            <br>
            <input type="text" name="munka" placeholder="Munka">
            <br>
            <input type="submit" value="Küldés">
        </form>

        <br>

        <?php

            /*
            * Olyan változók, amelyek a PHP-n belül bárhonnan elérhetőek.
            * Beépített változók, amelyeket nem lehet módosítani!
            */

            // Adatok átadása egyik oldalról a másikra
            // $_GET (query string - kérdő szöveg) globális változóval
            // Ez egy tömb, amely tartalmazza azokat az értékeket,
            // melyeket az URL-ben kapott meg az oldal
            var_dump($_GET);

            echo "<strong>A változó alkalmazása:</strong><br>";
            if (isset($_GET['nev'])) // Ezzel megvizsgáljuk, hogy létezik-e az adott változó (nev)
                echo "<p>Hello ".$_GET['nev']."!</p><br>";
        ?>
    </body>
</html>