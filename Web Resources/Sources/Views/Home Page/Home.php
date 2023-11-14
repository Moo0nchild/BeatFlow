<?php
  $songName ="RAULIN_ROSENDO_UNO_SE_CURA";
  $ip="192.168.0.11"

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beatflow Music App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style-home.css">
    <link rel="icon" href="../../../../Assets/Icons/Beatflow_page_png2.png">
    <iframe src="../Preloader Page/Preloader.html" frameborder="0" style="width: 100%; height: 100vh; position: fixed; top: 0; left: 0; z-index: 1000;"></iframe>
  </head>
  <body>
    <section>
      <audio controls>
        <source src="http://<?php echo "{$ip}" ?>/<?php echo "{$songName}.mp3"; ?>" type="audio/mpeg">
      </audio>
      <h3>Welcome <span id="emailUser"></span></h3>
      <!-- <h3>Oops! This page is a Test</h3> -->
    </section>
    <script src="script-home.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>