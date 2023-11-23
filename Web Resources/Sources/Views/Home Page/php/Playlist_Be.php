<?php
include '../../login Page/php/conection_be.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $playlistName = $_POST['namePlaylist'];
   $userName = $_POST['userName'];
   $description = $_POST['description'];
   $currentDate  = date('y-m-d');
   $query = "INSERT INTO playlists (CreationDate, Description, NameUser,PlaylistName,Status) VALUES ('$currentDate', '$description', '$userName', '$playlistName','1')";
   $result = $conection->query($query);
   if ($result) {
        echo 'Playlist creada';
        exit();
    } else {
        echo 'Error en el registro: ' . mysqli_error($conection);
    }
}
?>
