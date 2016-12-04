<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Fájlok feltöltése</title>
    </head>
    <body>

        <h1>Fájlok feltöltése</h1>

        <form action="fajl_feltoltes.php" method="post" enctype="multipart/form-data">
            <!--
                az "action" adja meg a vezérlő fájl nevét
                az 'enctype="multipart/form-data"' beállítása nagyon fontos
                e nélkül nem tudunk fájlokat küldeni
            -->
            Válassz ki egy képet a feltöltéshez:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>
            <input type="submit" value="Kép feltöltése" name="submit">
        </form>

        <?php
        
            
        ?>
    </body>
</html>