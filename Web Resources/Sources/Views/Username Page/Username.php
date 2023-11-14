<?php
// Verifica si se han enviado los datos desde la página 1
if (isset($_GET['email']) && isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year']) && isset($_GET['password'])) {
    $email = $_GET['email'];
    $day = $_GET['day'];
    $month = $_GET['month'];
    $year = $_GET['year'];
    $password = $_GET['password'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beatflow Music App</title>
    <link rel="stylesheet" href="style-username.css">
    <link rel="icon" href="../../../../Assets/Icons/Beatflow_page_png2.png">
    <iframe src="../Preloader Page/Preloader.html" frameborder="0" style="width: 100%; height: 100vh; position: fixed; top: 0; left: 0; z-index: 1000;"></iframe>
</head>
<body>
    <section>
        <div class="container">
            <h2 class="title">Profile Details</h2>
            <div class="hero">
                <label for="input-file" id="drop-area">
                    
                    <div id="img-view">
                        <img src="../../../../Assets/All/508-icon.png">
                        <p>Drag and drop or click here <br>to upload image</p>
                        <span>Upload any images from desktop</span>
                    </div>
                </label>
            </div>
            <form method="post" action="php/Register_User_be.php" id="form"  enctype="multipart/form-data">
                <input   type="hidden"  name="email_be" value ="<?php echo $email; ?> " required>
                <input   type="hidden" name="password_be" value ="<?php echo $password; ?>" required>
                <input   type="hidden" name="day_be" value ="<?php echo $day; ?>" required>
                <input   type="hidden" name="month_be" value ="<?php echo $month; ?>" required>    
                <input   type="hidden"  name="year_be" value ="<?php echo $year; ?>"  required>
                <input   class="inputbox" type="text" placeholder="Username" name= "username_be" >
                <input   type="file" accept="image/*" id="input-file" hidden  name="image">
                <button type="submit">Save</button>
            </form>
        </div>
    </section>
</body>
<script src="script-username.js"></script>
</html>
<?php


