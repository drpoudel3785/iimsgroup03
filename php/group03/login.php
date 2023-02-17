<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    //if submit button is pressed
    if(isset($_POST["submit"])){
        //capturing the users data
        $user=$_POST['username'];
        $pass=$_POST['password'];

        if($user=="admin" && $pass=="admin"){
            header("Location:welcome.php");
        }
        else{
            echo "Invalid Credentials";
        }
    }
    ?>
    <form method="POST" name="login" action="" enctype="multipart/form-data">
        <feildset>
            <legend>Login</legend>
            <input type="text" name="username" placeholder="Username" ><br>
            <input type="password" name="password" placeholder="Password" ><br>
            <input type="submit" name="submit" value="Login">
        </fieldset>
    </form>
    
</body>
</html>