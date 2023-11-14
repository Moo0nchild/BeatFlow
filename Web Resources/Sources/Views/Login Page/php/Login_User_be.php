<?php
include 'conection_be.php';
$emailNameUser = $_POST['email-user_be'];
$password =preg_replace('/\s+/', '', $_POST['password_be']);
// Realiza una consulta para obtener el registro del usuario
$validate_login = mysqli_query($conection, "SELECT * FROM users WHERE (Email = '$emailNameUser' OR NameUser = '$emailNameUser')");

if (mysqli_num_rows($validate_login) > 0) {
    $user = mysqli_fetch_assoc($validate_login);
    $hashedPasswordFromDatabase = $user['PasswordUser'];
    echo $hashedPasswordFromDatabase;
    if (password_verify($password,$hashedPasswordFromDatabase)) {
         header("location: ../../Home Page/Home.php");
        exit;
    } else {
        echo '
            <script>
                alert("Contraseña incorrecta. Por favor, verifique los datos introducidos .");
                window.location = "../Login.php";
            </script>
        ';       
        exit;
    }
} else {
    echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../Login.php";
        </script>
    ';
    exit;
}
?>
