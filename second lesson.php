<?php 
//time function : we used date() to display time
// H = hour, i = minute, s = seconds
echo date('H-i-s');
echo "<br>";


// date function
// Y(capital Y is used to represent year in four digit while small letter is used for two digit), m = month, d = day
echo date ('y-m-d');
echo "<br>";
echo date ('Y-M-D');

// sort in an array
// sort is used to arrange array in ascending order after the sort method you introduce the print_r() function to print the array value
$food = ['rice', 'yam', 'beans', 'pasta'];
sort($food);
echo "<br>";
print_r($food);


echo "<br>";
// rsort() is used to arrange array in descending order
rsort($food);
print_r($food);

echo "<br>";
$details = [
    'name' => 'Ibrahim',
    'age' => 23,
    'department' => 'Computer Science',
    'level' => '500L'
];
// asort() is used to arrange associative array in ascending order according to the value. NOte: it reads number first
asort($details);
print_r($details);
echo "<br>";


// ksort is used to arrange associative array in ascending order according to the key
ksort($details);
print_r($details);
echo "<br>";

// krsort() is used to arrange associative array in descending order according to the key 
krsort($details);
print_r($details);
echo "<br>";

//object = is an instance of a class
class details{
    public $name;
    public $color;
}

$all = new details();
$all -> name = "buggybillions";
echo $all -> name;

echo "<br>";
$all -> color = 'blue';
echo $all -> color;


echo "<br>";
//second way to declare an object
$det = new stdClass();
$det -> age = 30;
echo $det -> age;


echo "<br>";
$food = new stdClass();
$food -> protein = 'fish';
echo $food -> protein;

echo "<br>";

//operators in php
//assignment operators, arithmetic operator, logical operator, comparison operator

//assignment operator (=, +=, *=, /+)
$num1 = 5;
$num2 = 4;

echo $num1 += $num2; //it same as echo $num1 = $num1 + $num2
echo "<br>";

//echo $num1 = $num1 - $num2
echo $num1 -= $num2;
echo "<br>";

//echo $num1 = $num1 * $num2
echo $num1 *= $num2;
echo "<br>";


//echo $num1 = $num1 / $num2
echo $num1 /= $num2;
echo "<br>";
//logical operators
//&&, ||

// comparison operators
// > , < , >= , <= , != , == , ===
echo $num1 > $num2;
echo "<br>";

echo $num1 < $num2;
echo "<br>";

echo $num1 >= $num2;
echo "<br>";

echo $num1 <= $num2;
echo "<br>";

echo $num1 != $num2;
echo "<br>";

echo $num1 == $num2;
echo "<br>";

echo $num1 === $num2;
echo "<br>";

//NOTE: THOSE THAT BROUGHT OUT EMPTY LINE AS OUTPUT IS FALSE (0) AND (1) IS THE TRUE VALUE


//PHP FUNCTIONS : IS A BLOCK OF CODE THAT CAN BE USED REPEATEDLY IN A PROGRAM


function greeting($name) {
    echo "Hello, " . $name . "!";
}
echo greeting("Ibrahim");
echo "<br>";
echo greeting("John");

// Note: you can pass more than one parameter in the function ($name is the parameter) and (Ibrahim is the argument)

//function to add two numbers
echo "<br>";
function add($a , $b){
    echo $a + $b;
}
echo add(2 , 4);


//function to subtract two numbers
echo "<br>";
function sub($a , $b){
    echo $a - $b;
}
echo sub(9 , 4);


//function to divide two numbers
echo "<br>";
function div($a , $b){
    echo $a / $b;
}
echo div(15 , 5);


//function to multiply two numbers
echo "<br>";
function mul($a , $b){
    echo $a * $b;
}
echo mul(10 , 2);



//control structure
//control statement, loop

//if statement, if else statement, if elseif statement, switch statement


echo "<br>";
//if statement
$age = 30;
if ($age >= 20) {
    echo "You are an adult";
}


echo "<br>";
//if else statement
$age = 10;
if ($age >= 20) {
    echo "You are an adult";
} else {
    echo "You are too young";
}


echo "<br>";
//if elseif is used to perform multiple condition
$myColor = "Blue";
if ($myColor == "Yellow") {
    echo "The color is Yellow!";
}elseif ($myColor == "Black") {
    echo 'The color is black!';
}
elseif ($myColor == 'Blue') {
    echo 'Correct color!';
}else {
    echo 'invalid color!';
}


echo "<br>";
//switch case statement
$trafficLight = "Green";
switch ($trafficLight) {
    case 'Red':
        echo 'Stop!';
        break;
    case 'Yellow':
        echo "Ready!";
        break;
    case 'Green':
        echo "Go!";
        break;
    default:
        echo "Error!";
        break;
}

?>