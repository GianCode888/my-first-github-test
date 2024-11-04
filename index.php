<?php
function forloop($numbers)
{
    for ($i = 0; $i < count($numbers); $i++) {
        echo $numbers[$i] . "<br>";
    }
}
$numbers = [1, 2, 3, 4, 5];
forloop($numbers);
?>