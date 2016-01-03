<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/registration.css">
<link rel="stylesheet" type="text/css" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>
<html>
<title>Register</title>
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
$password = 'db password';
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

$query = "INSERT INTO users (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

$con->close();

//email person 
$subject = "BOGO Registration";
$messagetext = "Thank you for registering for BOGO. Check your email for party-time.";
$headers = 'From: austin@bogo.gq';
$val = mail($email, $subject, $messagetext, $headers);
$confirmation = "Thanks for registering for BOGO! Check your email to make sure this was configured properly. Thanks! If you didn't get an email, check your spam folder.";

if ($val == true) {
    echo $confirmation;
}else {
    print_r(error_get_last());
}

?>

</body>
</html>
