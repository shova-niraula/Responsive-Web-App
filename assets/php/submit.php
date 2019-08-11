<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "businessofmindfulness";
// Create connection
$con = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


//storing values from form in variables:
$fname= trim($_POST['fname']);
$lname= trim($_POST['lname']);
$email= trim($_POST['email']);
$phnumber=trim($_POST['phonenumber']);

$radio1 = isset($_POST['radio1']) ? trim($_POST['radio1']) : "Not Registered";
$radio2 = isset($_POST['radio2']) ? trim($_POST['radio2']) : "Not Registered";
$radio2 = isset($_POST['radio2']) ? trim($_POST['radio2']) : "Not Registered";
$radio3 = isset($_POST['radio3']) ? trim($_POST['radio3']) : "Not Registered";
$radio4 = isset($_POST['radio4']) ? trim($_POST['radio4']) : "Not Registered";
$radio5 = isset($_POST['radio5']) ? trim($_POST['radio5']) : "Not Registered";
$radio6 = isset($_POST['radio6']) ? trim($_POST['radio6']) : "Not Registered";
$radio7 = isset($_POST['radio7']) ? trim($_POST['radio7']) : "Not Registered";
$radio8 = isset($_POST['radio8']) ? trim($_POST['radio8']) : "Not Registered";
$radio9 = isset($_POST['radio9']) ? trim($_POST['radio9']) : "Not Registered";
$radio10 =isset($_POST['radio10']) ? trim($_POST['radio10']) : "Not Registered";


// Generate random number

$randnum = abs(crc32(uniqid()));


//sql for creating Registrants_Details table

$sql = "insert into Registrants_Details(id, first_name, last_name, ph_number, email) values('$randnum', '$fname','$lname','$phnumber','$email');";

if ($con->query($sql)) {
    echo "Records added Succesfully.";
} else {
    echo "Error: Not able to execute $sql. " . $con->error;
    exit;
}


$sql1 = "insert into Session_Details1(id, Session1, Session2, Session3, Keynote, Lunch) values('$randnum','$radio1','$radio2','$radio3','$radio4','$radio5')";

if ($con->query($sql1)) {
    echo "Records added Successfully.";
} else {
    echo "Error: Not able to execute $sql1. " . mysqli_error($con);
    exit;
}

$sql2 = "insert into Session_Details2(id, Session1, Session2, Session3, Keynote, Lunch) values('$randnum','$radio6','$radio7','$radio8','$radio9','$radio10')";
if ($con->query($sql2)) {
    echo "Records added Successfully.";
} else {
    echo "Error: Not able to execute $sql2. " . mysqli_error($con);
    exit;
}
$text = "Congratulations you have been registered! Please print the details below.";
header("Location: ../../confirmation.php?text=$text&confirmationno=$randnum&fname=$fname&lname=$lname&email=$email&phonenumber=$phnumber&radio1=$radio1&radio2=$radio2&radio3=$radio3&radio4=$radio4&radio5=$radio5&radio6=$radio6&radio7=$radio7&radio8=$radio8&radio9=$radio9&radio10=$radio10");


