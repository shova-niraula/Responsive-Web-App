<?php

//Creating Connection
$con= mysql_connect(':mysql','test2', '123');
if(!$con) {
  die("Connection failed: ". mysql_error());
}

//selecting database
mysql_select_db("CIT647StudentsConcertsProfiles", $con);

//storing values from form in variables:
$fname= trim($_POST['fname']);
$lname= trim($_POST['lname']);
$email= trim($_POST['email']);
$phnumber=trim($_POST['phonenumber']);
$radio1=!empty(trim($_POST['radio1']))? trim($_POST['radio1']): "Not Registered";
$radio2= !empty(trim($_POST['radio2']))? trim($_POST['radio2']): "Not Registered";
$radio3= !empty(trim($_POST['radio3']))? trim($_POST['radio3']): "Not Registered";
$radio4= !empty(trim($_POST['radio4']))? trim($_POST['radio4']): "Not Registered";
$radio5= !empty(trim($_POST['radio5']))? trim($_POST['radio5']): "Not Registered";
$radio6= !empty(trim($_POST['radio6']))? trim($_POST['radio6']): "Not Registered";
$radio7= !empty(trim($_POST['radio7']))? trim($_POST['radio7']): "Not Registered";
$radio8= !empty(trim($_POST['radio8']))? trim($_POST['radio8']): "Not Registered";
$radio9= !empty(trim($_POST['radio9']))? trim($_POST['radio9']): "Not Registered";
$radio10= !empty(trim($_POST['radio10']))? trim($_POST['radio10']): "Not Registered";


// Geneate random number

$randnum = abs(crc32(uniqid()));


//sql for creating Registrants_Details table

$sql = "insert into Registrants_Details(id, first_name, last_name, ph_number, email) values('$randnum', '$fname','$lname','$phnumber','$email');";
if(mysql_query($sql,$con)){  
  echo "Records added Succefully.";
}
else{
  echo "Error: Not able to execute $sql. ". mysql_error($con);
  exit;
}

$sql1 ="insert into Session_Details1(id, Session1, Session2, Session3, Keynote, Lunch) values('$randnum','$radio1','$radio2','$radio3','$radio4','$radio5')";

if(mysql_query($sql1,$con)){
  echo "Records added Succefully.";
}
else{
  echo "Error: Not able to execute $sql1. ". mysql_error($con);
  exit;
}

$sql2 ="insert into Session_Details2(id, Session1, Session2, Session3, Keynote, Lunch) values('$randnum','$radio6','$radio7','$radio8','$radio9','$radio10')";
if(mysql_query($sql2,$con)){
  echo "Records added Succefully.";
}
else{
  echo "Error: Not able to execute $sql2. ". mysql_error($con);
  exit;
}
$text = "Congratulations you have been registered! Please print the details below.";
header("Location: ../../confirmation.php?text=$text&confirmationno=$randnum&fname=$fname&lname=$lname&email=$email&phonenumber=$phnumber&radio1=$radio1&radio2=$radio2&radio3=$radio3&radio4=$radio4&radio5=$radio5&radio6=$radio6&radio7=$radio7&radio8=$radio8&radio9=$radio9&radio10=$radio10"); 

