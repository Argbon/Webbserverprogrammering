
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
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        
        <div class="logo">
            <img src="3d_printing.gif" alt="PrintGif">
        </div>

        <div class="right-links">
            
            <?php 
                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_id = $result['Id'];
                }
            ?>
        
            <a href="edit.php" > <button class="btn  hbtn">Profile</button></a>
            <a href="logout.php"> <button class="btn  hbtn">Logout</button></a>
            <a href="chat.php"> <button class="btn  hbtn">Chat</button></a>
            <a href="tutorial.php"> <button class="btn  hbtn">Tutorials</button></a>
        </div>
    </div>
    <main>

        <div class="main-box top">

            <div class="top">
                <div class="box">
                   <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p> 
                </div>
            
                <div class="box">
                    <p>Your email is <b><?php echo $res_Email ?></b>.</p> 
                </div>
            </div>

            <div class="bottom">
                <div class="box">
                    <p>And you are <b><?php echo $res_Age ?></b> years old.</p>
                </div>
            </div>

        </div>

    </main>
</body>
</html>
