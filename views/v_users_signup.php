

<head>
    <title>Rate Problems</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="/css/numbers.css" type="text/css">
    <link rel="stylesheet" href="/css/signup.css" type="text/css">
    <link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css"/>

    <script src="../js/jquery-1.9.1.js"></script>
    <script src="../js/jquery-ui-1.10.3.custom.js"></script>
    <script src="../js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
    </script>
    <script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
    </script>
    <script>
        jQuery(document).ready(function(){
            // binds form submission and fields to the validation engine
            jQuery("#formID").validationEngine();
        });
    </script>


</head>
<body>
        <?php if(isset($error)): ?>

        <span class = "error"> This email is already in use. Please try another. </span>
        <br>
    <?php endif; ?>
<form id="formID" class="formular" method='POST' action='/users/p_signup'>


    <!-- The below code should be showing specific error messages depending on whether or not the error parameter is set.  
    However, for some reason the parameters error_blank and error_email_taken are not being treated as isset(), even though I see it's working in the URL.  
    I'm stumped.  Any tips on what's going wrong? The good news is that the user won't be created in the DB unless the form passes validation.  
    Once it passes, the user sees the confirmation page-->

    <!-- The signup form, itself.  The begining describes how error handling will work, since the routing isn't quite working. -->
    <fieldset>

    First Name<br>
    <input value="" type='text' class="validate[required] text-input" name='first_name' id="first_name"> 

    <br><br>


    Last Name<br>
    <input value="" class="validate[required] text-input" type="text" name="last_name" id="last_name" />
    <br><br>

    Email<br>
    <input value="" class="validate[required] text-input" type="text" name="email" id="email" />
    <br><br>

    Password<br>
    <input type='password' class="validate[required] text-input" name='password' id='password'>
    <br><br>

        </fieldset>
    <input class='submit' type='submit' value='Sign up'>

</form>
</body>
