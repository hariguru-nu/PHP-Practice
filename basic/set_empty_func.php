<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validate</title>
</head>
<body>
    <form action="set_empty_func.php" method="post" >
        <label>Username : </label></br>
        <input type="text" name="username" /></br>
        <label>Password : </label></br>
        <input type="text" name="password" /></br>
        <input type="submit" name="login" value="Submit" />
    </form>
</body>
</html>
<?php 
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) {
            echo "Username is missing";
        } elseif (empty($password)) {
            echo "Password is missing";
        } else {
            echo "hello {$username}";
        }
    }
?>

<!-- <?php 
    // isset() => Retruns TRUE if a variable is declared and not null;
    // empty() => Returns TRUE if a variable is not declared, false, null, "";

    // $username = "data";
    // echo isset($username);

    // if (isset($username)) {
    //     echo "This variable is set";
    // } else {
    //     echo "This variable is not set";
    // }

    // Using empty function 
    // $username = "ajajas";
    // echo empty($username);

    // if(empty($username)) {
    //     echo "This variable is empty";
    // } else {
    //     echo "This variable is not empty";
    // }
?> -->