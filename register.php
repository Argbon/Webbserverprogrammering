<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php
        include("config.php");
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            //Verifiera så att email är unik
            $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
            if(mysqli_num_rows($verify_query) != 0): ?>
                <div class='badmessage'>
                        <p>This email is used, try another</p>
                        </div> <br>
                <a href='javascript:self.history.back()'> <button class='btn'>Go back</button> </a>
            
            <?php else: 
                mysqli_query($con, "INSERT INTO users(Username,Email,Age,Password) VALUES('$username', '$email', '$age', '$password_hash')") or die("Error!"); ?>
                <div class='message'>
                        <p>Registration successfull</p>
                      </div> <br>
                <a href='index.php'> <button class='btn'>Login now!</button> </a>
            <?php endif; 
        }
        
        
        else{ 
        ?>
            <header>Sign Up</header>
            <form action="" method="post">
                
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>

                <div class="links">
                    Already have an account? <a href="index.php">Login!</a>
                </div>

            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>
