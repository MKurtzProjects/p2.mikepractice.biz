<form method='POST' action='/users/p_add_profile'>

    Profile<br>
    <input type='text' name='email'>

    <br><br>



    <?php if(isset($error)): ?>
        <div class='error'>
            Please enter profile info.
        </div>
        <br>
    <?php endif; ?>

    <input type='submit' value='Create Profile'>

</form>