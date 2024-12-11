<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['cpass'])) {
        die("Please fill all required fields!");
    }
    if ($_POST['pass'] != $_POST['cpass']) {
        die('Password and confirm password should match');
    } else {
        die("Registration Successful");
    }
}
?>

<html>
<body>
<h1>Registration form</h1>
<form action="" method="POST">
    Username: <input type="text" name="username"><br><br>
    Email: <input type="text" name="email"><br><br>
    Password: <input type="password" name="pass"><br><br>
    Confirm Password: <input type="password" name="cpass"><br><br>
    <input type="submit" name="Register">
</form>
</body>
</html>
