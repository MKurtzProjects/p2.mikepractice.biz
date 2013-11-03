<div id="top">

<p> Congratulations!  You're signed up. You should now recieve an email confirmation. </p>

<?php

# Build a multi-dimension array of recipients of this email
$to[] = Array("name" => "", "email" => "michaelkurtz10@gmail.com");

# Build a single-dimension array of who this email is coming from
# note it's using the constants we set in the configuration above)
$from = Array("name" => APP_NAME, "email" => APP_EMAIL);

# Subject
$subject = "Welcome to ShareStuff!";

#body of email
$body = View::instance('e_users_welcome');



# Build multi-dimension arrays of name / email pairs for cc / bcc if you want to 
$cc  = "";
$bcc = "";

# With everything set, send the email
$email = Email::send($to, $from, $subject, $body, true, $cc, $bcc);

?>

<h2> Now <a href="/users/login">Log In</a> </h2>

</div>