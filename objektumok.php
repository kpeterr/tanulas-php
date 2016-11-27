<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Objektumok</title>
    </head>
    <body>
        <?php
            echo "<h1>Objektumok</h1>";

            /*
            * Olyan memória területek, ahol gyakorlatilag
            * bármit tárolhatunk, kicsit hasonlóak a tömbökhöz.
            * Lényeges különbség, hogy kölönböző figgvényeket és
            * eljárásokat is létre tudunk hozni bennük, ezáltal
            * sokkal összetettebbek, mint a Tömbök
            */ 

            // Objektum létrehozása
            $obj = new stdClass; // Ilyen fajta objektumba nem lehet függvényt beletenni!

            // Az objektum feltöltése adattal:
            $obj->var1 = 20;
            $obj->var2 = true;
            $obj->arr = array(1, 2, 3);

            // A létrehozott objektum kiírása
            echo "<strong>A létrehozott objektum kiírása:</strong><br>";
            echo "<pre>";
            print_r($obj);
            echo "</pre>";

            // Az objektum egyik elemének kiírása
            echo "<strong>Az objektum egyik elemének kiírása:</strong><br>";
            echo $obj->var2;

            echo "<hr>";

            // Új PHP osztály (class) létrehozása
            /**
            * 1. - Adni kell neki egy nevet (ClassName)
            * 2. - Ez az osztály lehet egy másik osztály
            *      kiterjesztése (extends AnotherClass)
            ** Van benne egy olyan függvény, hogy "__construct"
            ** Akkor kerül meghívásra, amikor az osztályból
            ** egy új példány létrejön
            *** Az osztály olyan elemek csoportja, amelyekre
            *** egyazon dolgok érvényesek.
            *** Az osztályokban nem lehet minden változót kívülről elérni!
            */
            class Tanulo // Egyezményesen NAGY kezdőbetűvel írjuk az osztály nevét
            {
                // Ezek a változók kívülről is elérhetők (public)
                public $terem = 28;
                public $kor = 12;
                public $nev = 'Péter';
                // A "private" kulcsszóval csak az osztályon belülről
                // érhető el a változó: "private $nev = 'Péter'"
                
                function __construct($nev)
                {
                    // Az osztályon belül magára az osztályra
                    // a $this kulcsszóval tudunk hivatkozni
                    $this->nev = $nev;
                }

                // Egy függvény létrehozása az osztályon belül
                public function kiiras() {
                    echo "A tanuló neve: ".$this->nev."<br>"."A tanuló életkora: ".$this->kor."<br>"."A tanuló osztálya: ".$this->terem;
                }
            }

            // Egy új példány létrehozása az osztályból
            echo "<strong>Egy újonnan létrehozott osztály kiírása:</strong><br>";
            $milan = new Tanulo('Milán'); // Elmentjük egy változóba az új osztályt
            echo $milan->nev."<br>";

            // Több példány is létrehozható belőle (ez a lényeg :-))
            $john = new Tanulo('John');
            echo $john->nev;

            echo "<hr>";

            echo "<strong>Az osztályon belül létrehozott függvény kiírása:</strong><br>";
            $milan->kiiras();
        ?>
    </body>
</html>