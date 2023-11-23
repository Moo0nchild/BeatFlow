 <?php
include '../../login Page/php/conection_be.php';

$email = $_POST['email_be'];
$day = (int)$_POST['day_be'];
$month = (int)$_POST['month_be'];
$year =(int)$_POST['year_be'];
$password =preg_replace('/\s+/', '', $_POST['password_be']);
$hashPassword = password_hash($password, PASSWORD_DEFAULT);
$userName = $_POST['username_be'];
if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
} else {
    $img = NULL;
}
$birthdate = "$year-$month-$day";
$numeroAleatorio = mt_rand(1, 1000);
$UUID =$numeroAleatorio;
$check_username_query = "SELECT * FROM users WHERE NameUser='$userName' LIMIT 1";
$result = $conection->query($check_username_query);
if (mysqli_num_rows($result) > 0) {
    echo 'El nombre de usuario ya está en uso.';
} else {
    $query = "INSERT INTO users (birthdate,Email,NameUser,PasswordUser,ProfilePicture,UUID) VALUES ('$birthdate','$email', '$userName', '$hashPassword', '$img','$UUID')";
    $result=$conection->query($query);
    if ($result) {
        header("location: ../../Home Page/Home.php?userName=".urldecode($userName));
        exit();
    } else {
        echo 'Error en el registro: ' . mysqli_error($conection);
    }
}
?> 

