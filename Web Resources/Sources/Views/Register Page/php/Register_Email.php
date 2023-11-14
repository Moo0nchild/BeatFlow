<?php
include '../../login Page/php/conection_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos de la página 1
    $email = $_POST['email_be'];
    $day = $_POST['day_be'];
    $month = $_POST['month_be'];
    $year = $_POST['year_be'];
    $password = $_POST['password_be'];
}
    $check_Email_query = "SELECT * FROM users WHERE Email='$email' LIMIT 1";
    $result = $conection->query($check_Email_query);
    if (mysqli_num_rows($result) > 0) {
        echo '
        <script>
            alert("Email ya esta en uso, por favor ingrese otro .");
            window.location = "../Register.php";
        </script>
    ';
    } else {
        header("Location: ../../Username Page/Username.php?email=" . urlencode($email));
        header("Location: ../../Username Page/Username.php?day=" . urlencode($day));
        header("Location: ../../Username Page/Username.php?month=" . urlencode($month));
        header("Location: ../../Username Page/Username.php?year=" . urlencode($year));
        header("Location: ../../Username Page/Username.php?password=" . urlencode($password));
    }

?> 