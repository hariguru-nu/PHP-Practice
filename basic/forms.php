<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Methods</title>
</head>
<body>
    <form action="forms.php" method="post">
        <label>X: </label></br>
        <input type="text" name="x" /></br>
        <label>Y: </label></br>
        <input type="text" name="y" /></br>
        <label>Z: </label></br>
        <input type="text" name="z" /></br>
        <input type="submit" value="total" />

    </form>
</body>
</html>

<?php 
    $x = (isset($_POST["x"]));
    $y = (isset($_POST["y"]));
    $z = (isset($_POST["z"]));
    $total = null;

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = pow($x, $y);
    // $total = sqrt($x);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    $total = rand();

    echo $total;

    // $item = "Pizza";
    // $price = "54.33";
    // $quantity = $_POST["quantity"];
    // $total = $quantity * $price;

    // echo "you have ordered an {$item}, the total price is {$total}";
?>