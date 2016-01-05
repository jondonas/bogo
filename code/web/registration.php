<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/registration.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
<title>Register</title>
</head>
<html>
<body>

<div id="menu">
            <ul class="main">
            <li><a href="registration.php" title="Register">Register</a> </li>
            <li><a href="home.html" id="head" title="Home">BOGO</a></li>
            <li><a href="about.html" title="About">About</a> </li>                
            </ul>
     </div>
    
    <div class="forms">
     <form id="forms" method="post" action="php/send.php">
        <p>First Name:</p>
        <input type="text" id="firstname" name="firstname" required>
   
        <p>Last Name:</p>
        <input type="text" id="firstname" name="lastname" required>
   
        <p>Email:</p>
        <input type="text" id="firstname" name="email" required>
 
        <button id="submit-btn" type="submit">Submit</button>
    
         </div>
</form>

</body>
</html>


