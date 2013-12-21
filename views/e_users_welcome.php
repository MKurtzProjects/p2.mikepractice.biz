<h1> Welcome to the Ultimate Mathbook, <?php echo $_POST["first_name"]; ?>! </h1>

<p> This is your email confirmation. You are now signed up. </p>

<p> Log in here: <a href="/users/login">Log In</a> </p>

<p> Not <?= $_POST["first_name"]; ?> <?= $_POST["last_name"]; ?>?  Contact <?= APP_EMAIL ?> to delete your account.