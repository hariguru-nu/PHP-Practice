<?php 
    // Superglobals are built-in variables that are always available in all scopes
    // var_dump($_SERVER);

    if(isset($_GET['submit'])) {
        echo $_GET['name'];
        echo $_GET['age'];
    }
    
?>

<a href="<?php echo $_SERVER['PHP_SELF']?>?name=sakki&age=26">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" name="submit" value="Submit">
</form>