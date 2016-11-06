<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Függvények és névterek</title>
    </head>
    <body>
        <?php
            // Függvények részletesen
      
            echo "<strong>FÜGGVÉNYEK részletesen</strong><br>";

            /* NÉVTÉR:
            * Az a rész a kódban,
            * ahonnan a változó látható iletve elérhető
            */

            echo "<br>";
            // Változók láthatósága
            echo "VÁLTOZÓK láthatósága<br>";
            $valtozo = 5; // Egy változó létrehozása a Fő névtérben (Globális változó)
            function lathatosag() { 
                echo $valtozo;
            }
            lathatosag();
 
        ?>
    </body>
</html>