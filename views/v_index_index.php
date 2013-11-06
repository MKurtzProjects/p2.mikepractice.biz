<!DOCTYPE html>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
	    
	    <!-- CSS for the Followers section -->
	    <link rel="stylesheet" href="/css/index_style.css" type="text/css"> 
	</head>

	<body>

		<div id = "top">
			<h1> <?=APP_NAME?> </h1>
			<h3> A site for stuff worth sharing. </h3>
		</div>

		<?php if ($user): ?>
			
			<div id="right">

				<ul id="action_list">
					<li> <a href='/posts/add'>Add a new post</a> <br>Add posts for your followers to read.</li> 
					<li> <a href='/posts/users'>Follow users</a> <br>Follow new users to subscribe to their feed.</li> 
					<li> <a href='/posts/index'>View posts</a> <br>View a list of all posts by those you follow.</li> 
				</ul>


			</div>

			<div id="left">
				<h1> Welcome, <?php echo $user->first_name; ?>!</h1>
				<p> So you've found Share Stuff.  Congratulations! </p>
				<p> You'll find two +1 features on this site.  Those are: <p>
					<ul>
						<li> 1: An email confirmation after signup. If the email was mistakenly sent to the wrong email, the user is given the option to email the Application Email address (APP_EMAIL) to unsubscribe.</li>
						<li> 2: The ability to add a biography in signup, edit the biography in the Profile section, and see other users' biographies in posts/users page. </li>
					</ul>
			</div>


		<?php else: ?>
			<div id = "right">
				<h2> Sign In </h2>
				

				<form method='POST' action='/users/p_login'>

				    Email<br>
				    <input type='text' name='email'>

				    <br><br>

				    Password<br>
				    <input type='password' name='password'>

				    <br><br>



				    <?php if(isset($error)): ?>
				        <div class='error'>
				            Login failed. Please double check your email and password.
				        </div>
				        <br>
				    <?php endif; ?>

				    <input type='submit' value='Log in'>

				</form>



			</div>

			<div id = "left">
		    	<h2> <a id="signup_button" href='/users/signup/'> <img src="/images/signup_button.png" alt="Sign Up"></a></h2>
			</div>


		<?php endif; ?>
	</body>
</html>

