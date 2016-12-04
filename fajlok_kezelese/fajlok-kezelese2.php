<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Fájlok kezelése 2</title>
    </head>
    <body>

        <h1>Fájlok kezelése 2</h1>

        <?php
            echo "<strong><code>scandir()</code> függvény használata:</strong><br>";
            // Megviszgálja az adott mappát és
            // kilistázza az abban található fájlok nevét

            $dir    = 'files';
            $files1 = scandir($dir);
            // $files2 = scandir($dir, 1); // Az 1-es számmal visszafelés listázza ki a mappa tartalmát

            echo "<pre>";
            print_r($files1);
            echo "</pre>";
            // echo "<pre>";
            // print_r($files2);
            // echo "</pre>";

            echo "<hr>";

            echo "<strong><code>rename()</code> függvény használata:</strong><br>";

            //rename("files/file.php", "files/file.txt");
            
            //listazo("files");

            // Kilistázó függvény:
            function listazo($eleresiut) {
                $dir    = $eleresiut;
                $files = scandir($dir);

                echo "<pre>";
                print_r($files);
                echo "</pre>";
            }

            echo "<hr>";

            echo "<strong><code>unlink()</code> függvény használata:</strong><br>";
            // Fájlt lehet vele törölni

            //unlink('files/pages.html');

            //listazo("files");

            echo "<hr>";

            echo "<strong><code>copy()</code> függvény használata:</strong><br>";
            // Másolni lehet vele fájlokat

            $fajl = 'files/pages.html';
            $ujfajl = 'files/pages2.html';

            if (!copy($fajl, $ujfajl)) {
                echo "A másolás nem sikerült...<br>";
            } else {
                listazo("files");
            }

            

        ?>
    </body>
</html>