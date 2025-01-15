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
        echo "$j x $i = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}



$a = 1;
$sum = 0;

while ($a <= 10) {
    if ($a % 2 == 0) {
        $sum += $a;
    }
    $a++;
}

echo "The sum of all even numbers between 1 to 10 is: $sum";








?>