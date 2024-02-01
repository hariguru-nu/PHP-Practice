<?php 
    //Simple arrays
    $number_array = [43, 34, 23, 42];
    $string_array = array("hello", "world","php");

    print_r($number_array);
    //var_dump($string_array);
    //echo $string_array[0];

    //Associative array
    // $person = [
    //     "firstname" => "david",
    //     "middlename" => "adrasa",
    //     "lastname" => "akase"
    // ];

    // echo $person['firstname'];

    $person_data = [
        [
            "name" => "joge",
            "age" => 33,
            "gender" => "male",
        ],
        [
            "name" => "asrie",
            "age" => 23,
            "gender" => "female",
        ],
        [
            "name" => "kkaser",
            "age" => 53,
            "gender" => "male",
        ],
    ];

    //echo $person_data[2]["name"];
    var_dump(json_encode($person_data));

    // $t = date("H");
    // echo $t;

    // if($t < 12) {
    //     echo "Good Morning";
    // } else {
    //     echo "Good Evening";
    // }