<?php
    //if submit button is pressed
    if(isset($_POST["submit"])){
        //capturing the users data
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $message=$_POST['message'];
        echo "<h3>You information is as follows</h3><br>";
        echo "Username = $user <br>";
        echo "password = $pass <br>";
        echo "Email = $email <br>";
        echo "Gender = $gender <br>";
        echo "Course = ";
        foreach($_POST['course'] as $course)
        {
            echo "$course ";
        }
        echo "<br>";
        echo "City = $city <br>";
        echo "MEssage = $message <br>";    
    }
    else{
        header("Location:register.php");

    }
    ?>