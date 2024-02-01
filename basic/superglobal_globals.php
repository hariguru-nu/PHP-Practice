<?php 
    function test() {
        $foo = "Local variable";

        echo '$foo in global scope : ' . $GLOBALS['foo'] ."<br>";
        echo '$foo in local scope : ' .$foo ."<br>";
    }

    $foo = "test";
    test();
?>


$variable_name = value;