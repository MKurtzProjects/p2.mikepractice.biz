
<form id="top" method='POST' action='/users/p_signup'>


    <!-- The below code should be showing specific error messages depending on whether or not the error parameter is set.  
    However, for some reason the parameters error_blank and error_email_taken are not being treated as isset(), even though I see it's working in the URL.  
    I'm stumped.  Any tips on what's going wrong? The good news is that the user won't be created in the DB unless the form passes validation.  
    Once it passes, the user sees the confirmation page-->
    
    <!--Error for leaving fields blank -->
    <?php if(isset($error_blank)): ?>
        <span id = "error"> Signup failed. Please fill out all fields. </span>
        <br>
    <?php endif; ?>


    <!--Error for failed signup caused by an email already being used in the DB -->
    <?php if(isset($error_email_taken)): ?>
        <span id = "error"> Signup failed. This email is taken.  Please try another. </span>
        <br>
    <?php endif; ?>

    <!-- The signup form, itself.  The begining describes how error handling will work, since the routing isn't quite working. -->

    <p> Entries are required in all fields. <p/>

    First Name<br>
    <input type='text' name='first_name'> 
    <br><br>

    Last Name<br>
    <input type='text' name='last_name'>
    <br><br>

    Email<br>
    <input type='text' name='email'>
    <br><br>

    Biography<br>
    <textarea type='text' name='biography' rows="4" cols="50">
    </textarea>
    <br><br>

    Password<br>
    <input type='password' name='password'>
    <br><br>

    <input type='submit' value='Sign up'>

</form>

