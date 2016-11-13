<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Állandók (constants) és fájlok beszúrása (include, require)</title>
    </head>
    <body>
        <?php
            echo "<h1>Állandók (constants) és fájlok beszúrása (include-require)</h1>";

            /*
            * Az Állandók olyan memóriaterületek,
            * illetve olyan dolgok a PHP-ban,
            * amelyek tartalmát nem lehet megváltoztatni.
            * Így az értéküket csak egyszer lehet beállítani
            * és utána már nem lehet megváltoztatni!
            * Bárhol elérhetőek!!!
            */ 

            // Állandó definiálása:
            define('PATH', dirname(__FILE__));
            // A "dirname()" egy előre beállított függvény,
            // amely azt a könyvtárt adja vissza,
            // ahol az a fájl található, amin éppen dolgozunk.
            // A "__FILE__" határozza meg a bekért fájl
            // elérési útját, amely a gyökérkönyvtárra utal.

            echo PATH."<br>"; // Kiírja a könyvtárat.
            echo __FILE__; // Ez pedig a fájlnevet írja ki.

            echo "<hr>";

            /*
            ** Fájlok beszúrása:
            * Mivel valószínűleg nagy projekteket
            * fogunk készíteni, ezért célszerű
            * több fájlban megírni a különböző részeit
            * és ezekre hivatkozni.
            */

            /*
            * Teljes elérési út gyorsítja a PHP működését,
            * ha nem kell a relatív elérési utakat
            * kiszámolni a rendszernek.
            * Ezért célszerű teljes elérési utakat használni:
            * include PATH.'/beszurasok/fuggvenyek.php';
            */
            
            

            include 'beszurasok/fuggvenyek.php';
            /*
            * Innentől kezdve úgy működik,
            * minta a fuggvenyek.php fájl tartalma is
            * a része lenne ennek a fájlnak.
            * Amennyiben pl. rossz elérést adunk meg,
            * a PHP tovább fut, csak figyelmeztetést ad
            */

            //----------------FONTOS-------------------
            // require 'beszurasok/fuggvenyek.php';
            /*
            ** Viszont, ha "require"-rel hivjuk meg a fájlt
            ** és valamit elszúrtunk (rossz elérési út),
            ** akkor végzetes hibát ír ki és leáll a működés.
            */
            //----------------FONTOS-------------------

            kiiras('Hello World!'); // A beszúrás nélkül ez a függvény nem működik!


        ?>
    </body>
</html>