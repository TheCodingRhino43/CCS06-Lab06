<?php
$name = $argv[1];
$birth_year = $argv[2];
$age = date("Y") - $birth_year;


echo "Your name is " . $name . " and your age is " . $age . ".\n";


if ($age >= 18) {
    echo "You are a voter. \n";
    if ($age >= 60){
        echo "The age checks out: you're a senior citizen, and you aren't eligible for voting. \n" ;
    } else {
        echo "The age checks out: you're still eligible for voting. \n";
    }
} else {
    echo "You are not a voter. \n";
}
?>
