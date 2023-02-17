<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form method="POST" name="register" action="registerprocess.php" enctype="multipart/form-data">
        <feildset>
            <legend>Register</legend>
            <input type="text" name="username" placeholder="Username" ><br>
            <input type="password" name="password" placeholder="Password" ><br>
            <input type="email" name="email" placeholder="you@domain.com" ><br>
            <input type="radio" name="gender" value="Male" checked>Male
            <input type="radio" name="gender" value="Female" >Female
            <input type="radio" name="gender" value="Other" >Other<Br>
            <input type="checkbox" name="course[]" value="PHP">PHP
            <input type="checkbox" name="course[]" value="Java">Java
            <input type="checkbox" name="course[]" value="ASP">ASP
            <br>
            <select size="1" name="city">
                <option value="ktm">Kathmandu</option>
                <option value="lpt">Lalitpur</option>
                <option value="bkt">Bhaktapur</option>
                <option value="oth">Others</option>
            </select>
            <br>
            <textarea name="message" rows="5" cols="50">
            </textarea>
            <br>



            <input type="submit" name="submit" value="Register">
        </fieldset>
    </form>
    
</body>
</html>