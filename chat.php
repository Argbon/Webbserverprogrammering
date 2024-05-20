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
    <link rel="stylesheet" href="chat_style.css">
</head>
<body>
    <div class="nav">
        
        <div class="logo">
            <img class='logo-gif' src="3d_printing.gif" alt="PrintGif">
        </div>

        <div class="right-links">
            
            <?php 
                $id = $_SESSION['id'];
                $user_query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

                while($result = mysqli_fetch_assoc($user_query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_id = $result['Id'];
                }

                if(isset($_POST['submit'])){
                    $message = $_POST['message'];
                    $dateAdded = date("Y-m-d H:i:s");

                    mysqli_query($con, "INSERT INTO chat(username, message, datum) VALUES('$res_Uname', '$message', '$dateAdded')") or die("Error!"); 
                } 
            ?>
        
            <a href="home.php"> <button class="btn  hbtn">Home</button></a>
        </div>
    </div>

    <main>
        <div class="container">

                <div class="header">
                    <h1>Chatroom</h1>
                </div>
                
                
                
                
                
                <form action="" method="post">
                    
                    <div class="input">
                        <label for="message">Message</label>
                        <input type="text" name="message" id="message" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Send" required>
                    </div>

                </form>

                <div class="chat">
                    <?php
                    
                    $sql = "SELECT * FROM chat ORDER BY id DESC";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) { ?>
                            <p class='username'><b> <?php echo $row["username"]?> </b></p>
                            <p class='date'><b> <?php echo $row["datum"]?> </b></p>
                            <p class='message'> <?php echo $row["message"] ?> </p> <br>
                        <?php }
                    } else {
                        echo "Inga chatmeddelanden hittades";
                    }
                    
                    ?>
                </div>
        </div>
    </main>
</body>
</html>
