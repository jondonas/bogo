<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/registration.css">
<link rel="stylesheet" type="text/css" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>
<html>
<title>Registration Success!</title>
<body>
<div id="menu">
<ul class="main">
<li><a href="../registration.php">Register</a> </li>
<li><a href="../home.html" id="head" title="Home">BOGO</a></li>
<li><a href="../about.html">About</a> </li>
</ul>
</div>
<?php
$username = 'root';
$password = 'db pass';
$hostname = 'localhost';
$dbname = 'bogo';

//connect to db
$con = new mysqli($hostname, $username, $password, $dbname);
if ($con->connect_error) {
        die('Could not connect: ' . $con->connect_error);
    }

//add info

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$safefirstname = $con->real_escape_string($firstname);
$safeLastName = $con->real_escape_string($lastname);
$safeemail = $con->real_escape_string($email);

//validate fields
$invalidName = (!preg_match("/^[a-zA-Z ]*$/", $firstname) || !preg_match("/^[a-zA-Z ]*$/", $lastname));
$invalidEmail = !filter_var($email, FILTER_VALIDATE_EMAIL);
if ($invalidName) {
$nameErr = "Only letters and white space allowed in your name. \n"; 
}

if ($invalidEmail) {
$emailErr = "Invalid email format.";
}

//email user 
$subject = "BOGO Registration";
$messagetext = "Thank you for registering for BOGO. Check your email for an update when the algorithm finishes.";
$headers = 'From: austin@bogo.gq';
$confirmation = "Thanks for registering for BOGO! Check your email to make sure this was configured properly. Thanks! If you didn't get an email, check your spam folder.";

if ($invalidName) {
    echo "Invalid name. ";
} elseif ($invalidEmail) {
    echo "Invalid email.";
} else {
    $con->query("INSERT INTO users (firstname, lastname, email) VALUES ('$safefirstname', '$safeLastName', '$safeemail')");
    mail($email, $subject, $messagetext, $headers);
    echo $confirmation;
}
$con->close();
?>

</body>
</html>
