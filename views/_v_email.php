<?php

# Build a multi-dimension array of recipients of this email
$to[] = Array("name" => "Judy Grimes", "email" => "michaelkurtz10@gmail.com");

# Build a single-dimension array of who this email is coming from
# note it's using the constants we set in the configuration above)
$from = Array("name" => APP_NAME, "email" => APP_EMAIL);

# Subject
$subject = "Welcome to JavaBeans";

# You can set the body as just a string of text
$body = "Hi Judy, this is just a message to confirm your registration at JavaBeans.com";

# OR, if your email is complex and involves HTML/CSS, you can build the body via a View just like we do in our controllers
# $body = View::instance('e_users_welcome');

# Build multi-dimension arrays of name / email pairs for cc / bcc if you want to 
$cc  = "";
$bcc = "";

# With everything set, send the email
$email = Email::send($to, $from, $subject, $body, true, $cc, $bcc);

?>