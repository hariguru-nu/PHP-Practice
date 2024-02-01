<?php 
    $products = ["kids", "mens", "womens", "stioanry"];

    // Get length
    echo count($products);
    echo "<br>";

    // Search array
    var_dump(in_array("kidss", $products));
    echo "<br>";

    // Add in array
    $products[] = "accessories";
    print_r($products);
    echo "<br>";

    // Another way to pushing into array
    array_push($products, 'mobiles');
    print_r($products);
    echo "<br>";

    // Adding a value into first in the array
    array_unshift($products, "groceries");
    print_r($products);
    echo "<br>";

    // Remove value in array
    array_pop($products);
    print_r($products);
    echo "<br>";

    // Remove first value in array
    array_shift($products);
    print_r($products);
    echo "<br>";

    // Remvove specific value in array
    // unset($products[2]);
    // print_r($products);
    // echo "<br>";

    // Split into 2chunks in a array
    $chunked_array = array_chunk($products, 2);
    // print_r($chunked_array);
    echo json_encode($chunked_array);
    echo "<br>";

    //Merge two arrays
    $arr1 = ["jaoi", "ajas", "aksa"];
    $arr2 = ["snaka", "veaer", "fetes"];

    $arr_merger = array_merge($arr1, $arr2);
    print_r($arr_merger);
    echo "<br>";

    $arr_merger = [...$arr1, ...$arr2];
    print_r($arr_merger);
    echo "<br>";

    // Array combine
    $array2 = ["kids", "mens", "womens"];
    $array4 = ["shoes", "clothing", "chudi"];

    $arrays = array_combine($array2, $array4);
    print_r($arrays);
    echo "<br>";

    // USING kEYS
    $keys = array_keys($arrays);
    print_r($keys);
    echo "<br>";

    // Using flipped
    $filp = array_flip($arrays);
    print_r($filp);
    echo "<br>";

    // Using Map function
    $numbers = range(1, 20);
    print_r($numbers);
    echo "<br>";
    
    $newNumbers = array_map(function($number) {
        return "Number ${number}";
    }, $numbers);

    print_r($newNumbers);
    echo "<br>";

    $lessthan10 = array_filter($numbers, fn($number) => 
       $number <=10
    );

    print_r($lessthan10);
    echo "<br>";

    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    print_r($sum);

