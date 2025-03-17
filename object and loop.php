<?php
// object is an instance of a class
// class is a blueprint that defines the properties and function (method)

//first way to create an object (short method using the stdClass())

// $car = new stdClass();
// $car -> color = "Yellow";
// echo $car -> color;

echo "<br>";

//second way to create an object using the class and public method
class details{
    //properties
    public $name;
    public $age;

    //method (is the function)
    public function entails(){
        return "This is the details";
    }
}

$all = new details;
$all -> name = "Ibrahim";
echo $all -> name;



//local way sha or another way
echo "<br>";
class anotherDetails{
    //properties
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
}

$all = new anotherDetails("Yunusa", 40);
// $all -> name = "Ibrahim";
echo $all -> name;
echo "<br>";
echo $all -> age;



//loops : there are for types of loop
//for loop, while loop, do while loop and switch case

//for(initialization, condition, increment)
for ($i=0; $i <= 10 ; $i++) { 
   echo $i . "<br>";
}


// for ($i=0; $i <= 100 ; $i+=10) { 
//    echo $i . "<br>";
// }


//multiplication table from 5 time to 10
for ($j = 5; $j <= 10; $j++) {
    for ($i = 1; $i <= 12; $i++) {
        echo "$j x $i = " . ($j * $i) . "<br>";
    }
    echo "<br>";
}


//sum of all even numbers between 1 to 10
$a = 1;
$sum = 0; //counter to store the sum of all even numbers

while ($a <= 10) {
    if ($a % 2 == 0) {
        $sum += $a;
        // $sum = $sum + $a; (this is the same as the above)
    }
    $a++;
}

echo "The sum of all even numbers between 1 to 10 is: $sum";


//while loop
echo "<br>";
$num = 1;
while ($num <= 10) {
    echo $num. "<br>";
    $num++;
}

echo "<br>";
$num2 = 0;
while ($num2 <= 100) {
   echo $num2. "<br>";
    $num2 += 10;
}

echo "<br>";
//do while loop
$numb = 0;
do {
    echo $numb ."<br>";  
    $numb++;  
} while ($numb <= 10);


echo "<br>";
//do while loop to calculate the sum of all even numbers between 1 to 10
$firstNum = 1;
$sum = 0;
do {
    if ($firstNum % 2 == 0) {
        $sum += $firstNum;
        // $sum = $sum + $firstNum; (this is the same as the above)
    }
    $firstNum++;
} while ($firstNum <= 10);
echo "sum of all even numbers between 1 to 10 is: $sum";


echo "<br>";
//foreach loop
$food = ["Rice", "Beans", "Yam", "Egusi", "Amala"];
foreach ($food as $value) {
    echo $value . "<br>";
}


//index array is almost close to associative array : here's the proof from the above index array
echo "<br>";
foreach ($food as $key => $value) {
    echo $key . " " . $value . "<br>";
}


//using foreach loop with associative array
$protein = [
    "Rice" => "Chicken",
     "Beans" => "Fish", 
     "Yam" => "Egg", 
     "Egusi" => "Meat", 
     "Amala" => "Turkey"
    ];
    foreach ($protein as $key => $value) {
        echo $key . ' goes with ' . $value . "<br>";
    }  

?>