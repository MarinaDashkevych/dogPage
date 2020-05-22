<?php 


$students = [
	7 => 'Nick', 
	'Anna', 
	'John', 
	'Nick', 
	'Nick', 
];

echo $students[0];
echo "<br>";

echo $students[1];
echo "<br>";

echo $students[2];
echo "<br>";

echo $students[3];
echo "<br>";

echo $students[4];
echo "<br>";
echo "<br>";


$x = 10;

// $x++;

// ++$x;

// echo 10 + $x++;

$studentsLength = count($students);


// $x = 0;
// while ($x < $studentsLength) {

// 	echo $students[$x];
// 	echo "<br>";

// 	// $x = $x + 1;
// 	// $x += 1;
// 	$x++;
// }

// $input = "";
// do {

// 	$input = "тут что то вводит пользователь";

// 	echo $students[$x];
// 	echo "<br>";

// 	$x++;
// } while ($input !== 'yes');


// for ($x = 0; $x < $studentsLength; $x++) {
// 	echo $students[$x];
// 	echo "<br>";
// } 


foreach ($students as $key => $item) {
	echo $key .' '.$item;
	echo "<br>";
} 









