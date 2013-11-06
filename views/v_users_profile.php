<!-- Profile page displays the current biography and gives the option to update the profile.  Uses p_profile controller in c_users -->


<div id="top">
	<h1>My Profile:</h1>


	<p>"<?php echo $user->biography; ?>"<p>

	<br> <br>

	<form method='POST' action='/users/p_profile'>

	    Update your biography:<br>
	    <textarea type='text' name='biography' rows="4" cols="50">
	    </textarea>
	    <br><br>

		<input type='submit' value='Update'>

	</form>
</div>

