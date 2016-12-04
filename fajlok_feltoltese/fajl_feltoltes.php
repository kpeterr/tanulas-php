<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "A fájl egy kép!<br>";
        $uploadOk = 1;
    } else {
        echo "<strong>A fájl nem kép, kérlek válassz másik fájlt!</strong><br>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Bocsi, de a fájl már létezik!<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Bocsi, de a fájl mérete túl nagy, kérlek válassz kisebb fájlt!<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Bocsi, de csak JPG, JPEG, PNG és GIF fájlokat tölthetsz fel.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Bocsi, de a fájlod nem töltődött fel!<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "A fájl feltöltődött a következő néven: <code><strong>". basename( $_FILES["fileToUpload"]["name"]). "</strong></code>.<br>";
        echo "A fájl típusa: " . $_FILES["fileToUpload"]["type"] . "<br>" ;
        echo "A fájl mérete: " . ($_FILES["fileToUpload"]["size"] / 1024) . " kB<br>";
    } else {
        echo "Bocsi, de valami hiba történt a feltöltés közben!<br>";
    }
}
?>