 <?php
include '../../login Page/php/conection_be.php';

$email = $_POST['email_be'];
$day = (int)$_POST['day_be'];
$month = (int)$_POST['month_be'];
$year =(int)$_POST['year_be'];
$password = $_POST['password_be'];
$userName = $_POST['username_be'];
$img=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$birthdate = "$year-$month-$day";

$check_username_query = "SELECT * FROM users WHERE NameUser='$userName' LIMIT 1";
$result = $conection->query($check_username_query);
if (mysqli_num_rows($result) > 0) {
    echo 'El nombre de usuario ya está en uso.';
} else {
    $query = "INSERT INTO users (birthdate,Mail,NameUser, PasswordUser,ImageUser) VALUES ('$birthdate','$email', '$userName', '$password', '$img')";
    $result=$conection->query($query);
    if ($result) {
        echo 'Registro exitoso.';
    } else {
        echo 'Error en el registro: ' . mysqli_error($conection);
    }
}
?> 

