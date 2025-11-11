<?php


// Print them using echo, print, and printf.
 $appName = "Binery Book Details";
 $AuthorName = "Aminul Islam";


// Print them using echo,
echo "Print them using echo, " ."</br>" . "\n";
echo "Author Name " . $AuthorName ." " . "App Name ". $appName  ."</br>" . "\n" ;
 

print "Print them using print, "."</br>";
 print "Author Name " . $AuthorName ." " ."App Name ". $appName  ."</br>" . "\n" ;



 print "Print them using printf, "."</br>" . "\n";
 printf("Author Name"." ".$AuthorName  ." " . "App Name" .$appName)."</br>" ;


//  3. Create variables for food, transport, and other expenses.

// 4. Calculate total and average expense.

// 5. If total > 1000, show “Budget Exceeded”, else “Within Budget”.


$foodExpenses = 280;
$transportExpenses = 400;
$otherExpenses = 380;


$totalExpenses = $foodExpenses + $transportExpenses + $otherExpenses;

echo "Total Expenses" . "   ". $totalExpenses ."</br>" . "\n";

$averageExpenses = $totalExpenses / 3;

echo "Average  Expenses" . "   ". $averageExpenses ."</br>"  . "\n";

if($totalExpenses > 1000){
  echo "Budget Exceeded"."</br>" . "\n" ;
}
else{
   echo  " Within Budget"."</br>"  . "\n";
}


//  Use ternary  expense range message.

  print  ($totalExpenses > 1000) ? "Budget Exceeded" ."</br>"  : "Within Budget" ."</br> ";

//  switch case for expense range message.


// 7. Write a function to calculate total expense.

// 8. Write another function to check the budget and show the result.

function totalExpenses($foodExpenses,$transportExpenses,$otherExpenses) {    
// Code to be executed  
  echo "total Expenses" . "  " . $foodExpenses  + $transportExpenses + $otherExpenses; // optional
}

totalExpenses(400,300,250);

?>