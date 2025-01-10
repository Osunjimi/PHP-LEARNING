<?php
echo "Hello World!";
echo "<br>";
ECHO "Hello World!";
echo "<br>";
EcHo "Hello world!";
echo "<br>";
print "Welcome";
echo "<br>";
print_r("Hello World");
echo "<br>";
var_dump("Hello World");
echo "<br>";

//php variable: Are like a container used to store data
//ways of declaring a variable
//using th dollar sign
$greeting = 'I don come oo';
echo $greeting;
echo "<br>";
echo phpversion();
echo "<br>";

//defining a constant
const name = 'bola';
echo name;
echo "<br>";
//another way to define a constant is using the "define()" which takes two parameter
define("school","LAUTECH");
echo school;


echo "<br>";
//string is a series of character that is enclosed in a single or double quote
$fname = "Adetunji";
echo $fname;
echo "<br>";

// $strlen() is an operation that tells us the length of a string
$stringLength = strlen($fname); 
echo $stringLength; //or

echo "<br>";
echo strlen($greeting);


echo "<br>";
//to reverse a string
echo strrev($fname);


echo "<br>";
//to check the position of a string
echo strpos($fname, "i");


//to check the amount of words in a string
echo "<br>";
echo "<br>";
$surname = "Osunjimi";
echo str_word_count($surname);

//to replace a string
echo "<br>";
echo str_replace("I", "NO", $greeting);

echo "<br>";
//to lower case
$activities = "DANCINNG";
echo strtolower($activities);
echo "<br>";
//to upper case
$activities = 'sleeping';
echo strtoupper($activities);
echo "<br>";

//string concatenation
$var1 = "Ade goes";
$var2 = "to school";

echo ($var1 .' '. $var2);
echo "<br>";

//integers in php
$num1 = 30;
var_dump($num1);

echo "<br>";
//floating point numbers in php
$num = 3.34;
var_dump($num);

//boolean = TRUE or FALSE. they are used for conditional testing
$thenum1 = true;
echo $thenum1;

echo "<br>";
$thenum2 = false;
echo $thenum2; //note it's going to be zero therefore it wont print anything out 

//date in php
//year Note: Small letter y will echo two digit which is 24 and small letter will print out the full year which is 2024
echo date ('y'); //output: 24
echo "<br>";

echo date ('Y');// output 2024

echo '<br>';
echo date ('m');// print the month in number

echo '<br>';
echo date ('M');// echo the actual month spelling

echo '<br>';
echo date ('d'); //small letter will bring ot the actual day in numbers

echo '<br>';
echo date ('D');//capital letter will bring out the day in week e.g from monday to sunday

echo '<br>';
//year-month-day
echo date ('Y-M-d');

echo '<br>';
//Hour-minute-seconds
echo date ('H-i-s');

echo '<br>';
//math function in php
echo pi();

echo '<br>';
//square root
echo sqrt(64);

//to roundup numbers
echo '<br>';
echo round(56.568);

//to get a random number within a specific range
echo '<br>';
echo rand(10,20);//as we reload it give us random number between 10 and 20

//floor and ceil
//floor = round down numbers to the nearest integer (to a lower value)
//cell = round up number to the nearest integer (to a higher value)
echo '<br>';
echo floor(4.3);

echo '<br>';
echo ceil(4.3);
echo '<br>';

//Array: are used to store multiple value in a single variable

$food = array("yam","rice", "banana");
print_r($food);
echo "<br>";
var_dump($food);

echo "<br>";
//second way to declare an array using square bracket[]

$allName = ["ade", "Bola", "Rodiat", "Ayobami", 24];
print_r($allName);
echo "<br>";
var_dump($allName);

//types of array 1. index array 2. associative array 3. multi dimensional array
//index array is the one above where you can track your values with the index.

//associative array = has key and value
$details = [
    "name" => "Ibrahim",
    "age" => 36,
    "school" => "LAUTECH"
];

echo "<br>";
//to access all the details in the array
print_r($details);
echo "<br>";

//to access and element/value of a key
print_r($details["name"]);

//multi dimensional array = is and array inside and array
$details2 = [
    "name" => ["Ibrahim", "Gbolahan", "Ade"],
    "age" => [20, 50, 10],
    "color" => ["Green", "Red", "Black"]
]

?>
