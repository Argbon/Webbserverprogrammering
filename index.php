
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            
            <?php
                include("config.php");
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);
                    
                    // Hämta användare från databasen baserat på e-postadressen
                    $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email'") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);
                
                    // Kontrollera om en användare hittades och om lösenordet är korrekt
                    if($row && password_verify($password, $row['Password'])) {
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['id'] = $row['Id'];
                        
                        // Vid lyckad inloggning, omdirigera användaren till startsidan
                        header("Location: home.php");
                        exit;
                    } else { ?>
                        <div class='badmessage'>
                            <p>Wrong Username or Password</p>
                        </div>
                        <br>
                        <a href='index.php'><button class='btn'>Go back</button></a>
                    <?php }

                    if(isset($_SESSION['valid'])){
                        header("Location: home.php");
                        exit;
                    }

                }else{
            ?>


            <header>Login</header>
            <form action="" method="post">
                
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>

                <div class="links">
                    Don't have an account? <a href="register.php">Sign up now!</a>
                </div>

            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>
