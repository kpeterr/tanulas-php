<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Tömbök</title>
    </head>
    <body>
        <?php
            // Tömb létrehozása
            echo "TÖMB létrehozása<br>";
            echo "<hr>";
            echo "A tömb kiírása:<br>";
            $arr1 = array('Pisti', 'Sanyi', 'Erika');
            //var_dump($arr); // a tömb kiiratása
            
            echo "<pre>";  // a tömb kiíratása másként
            print_r($arr1);
            echo "</pre>";
            
            echo "<hr>";

            echo "A tömb első elemének kiírása1:<br>";
            echo $arr1[0]; // a tömb első elemének kiírása

            echo "<hr>";

            // a tömb indexelése manuálisan:
            $arr2 = array(
                'elso'      => 'Pisti',
                'masodik'   => 'Sanyi',
                'harmadik'  => 'Erika'
            );

            echo "A tömb első elemének kiírása2:<br>";
            echo $arr2['elso'];  // a tömb első elemének kiírása

            echo "<hr>";

            // Egy új elem beszúrása a tömbbe manuálisan
            echo "Egy új elem beszúrása a tömbbe manuálisan<br>";
            $arr2['negyedik'] = 'Józsi';
            echo "<pre>";
            print_r($arr2);
            echo "</pre>";

            echo "<br>";

            // Egy új elem beszúrása a tömbbe függvénnyel
            echo "Egy új elem beszúrása a tömbbe függvénnyel<br>";
            $arr3 = array(
                'elso'      => 'Pisti',
                'masodik'   => 'Sanyi',
                'harmadik'  => 'Erika'
            );
            array_push($arr3, 'Józsi');
            echo "<pre>";
            print_r($arr3);
            echo "</pre>";

            echo "<hr>";

            // A tömb utolsó elemének eltávolítása
            echo "A tömb utolsó elemének eltávolítása:<br>";
            $arr4 = array(
                'elso'      => 'Pisti',
                'masodik'   => 'Sanyi',
                'harmadik'  => 'Erika'
            );
            array_pop($arr4); // Utolsó elem eltávolítása
            echo "<pre>";
            print_r($arr4);
            echo "</pre>";

            echo "<br>";

            // Az eltávolított elem változóba mentése
            echo "Az eltávolított elem változóba mentése:<br>";
            $arr5 = array(
                'elso'      => 'Pisti',
                'masodik'   => 'Sanyi',
                'harmadik'  => 'Erika'
            );
            $elemki1 = array_pop($arr5); // Az eltávolított elem változóba mentése
            echo $elemki1;
            echo "<pre>";
            print_r($arr5);
            echo "</pre>";

            echo "<hr>";

            // A tömb első elemének eltávolítása
            echo "A tömb első elemének eltávolítása:<br>";
            $arr6 = array(
                'elso'      => 'Pisti',
                'masodik'   => 'Sanyi',
                'harmadik'  => 'Erika'
            );
            array_shift($arr6); // Utolsó elem eltávolítása
            echo "<pre>";
            print_r($arr6);
            echo "</pre>";

            echo "<br>";

            // Az eltávolított elem változóba mentése
            echo "Az eltávolított elem változóba mentése:<br>";
            $arr7 = array(
                'elso'      => 'Pisti',
                'masodik'   => 'Sanyi',
                'harmadik'  => 'Erika'
            );
            $elemki2 = array_shift($arr7); // Az eltávolított elem változóba mentése
            echo $elemki2;
            echo "<pre>";
            print_r($arr7);
            echo "</pre>";
        ?>
    </body>
</html>