<?php

// ========================================
// CONSTANTS
// ========================================

define('greeting', 'WELCOME TO BSU LIPA');
define('greeting2', 'Welcome Spartan');
echo greeting . '<br>';
echo greeting2 . '<br>';
echo "----------------------------------";

// ========================================
// ARRAYS
// ========================================

// Simple Indexed Array
$array1 = ['Kyle', 'Gian'];
echo $array1[0] . '<br>';

// Associative Array
$array2 = ['Name1' => 'Gianzkei', 'Name2' => 'Kylezkei'];
echo $array2['Name2'] . '<br>';

// Multi-dimensional Array
$array3 = [
    ['Lion', 'Tiger', 'Bear'],
    'Array' => ['T-rex', 'Velociraptor', 'Triceratops'],
];
echo $array3['Array'][2] . '<br>';

// Looping through an array using for loop
$array4 = array('Mango', 'Grapes', 'Apple', 'Banana');
$count = 0;

for ($i = 0; $i < count($array4); $i++) {
    foreach ($array4 as $fruits) {
        if ($i == $count) {
            $count++;
        }
    }
}
echo $count;

// ========================================
// IF-ELSE STATEMENT
// ========================================

$age = '21';
if ($age === 21) {
    echo "You are allowed";
} else {
    echo "You are not allowed";
}
echo '<br>';
echo "----------------------------------";
echo "<br>";

// ========================================
// TERNARY OPERATOR
// ========================================

// Simple Ternary Operator Example
$lovemoko = 'yes';
echo $lovemoko === 'yes' ? 'HAHAHA' : 'Syet';
echo '<br>';
echo "----------------------------------";
echo '<br>';

// Another Ternary Example
$name1 = 'Kyle';
echo $name1 == 'Kyle' ? 'Hi ' . $name1 : 'You are not ' . $name1;

// ========================================
// FUNCTIONS
// ========================================

// Function with Parameters
function myFunction($param1, $param2) {
    return 'The answer is ' . $param1 * $param2;
}

echo "<br>";
echo myFunction(2, 3);
echo "<br>";
echo "----------------------------------";
echo "<br>";

// Function with Loop
function incrementNumNum() {
    for ($num = 0; $num <= 100; $num += 10) {
        echo $num;
        echo "<br>";
    }
}
incrementNumNum();

echo "----------------------------------";
echo "<br>";

// ========================================
// DO-WHILE LOOP
// ========================================

$num = 0;
do {
    echo $num;
    $num += 20;
    echo "<br>";
} while ($num <= 100);

// ========================================
// DESCENDING AND ASCENDING DO-WHILE LOOPS
// ========================================

// Decrementing using do-while
$num = 6;
do {
    echo 'Numero ' . $num . '<br>';
    $num--;
} while ($num >= 1);

// Incrementing using while loop
while ($num <= 5) {
    echo 'Numero ' . $num . '<br>';
    $num++;
}

// ========================================
// FOR LOOP
// ========================================

// Standard For Loop
for ($num1 = 1; $num1 <= 5; $num1++) {
    echo 'Numero ' . $num1 . '<br>';
}

// ========================================
// FUNCTION THAT RETURNS LOOP
// ========================================

function myFunc($param1, $param2, $param3, $param4) {
    $arr = [$param1, $param2, $param3, $param4];
    foreach ($arr as $ar) {
        echo 'Numero ' . $ar . '<br>';
    }
}
echo myFunc(34, 33, 56, 56);

// ========================================
// CONDITIONAL LOOPS
// ========================================

function incrementNumber() {
    for ($num = 0; $num <= 5; $num++) {
        $number = ($num % 2 == 0) ? 'even' : 'odd';
        echo $num . ' is ' . $number;
    }  
}

function decrementNumber() {
    for ($num = 50; $num >= 10; $num -= 7) {
        $numb = ($num % 2 == 0) ? 'true' : 'false';
        echo $num . ' is ' . $numb . '<br>';
    }  
}

function myFunctions($param1, $param2, $param3, $param4, $param5) {
    $array = [$param1, $param2, $param3, $param4, $param5];
    foreach ($array as $name) {
        echo $name . '<br>';
    }
}

// ========================================
// ARRAYS WITH FOR LOOP AND FOREACH
// ========================================

// Using For Loop
$arr = array(1, 2, 3, 4);
function forLoop($arr) {
    for ($i = 0; $i <= 4; $i++) {
        echo $i;
        echo "<br>"; 
    }
}
forLoop($arr);

// Using Foreach Loop
$arr = array(1, 2, 3, 4);

function forLoopLoop($num) {
    foreach ($num as $value) {
        echo $value;
        echo "<br>";
    }
}
forLoopLoop($arr);

// ========================================
// TERNARY OPERATOR WITH ARRAY
// ========================================

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

for ($i = 0; $i < count($arr); $i++) {
    $ternary[$i] = ($arr[$i] % 2 == 0) ? "$arr[$i] is even" . '<br>' : "$arr[$i] is odd" . '<br>';
    echo $ternary[$i];
}

echo "<br>";
echo "Hello World" . '<br>';
incrementNumber();
echo '<br>';
decrementNumber();
echo '<br>';
myFunction('My Lalab', 'My Labidabs', 'My love', 'My everything', 'My Honey');

?>
