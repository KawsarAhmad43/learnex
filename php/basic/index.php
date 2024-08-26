<?php
// declaring variable of different data types
$userRole = "admin";             //string
$pass = "4%&123";
$hoursworked = 45;              //int
$isOvertime = false;            //boolean
$bonus = 0;                      //assigned null or 0
$weeklyPayable = 0;
$perHourSalary = 3.2;            //float
$bonusHourAmount = 0.75;
$userEmails = ['admin@gmail.com', 'editor@gmail.com', 'user@gmail.com'];   //Array

// control statement
if ($hoursworked > 40) {
    $isOvertime = true;
    $overtimeHours = $hoursworked - 40;
    $bonus = $overtimeHours * $bonusHourAmount;
} else {
    $overtimeHours = 0;
    $bonus = 0;
}
// building logic
$regularPay = $hoursworked * $perHourSalary;
$weeklyPayable = $regularPay + $bonus;

if ($isOvertime) {
    // displaying the result with echo
    // string concatanation+linescape+formating value
    echo "you worked $overtimeHours over time hours and earned: $" . number_format($bonus, 2) . "\n";
    // rendering html
    echo "<br>";
} else {
    echo "No Overtime has been found, Sorry No bonus earned";
    // rendering html
    echo "<br>";
}
echo "Your total Earned Weekly Salary: $" . number_format($weeklyPayable, 2) . "\n";
// rendering html
echo "<br>";



switch ($userRole) {
    case 'admin':
        echo "Welcome, Admin! \n";
        // rendering html
        echo "<br>";
        break;  //it is used to exit the loop
    case 'editor':
        echo "Welcome, Editor! \n";
        break;
    default:
        echo "Access Denied!";
        // rendering html
        echo "<br>";
}


echo "sending emails to all Users: \n";
// rendering html
echo "<br>";
//foreach loop, it iterates itselfs according to the keys
foreach ($userEmails as $email) {
    echo "Email sent to " . $email . "\n";
    // rendering html
    echo "<br>";
}


// Using logical and comparisonal operators
$isAdmin = ($userRole == 'admin' && $pass === '4%&123');
$isEditororAdmin = ($userRole === 'admin' || $userRole === 'editor');
// nested conditional statement
if ($isAdmin) {
    echo "Signed In \n";
    // rendering html
    echo "<br>";
    if ($isEditororAdmin) {
        echo "You have Previleges to access the Dashboard\n";
        // rendering html
        echo "<br>";
    }
} else {
    echo "You are a regular user.\n";
}
