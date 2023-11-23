<?php
    include '../../login Page/php/conection_be.php';

    $album = $_POST['album'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];
    $releaseDate = $_POST['release_date'];
    $title = $_POST['title'];
    $songURL = $_POST['song_url'];
 
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageTmpName = $_FILES['image']['tmp_name'];
        $songImage = file_get_contents($imageTmpName);
    } else {
        $songImage = ''; 
    }


    $check_song_query = "SELECT * FROM songs WHERE SongURL='$songURL'   or Title='$title'";
    $result = $conection->query($check_song_query);
    if (mysqli_num_rows($result) > 0) {
        echo '
        <script>
            alert("Ups, parece que el nombre de la canción o la URL ya están en uso. .");
            window.location = "../index.html";
        </script>
        ';
    } else {
        $check_song_cout_query = "SELECT COUNT(*) FROM songs";
        $resultCount = $conection->query($check_song_cout_query);
        $row = $resultCount->fetch_row();
        $idSong = $row[0] + 1;

        $query = "INSERT INTO songs (Song_id, Title, Artist, Album, ReleaseYear, Genre, SongURL, songImage) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conection->prepare($query);
        $stmt->bind_param("isssssss", $idSong, $title, $artist, $album, $releaseDate, $genre, $songURL, $songImage);

        $result = $stmt->execute();

        if ($result) {
            echo '
            <script>
                alert("la cancion fue registrada de manera exitosa .");
                window.location = "../index.html";
            </script>
            ';
        } else {
            echo 'Error en el registro: ' . $stmt->error;
        }

        $stmt->close();
    }
?>