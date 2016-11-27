<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Változók</title>
    </head>
    <body>
        <?php
            echo "<h1>Változó típusok</h1>";

            // BOOLEAN típusú változó
            echo "<strong>BOOLEAN típusú változó:</strong><br>";
            $true = true;       // egy boolean típusú változó felvétele
            echo $true."<br>";  // a változó kiírása, a kimenete "1" lesz
            $false = false;     // egy boolean típusú változó felvétele
            echo $false;        // a változó kiírása, a kimenete "semmi" lesz, mert a "0"-át nem jeleníti meg

            echo "<br>";

            // INTEGER típusú változó
            echo "<strong>INTEGER típusú változó:</strong><br>";
            $a = 56;
            $b = 125;
            echo $a + $b ."<br>";

            echo "<br>";

            // STRING típusú változó
            echo "<strong>STRING típusú változó:</strong><br>";
            $str = 'Ez egy szöveg';         // Így nem értelmezi az idézőjelek közötti részt
            $str = $str.', kibővítve';
            $s1 = 'kibővített';
            $str1 = "Ez egy $s1 szöveg";    // Így értelmezi az idézőjelek közötti részt
            echo $str."<br>";
            echo $str1;
            echo "";
        ?>
    </body>
</html>