


<!-- Create an array with categories and expenses. -->


<?php
$expenses = [
    "Food" => 250,
    "Transport" => 120,
    "Other" => 400
    
   
];

echo "Food expense: $" . $expenses["Food"] ."</br>" ;
echo "Transport expense: $" . $expenses["Transport"] ."</br>" ;




// Use array functions like array_push, array_pop, array_merge, and array_sum.
// Use array functions like array_push

$cityName = ["Dhaka","Chittagong","Rajshahi","Khulna"];




array_push($cityName,"Sylhet","Barishal");

print_r($cityName )."<br>";

//  Use array functions  array_pop,


$friendsName = ["mamun","Jaman","Kamal"];
$frientsRemove = array_pop($friendsName);
echo "<br>";

echo "Friend Remove" ." ". $frientsRemove;
echo "<br>";
print_r($friendsName);

echo "<br>";

// Use array functions  array_merge,

$foodList = ["Biriyani","Pizza","burger","salad","Chichen Fry","Muglay"];
$foodList2 = ["Porota","Khichuri","Roti","Chicken Masala"];

$mergedArray = array_merge($foodList,$foodList2);

print_r($mergedArray);

echo "<br>";
echo "<br>";

$numbers = [100,120,130, 140,150,160,170,180,190,200];
$total = array_sum($numbers);

echo "The sum of the numbers is : " .$total;


echo "<br>";
echo "<br>";
// Convert a string of expenses to array (explode) and back to string (implode).




$stringExpenses = "Food Expenses = 20, Transport Expenses = 200, fruits Expenses = 230";

$stringToArray = explode(",", $stringExpenses);
print_r($stringToArray);
echo "<br>";
echo "<br>";
$arrayToString = implode("|",$stringToArray);

echo $arrayToString;

echo "<br>";
// Use string functions like strtoupper, strlen, substr, and str_replace.
$string = "Hi Sir, Ami Anwar Hosen";
$strToUpper = strtoupper($string);
$strToLen = strlen($string);
echo "String" ." ". $string;
echo "<br>";
echo  "string functions strtoupper ,". " ". $strToUpper;
echo "<br>";
echo  "<h1>string functions strlen,". " ".$strToLen ."</h1>";
echo "<br>";
echo "string functions substr,". " ". substr($string,10);



// 5. Create a file named expenses.txt and write your expense data into it.

// 6. Append a new expense and read the file to show data on page.

$file = fopen('expenses.txt','w');
fwrite($file,"pen = 10, book= 200, note = 130");
fclose($file);

$data = file_get_contents('expenses.txt');

echo $data;
?>


