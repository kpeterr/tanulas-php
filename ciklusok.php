<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Ciklusok (loop)</title>
    </head>
    <body>
        <?php
            echo "<h1>Ciklusok (loop)</h1>";

            /* CIKLUSOK (loop):
            * Ciklikusan, újra és újra végrehajtják
            * a bennük szereplő utasításokat
            */

            // FOR ciklus
            echo "<strong>For ciklus létrehozása:</strong><br>";
            
            $tomb = array(1, 2, 3, 4, 5, 6, 7); // Létrehozunk egy tömböt
            for ($i=0; $i < count($tomb); $i++) {
                /* Végigjárjuk
                * 3 paraméter vár tőlünk:
                * 1. - egy változó, amibe elmenti, hogy éppen hol jár ($i)
                * 2. - meddig fusson a művelet (feltétel):
                * $i < count($tomb), a count() függvény a tömb hosszát adja meg
                * 3. - mit csináljon a kód lefutása után,
                * növeljük az értékét eggyel ($i++)
                ** Addig fut (jelen esetben), amíg az $i értéke
                ** el nem éri a 7-et.
                */
                echo "A tömb eleme: ".$tomb[$i]."<br>";
                // Majd kiírja a tömb elemeit
                // a kulcsukra hivatkozva ($tomb[$i])
            }

            echo "<hr>";

            // FOREACH ciklus
            echo "<strong>Foreach ciklus létrehozása kulcs-érték párokkal:</strong><br>";

            /*
            * A Foreach ciklus kevesebb paramétert vár,
            * mert végigmegy a tömb összes elemén!
            */
            
            $tomb1 = array(1, 2, 3, 4, 5, 6, 7);
            foreach ($tomb1 as $key => $value) {
                /*
                * 1. - megadjuk, hogy melyik tömbön végezze el a műveletet
                * 2. - meg kell adni, hogy hogyan jelenjen meg a tömb azon elem, ahol éppen jár (ez külön változóban jelenik meg: $key)
                * 3. - és külön változóban az értéke ($value)
                */
                echo "Az elem kulcsa: ".$key.", az elem értéke: ".$value."<br>";
            }

            echo "<hr>";

            // FOREACH ciklus
            echo "<strong>Foreach ciklus létrehozása csak érték megadásával:</strong><br>";
            
            $tomb2 = array(1, 2, 3, 4, 5, 6, 7);
            foreach ($tomb2 as $_a) {
                echo "Az elem értéke: ".$_a."<br>";
            }

            echo "<hr>";

            // WHILE ciklus
            echo "<strong>While ciklus létrehozása:</strong><br>";
            
            $tomb3 = array(1, 2, 3, 4, 5, 6, 7);
            $j = 0;
            while ($j < count($tomb3)) {
            /*
            * Egy feltételt kell neki megadni
            * és ameddig ez a feltétel igaz (true)
            * addig fut a ciklus.
            * Ezért nagyon oda kell figyelni
            * a feltétel megadásánál nehogy
            * végtelen ciklus legyen a vége!!!
            */
                echo "A tömb eleme: ".$tomb3[$j]."<br>";
                $j++; // Ez a legfontosabb sor, hiszen ez szabályozza, hogy mindig növelje meg a $j értékét eggyel, így nem lesz belőle végtelen ciklus
            }
        ?>
    </body>
</html>