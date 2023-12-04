<?php
// phpBootcamp: Expand your knowledge possibilities.


// For loops through a block of code a specified number of times

// for (initialization expression; test condition; update expression) {
//   // Code to be executed
// }

// for(initialization; condition; increment/decrement) {
//     ///statements to be executed
//     }

// for (expr1; expr2; expr3)
//     statement
// =========================================================
for ($x = 10; $x >= 1; $x--) {
    echo $x;
} //10987654321
for ($x = 1; $x <= 10; $x++) {
    echo $x;
} //12345678910
// =================================
$oddeven = [54, 85, 45, 178, 156, 54, 4, 7, 9, 12584];
$size = count($oddeven);
for ($i = 0; $i < $size; $i++) {
    if ($oddeven[$i] % 2 == 0) {
        echo "odd" . $oddeven[$i] . "\n";
    } else {
        echo "event" . "\n";
    }
}
// =====================================
$num = [54, 85, 45];
echo $num[1]; //85
// $num [1]= represent 85
$num[1] = 900;
echo $num[1]; //900
// ========================================
// Dynamically incrementing array indices. If you want to dynamically add elements to an array with incremental indices, 
// you can do so in various ways depending on the programming language.
$dynamicArray = [];
for ($i = 0; $i < 5; $i++) {
    $dynamicArray[] = "Element " . $i;
}
print_r($dynamicArray);
// Display the array
// Array
// (
//     [0] => Element 0
//     [1] => Element 1
//     [2] => Element 2
//     [3] => Element 3
//     [4] => Element 4
// )
// =================looping in array==========================

$data = [60, 30, 10, 67, 40];
$length = count($data); // 5

for ($i = $length - 1; $i >= 0; $i--) {
    echo $data[$i]; //40 67 10 30 60
}

for ($i = 0; $i <= 5; $i++) {
    echo $data1[$i] . "\n"; //40 67 10 30 60
}
// =============Reverse looping in array===================
for ($i = $length; $i >= 0; $i--) {
    echo $i; //40 67 10 30 60 but Undefined array key 5 
}
for ($i = $length - 1; $i >= 0; $i--) {
    echo $i; //40 67 10 30 60 but  
}

for ($i = 10; $i > 0; $i--) {
    echo $i; //9 8 7 6 5 4 3 2 1
}

// =======Reverse intro default function=======
$items = [1, 2, 3, 4, 5];
$items = array_reverse($items);
print_r($items); //5 4 3 2 1
// echo $items; //Array to string conversion  
echo $items[1];
// ------------------------------------------
$items2 = [1, 2, 3, 4, 5];
echo $items2; //Warning: Array to string conversion
// you're trying to directly echo an array, which is not allowed.
$itemsEcho = implode(',', $items2);
echo $itemsEcho;

// Convert array to string by using implode function.
$stringRepresentation = implode($items2); //123
$stringRepresentation1 = implode(', ', $items2); //1, 2, 3
echo $stringRepresentation; // Outputs: 1, 2, 3

$myarray = array(1, 2, 3, 4, 5, 6, 7, 7);
$abc = count($myarray);
for ($i = 0; $i < $abc; $i++) {
    echo $myarray[$i]; //12345677
}

// we did not directly echo array Bcz $items collection of array
// array হলো collection of elements সরাসরি array কে echo/print করা যায় না। । 
// Array elements দেখতে হলে বা value echo/print করতে হলে index বা loop ব্যবহার করতে হয়

// ================demonstratefor loop=====================


$i = 1;
for (; $i <= 5; $i++) {
    echo $i; //1 2 3 4 5
}

for ($i = 1;; $i++) {
    if ($i == 4) {   // condition ($i < 4) | ($i > 4)
        break;
    }
    echo "\n";
    echo $i;  // 1 2 3
}

for ($i = 1; $i <= 10;) {    // declaring variable i declaring  condition
    if ($i == 7) {
        break;
    }
    echo  $i;
    $i++;                // increment and decrement
}

$i = 1;                 // declaring variable i
for (;;) {
    if ($i == 8) {    // declaring  condition ,
        break;
    }
    echo $i;
    $i++;            // increment and decrement
}

$i = 1;                 // declaring variable i
for (;;) {
    if ($i == 8) {    // declaring  condition ,
        break;
    }
    echo $i;          // 1234567
    $i++;            // increment and decrement
}


for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo " * ";
    }
    echo "<br/>";
}

// =====================================
// PHP Casting Strings and Floats to Integers
// Sometimes you need to cast a numerical value into another data type.
// The (int), (integer), or intval() function are often used to convert a value to an integer.
// Cast float and string to integer:


// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

// ==============Middle element of an array =============================
$data = [60, 30, 10, 67, 40,14];
$length = count($data);
echo $length."\n"; //6
// Check if the array has an odd or even number of elements
if ($length % 2 == 1) {
    // If odd, find the middle index directly
    $middleIndex = (int) ($length / 2);
    $middleElement = $data[$middleIndex];
    echo "The middle element is: $middleElement";
} else {
    // If even, find the two middle indices and average their values
    $middleIndex1 = $length / 2 - 1;  // 6/2=3-1=2
    $middleIndex2 = $length / 2; //6/2=3
    $middleElement1 = $data[$middleIndex1];
    $middleElement2 = $data[$middleIndex2];
    echo "The middle elements are: $middleElement1 and $middleElement2";
}

$int= ["Etiam","facilisis?","Alias","nostrum?","Exercitation","fugiat","dicta","modi","nec","minima","velit","felis?",
"Consequuntur","irure","itaque","minus","perferendis","do.","Fringilla","repudiandae","integer","dignissimos.","Wisi","cupi"];

$lengthInteger= count($aaa);

if($lengthInteger%2 ==1){
    echo "odd";
}else{
    $lengthIntegerkeyIndex1= $lengthInteger/2-1;
    $lengthIntegerkeyIndex2= $lengthInteger/2;
    $lengthIntegerElement1= $int[$lengthIntegerkeyIndex1];
    $lengthIntegerElement2= $int[$lengthIntegerkeyIndex2];
    echo $lengthIntegerElement1 ."\n". $lengthIntegerElement2;
};