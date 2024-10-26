<?php

// Git Commands
// Initialize Git repository
// git init
// git add .
// git status
// git commit -m "commit msg"
// git branch -M master
// git remote add origins https://github.com/arvinalmario/multidimension-array.git
// git push -u origin master
// git pull
// git checkout -b <name of branch>
// git push --set-upstream origin <name of branch>

// // Array Definitions
// $array1 = []; // 1D array
// $array2 = [[], []]; // 2D array
// $array3 = [[[[]]], [[[]]]]; // 3D array

// Multidimensional Associative Array Example
$array = [ 
    'Array1' => ['a' => 1, 'b' => 2, 'c' => 3], 
    'Array2' => ['d' => 4, 'e' => 5, 'f' => 6], 
    'Array3' => ['g' => 7, 'h' => 8, 'i' => 9], 
    'Array4' => ['j' => 10, 'k' => 11, 'l' => 12] 
];

// Output the multidimensional array
// var_dump($array);
// echo '<br><br><br>';
// print_r($array);

// Accessing a specific value
echo 'The value of the array is: ' . $array['Array4']['j'];

// Loop through multidimensional array

foreach ($array as $index1 => $array1) {
    echo $index1 . '<br>';
    foreach ($array1 as $index2 => $array2) {
        echo $array2 . "\t";
    }
    echo '<br>';
}


// Another Multidimensional Array Example
$array = [ 
    'Main1' => [ 
        'Arr1' => ['a' => 1, 'b' => 2, 'c' => 3], 
        'Arr2' => [100 => 4, 5, 6], 
        'Arr3' => [7, 8, 9],
        'Arr4' => [10, 11, 12]
    ],
    'Main2' => [
        'Arr5' => [13, 14, 15],
        'Arr6' => [16, 17, 18],
        'Arr7' => [19, 20, 21]
    ]
];

// Loop through the new multidimensional array
/*
foreach ($array as $index1 => $array1) {
    echo $index1 . '<br>';
    foreach ($array1 as $index2 => $array2) {
        echo $index2 . '<br>';
        foreach ($array2 as $index3 => $array3) {
            echo $index3 . '   ' . $array3 . "\t";
        }
        echo '<br>';
    }
    echo '<br>';
}
*/

// Example of Pass by Value and Pass by Reference
echo 'Pass by Value' . '<br>';
function passbyValue($param) {
    $param += 5;
    echo 'This is the value inside of the function: ' . $param;
}

$num = 10;
passbyValue($num);
echo '<br>' . 'This is the value outside of the function: ' . $num;

echo '<br><br>';

echo 'Pass by Reference' . '<br>';
function passbyRef(&$param1) {
    $param1 += 5;
    echo 'This is the value inside of the function: ' . $param1;   
}

$num1 = 10;
passbyRef($num1);
echo '<br>' . 'This is the value outside of the function: ' . $num1;







$array = [
    'Array1' => [
        'Arr1' => ['a' => 1, 'b' => 2, 'c' => 3],
        'Arr2' => ['d' => 4, 'e' => 5, 'f' => 6],
        'Arr3' => ['g' => 7, 'h' => 8, 'i' => 9]
    ],
    'Array2' => [
        'Arr4' => ['j' => 10, 'k' => 11, 'l' => 12],
        'Arr5' => ['m' => 13, 'n' => 14, 'o' => 15],
        'Arr6' => ['p' => 16, 'q' => 17, 'r' => 18]
    ],
    'Array3' => [
        'Arr7' => ['s' => 19, 't' => 20, 'u' => 21],
        'Arr8' => ['v' => 22, 'w' => 23, 'x' => 24],
        'Arr9' => ['y' => 25, 'z' => 26, 'aa' => 27]
    ]
];

$outerKeys = array_keys($array);

for ($i = 0; $i < count($outerKeys); $i++) {
    $outerKey = $outerKeys[$i];
    $innerArray = $array[$outerKey];
    $innerKeys = array_keys($innerArray);

    for ($j = 0; $j < count($innerKeys); $j++) {
        $innerKey = $innerKeys[$j];
        $innermostArray = $innerArray[$innerKey];
        $innermostKeys = array_keys($innermostArray);

        for ($k = 0; $k < count($innermostKeys); $k++) {
            $innermostKey = $innermostKeys[$k];
            echo $outerKey .'<br>' .$innerKey .'<br>' .$innermostKey .'<br>'. $innermostArray[$innermostKey] . "\t";
        }
        echo '<br>';
    }
    echo '<br>';
}




class School {

    //member variables
    public $teachers;
    public $subjects;

    //access modifiers
    //public -> accessible from anywhere, globally
    //private -> accessible only within the class, not globally
    //protected -> accessible only within a class and by the derived class



    //construction
    function __construct($param1, $param2){
        $this -> teachers = $param1;
        $this -> subjects = $param2;
    }


    //methods or functions

    //getter and setter function

    function getTeachers(){
        echo $this->teachers .'<br>';
    }

    function getSubjects(){
        echo $this->subjects .'<br>';
    }

    function setTeachers($profs){
        $this->teachers = $profs;
    }

    function setSubjects($subj){
        $this->subjects = $subj;
    }

}

$myStudents = new School('Sir Arvin', 'Programming');

    //set the value
    $myStudents->setTeachers('Mr. Smith');
    $myStudents->setSubjects('Programming');

    //display value
    $myStudents->getTeachers();
    $myStudents->getSubjects();



// Inheritance

class Vehicle { //Parent or Main class

     public $brand;
     public $color;

     function __construct($param1, $param2){
        $this->brand = $param1;
        $this->color = $param2;
     }

     function showVehicle(){
        echo 'The vehicle brand is ' .$this->brand .'<br>';
        echo 'The vehicle color is ' .$this->color .'<br>';
     }
}

class Car extends Vehicle { //Child or Sub class

    public $yearModel;

    function __construct($brand, $color, $yearModel){
        parent::__construct($brand, $color);
        $this->yearModel = $yearModel;
    }

    function showVehicle(){
        parent::showVehicle();
        echo 'The vehicle year model is ' .$this->yearModel .'<br>';
    }
}

// $veh = new Vehicle('Supra', 'White');
// $veh->showVehicle();


$obj = new Car('Keeway', 'White', 1800);
$obj->showVehicle();


class Mybank{

    public $accNumber;
    protected $balance;
    private $pin;

    function __construct($param1, $param2, $param3){
        
        $this->accNumber = $param1;
        $this->balance = $param2;
        $this->pin = $param3;

    }

    
public function showAccNum(){
    echo 'Account number is ' . $this->accNumber .'<br>';
}

protected function showBalance(){
    echo 'The balance is ' .$this->balance .'<br>';
}

private function pin(){
    echo 'The pin is ' .$this->pin .'<br>';
}

public function showBalances(){
    $this->showBalance();
}

public function showpin(){
    $this->pin();
}


}

$mybank = new Mybank(6786, '50M', 444);
$mybank->showAccNum();
$mybank->showBalances();
$mybank->showpin();


// polymorphism

// override
class Animal{

    function sound(){
        echo 'Every animal have a unique sounds ';
    }
}

class Dog extends Animal{

    function sound()  {
        echo 'Wahh! wahh!';
    }
}

class Cat extends Animal{

    function sound()  {
        echo 'Kupal! Kupal!';
    }
}

function theAnimal( Animal $animal){
    $animal->sound();
}

$dog = new Dog();
$cat = new Cat(); 
theAnimal($dog);
theAnimal($cat);

?>












