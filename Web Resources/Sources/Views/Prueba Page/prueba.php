<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reproductor de audio personalizado</title>
  <link rel="stylesheet" href="Style.css"> <!-- Enlazar tu archivo de estilos CSS -->
</head>
<body>
  <div class="audio-player">
    <audio id="audio" src="http://172.16.107.188/RAULIN_ROSENDO_UNO_SE_CURA.mp3"></audio>
    <div class="controls">
      <div class="playback">
        <button id="prevBtn">&#9664;</button>
        <button id="playPauseBtn">&#9658;</button>
        <button id="nextBtn">&#9654;</button>
      </div>
      <div class="progress-container">
        <div id="progress"></div>
      </div>
      <div class="time">
        <span id="currentTime">0:00</span> / <span id="duration">0:00</span>
      </div>
      <input type="range" id="volume" min="0" max="1" step="0.1" value="1">
    </div>
  </div>

  <script src="https://unpkg.com/howler@2.2.3/dist/howler.min.js"></script>
  <script src="Script.js"></script> <!-- Tu archivo de script JavaScript -->
</body>
</html>
