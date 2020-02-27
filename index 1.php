<?php
$myArray = ['HTML','CSS','PHP'];
//ACCESS TO SPECIFIC POSITION
echo $myArray[1];
//other way to create an array
$myArray2 = array('CSS','Javascrip','Pyton',6.5);
echo '<br>' . $myArray2[2];
echo '<br>';
print_r($myArray2);
echo '<br>';
var_dump($myArray2); // print array showing type
//adding elements to array
$myArray[]= 20;
//otehr way to add elements to array
array_push($myArray,'Java',30);
echo '<br>';
var_dump($myArray); 
// Associative arrays
$myArray3 = array (
    'name'=>'Yuly',
    'last name' => 'Morales'
);
print_r($myArray3);
echo $myArray3['name'];

foreach($myArray as $element){
    echo '<li>' . $element . '</li>';
}
// get index using foreach
foreach($myArray as $key => $element){
    echo '<li>'. $element . ', position: '. $key . '</li>';
}

?> 