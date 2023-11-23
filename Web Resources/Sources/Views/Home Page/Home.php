<?php
include '../login Page/php/conection_be.php';

  if (isset($_GET['userName'])) {
    $userName = $_GET['userName'];
    $validate = mysqli_query($conection, "SELECT * FROM users WHERE  NameUser = '$userName'");
    $user = mysqli_fetch_assoc($validate);
    $img = $user['ProfilePicture'];
    $id= $user['UUID'];
    echo "<script> const userName = '$userName'; </script>";
  }
  
  $songName1 ="FlorPalida";
  $songName2 ="MeHaceDañoVerte";
  $songName3 ="PropuestaIndecente";
  $songName4 ="TuEresLaReina";
  $ip="172.16.100.236";
  $audioURL1 = "http://" . $ip . "/" . $songName1 . ".mp3";
  $audioURL2 = "http://" . $ip . "/" . $songName2 . ".mp3";
  $audioURL3 = "http://" . $ip . "/" . $songName3 . ".mp3";
  $audioURL4 = "http://" . $ip . "/" . $songName4 . ".mp3";
  $querySong = mysqli_query($conection, "SELECT * FROM songs");
  $song = mysqli_fetch_assoc($querySong);

  echo "<script> const audioURL1 = '$audioURL1'; </script>";
  echo "<script> const audioURL2 = '$audioURL2'; </script>";
  echo "<script> const audioURL3 = '$audioURL3'; </script>";
  echo "<script> const audioURL4 = '$audioURL4'; </script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beatflow Music App</title>
    <link rel="stylesheet" href="style-home.css">
    <link rel="icon" href="../../../../Assets/Icons/Beatflow_page_png2.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <!-- <iframe src="../Preloader Page/Preloader.html" frameborder="0" style="width: 100%; height: 100vh; position: fixed; top: 0; left: 0; z-index: 1000;"></iframe> -->
</head>
<body>
    <div class="sidebar"> <!-- Close -->
        <div class="logo-details">
            <i class='bx bxl-deezer'></i>
            <span class="logo-name">Beatflow</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="">
                    <i class='bx bxs-playlist' ></i>
                    <span class="link_name" >Favorite</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Search</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="">
                        <i class='bx bxs-collection' ></i>
                        <span class="link_name">Search</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Search</a>
                    <li><a href="#">Songs</a></li>
                    <li><a href="#">Artirts</a></li>
                    <li><a href="#">Genre</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="">
                        <i class='bx bx-bookmark-heart' ></i>
                        <span class="link_name">My Playlist</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">My Playlist</a></li>
                    <li><a href="#" id="createPlaylist">New Playlist</a></li>
                    <li><a href="#">Mi musica</a></li>
                    <li><a href="#">Latina</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                   <div class="profile-content">
                          <?php
                          if ($img !== null) {
                              echo "<img src='data:image/png;base64," . base64_encode($img) . "' alt='ProfilePicture'>";
                          } else {
                              echo '';
                          }
                          ?>
                      </div>
                    <div class="name-job">
                        <div class="profile_name"><?php echo $userName ?></div>
                        <div class="job"><?php echo $id ?></div>
                    </div>
                    <i class='bx bx-log-out' id="exit"></i>
                </div>
            <li>
    </ul>
    </div> 

    <section class="class1">
    <div class="centerbox1">
            <div class="centerbox2">
                <h3>Playlist</h3>
            </div>
            <div class="centerbox3">
                <h3>Canciones</h3>
                <div class="contenedor-musica">
                    <ul>
                        <li class="musica">
                            <a href="#" id="play" class="btn play-music"><i class="far fa-play-circle"></i></a>
                            <h3>Marc Antony</h3> 
                            <h3 class="name" id="name">Flor Palida</h3> 
                            <h3 class="time">0:00</h3>
                        </li>
                        <li class="musica">
                            <a href="#" id="play2" class="btn play-music"><i class="far fa-play-circle"></i></a>
                            <h3>Fresto Music</h3> 
                            <h3 class="name" id="name">Me Hace Daño Verte</h3> 
                            <h3 class="time">0:00</h3>
                        </li>
                        <li class="musica">
                            <a href="#" id="play3" class="btn play-music"><i class="far fa-play-circle"></i></a>
                            <h3>Romeo Santos</h3> 
                            <h3 class="name" id="name">Propuesta Indecente</h3> 
                            <h3 class="time">0:00</h3>
                        </li>
                        <li class="musica">
                            <a href="#" id="play4" class="btn play-music"><i class="far fa-play-circle"></i></a>
                            <h3>Diomedes Diaz</h3> 
                            <h3 class="name" id="name">Tu eres la Reina</h3> 
                            <h3 class="time">0:00</h3>
                        </li>
                        <?php
                            while ($song = mysqli_fetch_assoc($querySong)) {
                              echo '<li class="musica">';
                              echo '<a href="#" class="btn play-music"><i class="far fa-play-circle"></i></a>';
                              echo '<h3>' . $song['Artist'] . '</h3>'; 
                              echo '<h3 class="name">' . $song['Title'] . '</h3>'; 
                              echo '</li>';
                            }
                          ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="music-player-container">
            <div class="song-cover-container">
                <img class="song-cover" src="../../../../Assets/Music Player/Covers/Ozuna Ft JhayCo -  FENTI (Cover).png" alt="#"> <!-- Cover de la Cancion -->
            </div>
            <div class="title-music-container">
                <h4 class="song-title">Flor Palida</h4> <!-- Titulo de la cancion -->
                <span class="song-author">Marc Antony</span> <!-- Artista de la cancion -->
            </div>
            <div class="controls-music-container">
                <div class="progress-song-container">
                    <div class="progress-bar">
                        <span class="progress"></span>
                    </div>
                </div>
                <div class="time-container">
                    <span class="time-left" id="currentSongTime"></span>
                    <span class="time-left" id="songLength"></span>
                </div>
            </div>
            <audio controls preload="metadata"  id="reproductor" src= ""></audio>
            <div class="main-song-controls">
                <img src="../../../../Assets/Music Player/SVG/Backward.svg" alt="" class="icon" id="Back10">
                <img src="../../../../Assets/Music Player/SVG/Play.svg" alt="" class="icon" id="PlayPause">
                <img src="../../../../Assets/Music Player/SVG/Forward.svg" alt="" class="icon" id="Plus10">
            </div>
        </div> 
    </section>
    <script src="script-home.js"></script>
</body>
</html>
