<?php
$username = "root";
$password = "insert pass";
$hostname = "localhost";

//connect to db
$con = mysql_connect($hostname, $username, $password)
    or die("Unable to connect.");

//select db
$selected_db = my_sql_select_db("bogo", $con)
    or die("Could not select database.");

//add info
$query = my_sql_query(
    "INSERT INTO users (firstname, lastname, email)
    VALUES($_POST["firstname"], $_POST["lastname"], $_POST["email"])");

mysql_close($con);

//email person 
$to = $_POST["email"];
$subject = "BOGO Registration";
$message = "Thank you for registering for BOGO. Check your email for party-time.";
$message = wordwrap($msg,70);

mail($to, $subject, $message);

echo "Thanks for signing up $_POST["firstname"]!";
?>



