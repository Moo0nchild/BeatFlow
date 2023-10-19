<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beatflow Music App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style-login.css">
    <link rel="icon" href="../../../../Assets/Icons/Beatflow_page_png2.png">
  </head>
  <body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="php/Login_User_be.php" method="POST" id="form"> <!-- Change the method and the action for the alert to work -->
                    <img class="beatflow-ico" src="../../../../Assets/Icons/Beatflow_without_background_bold.ico" alt="#">
                    <h2>Login to Continue</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" required id="email-user" name="email-user_be">
                        <label for="">Email or Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon id="icon" onclick="SeePassword()" name="eye-off-outline"></ion-icon>
                        <!-- <ion-icon  name="lock-closed-outline"></ion-icon>  -->
                        <input type="password" required id="password-user" name="password_be">
                        <label for="">Password</label>
                    </div>
                    <button id="button-submit" type="submit">Login</button>
                    <div class="register">
                        <p>Don't have a account? <a href="../Register Page/Register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="script-login.js"></script>
</body>
</html>