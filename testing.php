<?php


    // function oddevenNumber(){
    //     for ($number = 0; $number < 50; $number+=3) {
    //          $numnum = ($number % 2 == 0) ? ' even ' : ' odd ';
    //          echo $number . " Number is " . $numnum .'<br>';
    //     } 
        
    // }
    // oddevenNumber();

//git init

// $myGenuineLove = array('i','love', 'you', 'hehe');
// function simpleArray($array){
//     for ($arr = 0; $arr < count($array); $arr++){
//         echo $array[$arr] . '<br>';
//     }
// }
// simpleArray($myGenuineLove);


// $add = array(10, 5, 8);
// function arraySum($numbers){
//     $sum = 0;
//     for ($arr = 0; $arr < count($numbers); $arr++){
//     $sum += $numbers[$arr];
//     }
//     return $sum;
// }
// $totalSum = arraySum($add);
// echo $totalSum;



// $subtract = [30, 5, 10];
// function differenceArray($nummm){
//    $difference = $nummm[0];
//    for($number = 1; $number < count($nummm); $number++){
//     $difference -= $nummm[$number];
//    } return $difference;
// } 
// $totalDifference = differenceArray($subtract);
// echo $totalDifference;



// function leapYear($year) {
//     $leap = ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) ? 'True leap year' : 'Not Leap year';
//     echo $leap;
// }
// leapYear(2024);



// $cars = array ('Toyota', 'Supra', 'Lambo', 'Mustang');
// function raceCar($broom){
//     for ($vehicle = 0; $vehicle < count($broom); $vehicle++){
//       echo $broom[$vehicle] . '<br>';  
//     }
// }
// raceCar($cars);



// $students = array('Kyle ' => 90, 'Gian '=> 95, 'Bogie '=> 98, 'Bogs '=> 91);
// function gradeCalculator($name){
//     foreach ($name as $studentName => $grade){
//         $status = ($grade >= 80 && $grade <= 85) ? ' Nice ' :
//                  (($grade >= 86 && $grade <= 90)? ' WOW ' :
//                  (($grade >= 91 && $grade <= 100) ?  ' SERYOSO? ' : ' Ngek '));
//                  echo $studentName . $grade . $status . '<br>';
//     }
// }
// gradeCalculator($students);



// $number = array(45,56,67,78,89,90);
// function arrayLoop($number){
//   foreach($number as $loop){
//     $num = ($loop % 2 == 0) ? ' is even' : ' is odd';
//     echo $loop . $num . '<br>';
//   }   
// }
// arrayLoop($number);



// $fruits = array("Apple", "Banana", "Cherry", "Date", "Fig");
// function checkStringLength($fruits){
//   for($i = 0; $i < count($fruits); $i++){
//     $lengthMessage = (strlen($fruits[$i]) > 5) ? 'Length is greater than 5' : 'Length is not greater than 5';
//     echo $fruits[$i] . ': ' . $lengthMessage . '<br>';
//   }
// }
// checkStringLength($fruits);



// $countries = array("India" => 'New Delhi', "France" => "Paris", "United State" => "Washington", "Japan" => "Tokyo Manji Gang");
// function countryCity($countries){
//     foreach ( $countries as $place => $city){
//         $wordCount = str_word_count($city);
//         $check = ($wordCount > 1) ? 'Capital is a multi word' : 'Capital is a single word';
//         echo $place . ': ' . $check . '<br>';
//     }
// }
// countryCity($countries);


// $array = [
//   'Array1' => [1,2,3],
//   'Array2' => [4,5,6],
//   'Array3' => [7,8,9]
// ];

// echo 'The value of the array is: ' .$array['Array1'][1];

// $array = [
//   'Main1' => [
//  'Array1' => ['a' => 1, 'b' => 2, 'c' => 3],
//  'Array2' => [4,5,6],
//  'Array3' => [7,8,9]
//   ],

//   'Main2' => [
//   'Array4' => ['a','b','c'],
//   'Array5' => ['d','e','f']        ]           
//   ];

// $outerKey = array_keys($array);
// for ($i = 0; $i < count($outerKey); $i++){
//     $outerKeys = $outerKey[$i];
//     $innerArray = $array[$outerKeys];
//     $innerKeys = array_keys($innerArray);

//     for ($j = 0; $j < count($innerKeys); $j++){
//       $innerKey = $innerKeys[$j];
//       $innermostArray = $innerArray[$innerKey];
//       $innermostKey = array_keys($innermostArray);

//       for ($k = 0; $k < count($innermostKey); $k++){
//         $innermostArrays = $innermostKey[$k];
//         echo $outerKeys .'<br>' .$innerKey .'<br>' .$innermostArrays .'<br>' .$innermostArray[$innermostArrays] ."\t";
//       }
//     }
// }
// echo 'This is the value of the array: ' .$array['Main2']['Array4'][1];



