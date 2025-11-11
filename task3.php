<?php
// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['budget'] = $_POST['budget'];
}


//  Create a recursive function to calculate sum from an array.



  $a = array(1,2,array(3,4, array(5,6,7), 8), 9);
$it = new RecursiveIteratorIterator(new RecursiveArrayIterator($a));
foreach($it as $v) {
    $new_arr[] = $v;
}
echo array_sum($new_arr); 








?>

<!DOCTYPE html>
<html>
<head>
    <title>User Budget</title>
</head>
<body>
    <?php
    // If session data exists, show message
    if (isset($_SESSION['username']) && isset($_SESSION['budget'])) {
        echo "<h2>Welcome, " . htmlspecialchars($_SESSION['username']) . "! Your budget is " . htmlspecialchars($_SESSION['budget']) . ".</h2>";
    } else {
        // Otherwise show the input form
    ?>
        <h2>Enter Your Details</h2>
        <form method="post" action="">
            <label for="username">Name:</label>
            <input type="text" name="username" id="username" required><br><br>

            <label for="budget">Budget:</label>
            <input type="number" name="budget" id="budget" required><br><br>

            <input type="submit" value="Submit">
             
            
        </form>
    <?php
    }
    ?>
  <a href="?logout">Session Delete</a>
    <?php
              if(isset($_GET['logout'])) {
              session_unset();
              }
              ?>



</body>
</html>
