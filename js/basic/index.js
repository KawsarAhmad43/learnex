// Declaring variables of different data types
let userRole = "admin";               // string
let pass = "4%&123";
let hoursWorked = 45;                // number
let isOvertime = false;              // boolean
let bonus = 0;                       // assigned null or 0
let weeklyPayable = 0;
let perHourSalary = 3.2;             // number (float)
let bonusHourAmount = 0.75;
let userEmails = ['admin@gmail.com', 'editor@gmail.com', 'user@gmail.com'];   // Array

// Control statement
if (hoursWorked > 40) {
    isOvertime = true;
    let overtimeHours = hoursWorked - 40;
    bonus = overtimeHours * bonusHourAmount;
} else {
    let overtimeHours = 0;
    bonus = 0;
}

// Building logic
let regularPay = hoursWorked * perHourSalary;
weeklyPayable = regularPay + bonus;

// Display results
if (isOvertime) {
    console.log(`You worked ${overtimeHours} overtime hours and earned: $${bonus.toFixed(2)}`);
} else {
    console.log("No overtime has been found, Sorry No bonus earned");
}
console.log(`Your total earned weekly salary: $${weeklyPayable.toFixed(2)}`);

// Switch statement
switch (userRole) {
    case 'admin':
        console.log("Welcome, Admin!");
        break; // It is used to exit the switch case
    case 'editor':
        console.log("Welcome, Editor!");
        break;
    default:
        console.log("Access Denied!");
}

// Sending emails
console.log("Sending emails to all users:");
userEmails.forEach(email => {
    console.log(`Email sent to ${email}`);
});

// Using logical and comparison operators
let isAdmin = (userRole === 'admin' && pass === '4%&123');
let isEditorOrAdmin = (userRole === 'admin' || userRole === 'editor');

// Nested conditional statement
if (isAdmin) {
    console.log("Signed In");
    if (isEditorOrAdmin) {
        console.log("You have privileges to access the Dashboard");
    }
} else {
    console.log("You are a regular user.");
}
