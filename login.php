<?php
    //include("database.php");
    // echo $conn;
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <form action="booking.php" autocomplete="off" method="post" >
        <div class="box">
        <h1 class="login" >Login</h1>

        <label>E-mail : <input class="name" type="text" name="name" title="Enter the E-mail" placeholder="(e.g : Rahul123@gmail.com )" minlength="5" required></input></label> <br>
        
        <label>Password : <input type="text" name="pass" minlength="3" ></input></label> <br>

        <a href="signup.php">Create Account</a>
        
        <button class="btn" type="submit" name="submit" >SUBMIT</button>
    </div>
    </form>
    
</body>
</html>

<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);

        $userpassword = filter_input(INPUT_POST,"pass",FILTER_SANITIZE_SPECIAL_CHARS);

// echo $username;
// echo $userpassword;

            $sql = "INSERT INTO login(name,password) VALUES ('$username','$userpassword')";
            // try{
                mysqli_query($conn,$sql);
                echo "Successful";
            // }
            // catch(mysqli_sql_exception){
            //     // echo "<h3>Error...</h3>";
            // }

        
    }

    mysqli_close($conn);
?>
