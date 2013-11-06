<!-- Login form.  Will show login failed if tokens don't match (see p_login controller in c_users) -->


<form id = "top" method='POST' action='/users/p_login'>

    <?php if(isset($error)): ?>

        <span class = "error"> Login failed. Please double check your email and password. </span>
        <br>
    <?php endif; ?>
        
    <br><br>

    Email<br>
    <input type='text' name='email'>

    <br><br>

    Password<br>
    <input type='password' name='password'>

    <br><br>
    <input type='submit' value='Log in'>
    <br><br>


</form>

