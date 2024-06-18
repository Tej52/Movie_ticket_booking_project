<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<!-- <meta http-equiv="refresh" content="1"> -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/signup.css">
</head>
<body>
    <form action="login.php" autocomplete="off" method="post" >
    <div class="box">
        <h1 class="login" >Sign up</h1>

        <label>E-mail : <input class="name" type="text" name="name" placeholder="(e.g : Rahul123@gmail.com )" minlength="5" required></input></label>
        
        <label>Phone-no : <input class="name" type="number" name="phno" required></input></label>
        
        <label>Password : <input type="text" name="pass"  required></input></label>
        
        <label>Confirm Password : <input type="text" name="confirm-pass" required></input></label> <br>

        <?php
            $pass = filter_input(INPUT_POST,"pass",FILTER_SANITIZE_SPECIAL_CHARS);
            $confirmpass = filter_input(INPUT_POST,"confirm-pass",FILTER_SANITIZE_SPECIAL_CHARS);
            
                    if ($_SERVER["REQUEST_METHOD"] == "POST"  ){
                        if ( $pass !== $confirmpass ) echo "<h6>Password doesn't matched</h6>";
                }
                
                ?>

        <a href="login.php">I Already have an Account</a>
        
        <button class="btn" type="submit" name="submit" >SUBMIT</button>

    </div>
    </form>
    
</body>
</html>

<?php
    // mysqli_close($conn);
?>