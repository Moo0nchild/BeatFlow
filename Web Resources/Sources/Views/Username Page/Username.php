<?php
// Verifica si se han enviado los datos desde la página 1
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos de la página 1
    $email = $_POST['email_be'];
    $day = $_POST['day_be'];
    $month = $_POST['month_be'];
    $year = $_POST['year_be'];
    $password = $_POST['password_be'];
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
                <input   type="hidden" name="password_be" value ="<?php echo $password; ?> " required>
                <input   type="hidden" name="day_be" value ="<?php echo $day; ?> " required>
                <input   type="hidden" name="month_be" value ="<?php echo $month; ?> " required>    
                <input   type="hidden"  name="year_be" value ="<?php echo $year; ?> "  required>
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


