

<?php
    session_start();
   
    include("config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Profile</title>
</head>
<body>
    <div class="nav">
        
        <div class="logo">
            <img src="3d_printing.gif" alt="PrintGif">
        </div>

        <div class="right-links">
            <a href="home.php" > <button class="btn hbtn">Home</button></a>
            <a href="logout.php"> <button class="btn hbtn">Log out</button></a>
            <a href="chat.php"> <button class="btn hbtn">Chat</button></a>
            <a href="tutorial.php"> <button class="btn  hbtn">Tutorials</button></a>
        </div>

    </div>

    <div class="container">
        <div class="box form-box edit-form-box">
            <?php 
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];

                    $id = $_SESSION['id'];

                    $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', Age='$age' WHERE Id=$id") or die("error occurred");
                    if($edit_query){ ?>
                        <div class='message'>
                        <p>Profile Updated</p>
                        </div> <br>
                        <a href='home.php'> <button class='btn'>Go home</button> </a>
                    <?php } 
                } else{
                    $id = $_SESSION['id'];
                    $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");
                    while($result = mysqli_fetch_assoc($query)){
                        $res_Uname = $result['Username'];
                        $res_Email = $result['Email'];
                        $res_Age = $result['Age'];
                    
                }
            ?>
            <header>Edit Profile</header>
            <form action="" method="post">
                
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname;?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $res_Email;?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" value="<?php echo $res_Age;?>" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>