<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beatflow Music App</title>
    <link rel="stylesheet" href="style-register.css">
    <link rel="icon" href="../../../../Assets/Icons/Beatflow_page_png2.png">
</head>
<body>
    <section>
        <div class="container">
            <img id="img" class="beatflow-ico" src="../../../../Assets/Icons/Beatflow_without_background_bold.ico" alt="#">
            <h2>Register</h2>
            <form method="post" action="../Username Page/Username.php" id="form">
                <input id="email" class="inputbox" type="text" placeholder="Email" name="email_be" required>
                <input id="password" class="inputbox" type="password" placeholder="Password" name="password_be" required>
                <div>
                    <label class="date-of-birth" for="">Date of Birth:</label>
                </div>
                <input id="inputbox-day" class="inputbox-date" type="number" placeholder="Day" name="day_be" required>
                <input id="inputbox-month" class="inputbox-date" type="number" placeholder="Month"name="month_be" required>    
                <input id="inputbox-year" class="inputbox-date" type="number" placeholder="Year" name="year_be" required>
                <div class="terms">
                    <label for=""><input type="checkbox" required>I agree to <a href="../Terms, Conditions & Privacy Policy/Terms and Conditions/Terms.html">Beatflow's term & conditions</a> and <a href="../Terms, Conditions & Privacy Policy/Privacy Policy/Privacy.html">privacy policy</a></label>
                </div>
                <button type="submit">Register</button>
                <div class="login">
                    <p>You already have an account? <a href="../Login Page/Login.php">Login</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
<script src="script-register.js"></script>
</html>