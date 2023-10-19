<?php 
    include 'conection_be.php';
    $emailNameUser = $_POST['email-user_be'];
    $password = $_POST['password_be'];

    $validate_login= mysqli_query($conection, "SELECT * FROM users WHERE (Mail = '$emailNameUser' OR NameUser = '$emailNameUser') AND PasswordUser = '$password'");
    if(mysqli_num_rows($validate_login) > 0){
        header("location: ../../Home Page/Home.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducido");
                window.location = "../Login.php";
            </script>
        ';
        exit;
    }
?>