// $array = [
//   [
//       'My Love' => ['a' => 1, 'b' => 2, 'c' => 3],
//       'My Darling' => ['d' => 4, 'e' => 5, 'f' => 6],
//       'My Honey' => ['g' => 7, 'h' => 8, 'i' => 9]
//   ],
//    [
//       'Arr4' => ['j' => 10, 'k' => 11, 'l' => 12],
//       'Arr5' => ['m' => 13, 'n' => 14, 'o' => 15],
//       'Arr6' => ['p' => 16, 'q' => 17, 'r' => 18]
//   ],
//   [
//       'Arr7' => ['s' => 19, 't' => 20, 'u' => 21],
//       'Arr8' => ['v' => 22, 'w' => 23, 'x' => 24],
//       'Arr9' => ['y' => 25, 'z' => 26, 'Darling' => 27]
//   ]
// ];

// foreach ($array as $index1 => $array1){
//   echo $index1 .'<br>'; 
//   foreach ($array1 as $index2 => $array2){
//     echo $index2 .'<br>';
//     foreach ($array2 as $index3 => $array3){
//       echo $array3 .'<br>';
//     }
//     echo '<br>';
//   }
//   echo '<br>';
// }


// $outerKey = array_keys($array);
// for ($i = 0; $i < count($outerKey); $i++){
//   $outerKeys =  $outerKey[$i];
//   $innerKeys = $array[$outerKeys];
//   $innerArray = array_keys($innerKeys);

//  for($j = 0; $j < count($innerArray); $j++){
//    $innerKey = $innerArray[$j];
//    $innermostKey = $innerKeys[$innerKey];
//    $innermostArray = array_keys($innermostKey);
   
//    for($k = 0; $k < count($innermostArray); $k++){
//       $innermostKeys = $innermostArray[$k];
//       echo $outerKeys .'<br>' .$innerKey .'<br>' .$innermostKeys ."\t".$innermostKey[$innermostKeys] .'<br>'; 
//    }
//    echo '<br>';
//  }
//  echo '<br>';
// }


// class Thebank{

//     public $accnumber;
//     protected $accmoney;
//     private $accpin;

//     function __construct($sub1,$sub2,$sub3){
//         $this->accnumber = $sub1;
//         $this->accmoney = $sub2;
//         $this->accpin = $sub3;
//     }

//     public function accNumber(){
//         echo 'This is the account number: ' .$this->accnumber .'<br>';
//     }

//     protected function accMoney(){
//         echo 'Bank account balance: ' .$this->accmoney .'<br>';
//     }

//     private function accPin(){
//         echo 'Your bank acc pin is: '  .$this->accpin;
//     }

//     public function displaymoney(){
//         $this->accMoney();
//     }

// }

// $mybank = new Thebank(4554, 999, 6996);
// $mybank->accNumber();
// $mybank->displaymoney();



// class Owner{

//     public $ownerName, $ownerAge, $ownerAdress; 
//     protected $ownerEmail;



//     function __construct($sub1, $sub2, $sub3, $sub4){
//         $this->ownerName = $sub1;
//         $this->ownerAge = $sub2;
//         $this->ownerAdress = $sub3;
//         $this->ownerEmail = $sub4;

//     }

//     protected function ownerInfo(){
//         echo $this->ownerName .'<br>';
//         echo $this->ownerAge .'<br>';
//         echo $this->ownerAdress .'<br>';
//         echo $this->ownerEmail .'<br>';
//     }

//     public function displayOwnerinfo(){
//         echo $this->ownerInfo(
            
//         );
//     }
// }

// class Pet extends Owner{
 
//     public $petBreed, $species, $petName;
//     protected $petAge;

//     function __construct($ownerName, $ownerAge, $ownerAdress, $ownerEmail, $petBreed, $species, $petName, $petAge){
//         parent::__construct($ownerName, $ownerAge, $ownerAdress, $ownerEmail);
//         $this->petBreed = $petBreed;
//         $this->species = $species;
//         $this->petName = $petName;
//         $this->petAge = $petAge;

//     }

//     protected function petInfo(){
//         parent::displayOwnerinfo();
//         echo $this->petBreed .'<br>';
//         echo $this->species .'<br>';
//         echo $this->petName .'<br>';
//         echo $this->petAge;
//     }

//     public function displayInfo(){
//         echo $this->petInfo();
//     }
// }


//  $vetInfo = new Pet('Kyle', 19, 'Ibaan', 'libera@gmail.com','T-Rex', 'Dinosaur', 'Browny', 999999);
//  $vetInfo->displayInfo();


// class Carsound{
//     function carSound(){
//         echo "The boys";
//     }
// }

// class Supra extends Carsound{
//     function carSound(){
//         echo 'RATATATATTATATA';
//     }
// }

// class Bmw extends Carsound{
//     function carSound(){
//         echo 'BARATATATATATTATA';
//     }
// }

// class Lambo extends Carsound{
//     function carSound(){
//         echo 'WAAAAAAAAHHHHHH';
//     }
// }

// function sportsCar(Carsound $sportscar){
//     $sportscar->carsound();
// }

// $supra = new Supra();
// $bmw = new Bmw();
// $lambo = new Lambo();
// sportsCar($supra);










echo 'Hello World';








?>
