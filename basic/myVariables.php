<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables in PHP</title>
</head>
<body>
    <h1>Variables in PHP</h1>
    <!-- creating a variable -->
    <?php
        $name="Harish";
        var_dump($name);
        echo "<br>";

        $speed=502.3233;
        var_dump($speed);
        echo "<br>";

        // cast to integer
        $newSpeed = (integer) $speed;
        echo $newSpeed;
        echo "<br>";

        // To check whether the data type is correct or not
        $dataType = "hello world";
        echo is_string($dataType);
        echo "<br>";

        //concat using . notation
        $datas = 24.34;
        echo "the values is : " .is_string($datas);
        echo "<br>";

        //another way to find data types
        $type = "akads";
        echo gettype($type);
        echo "<br>";

        //using a variable common for all the files using define 
        define("program", "PHP");
        define("version", "8.2");

        echo "Welcome to " .program ." version (" .version.")" ;
    ?>
    <h3>The name is <?php echo $name ?>

</body>
</html>