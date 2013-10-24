<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {

        # Setup view
            $this->template->content = View::instance('v_users_signup');
            $this->template->title   = "Sign Up";

        # Render template
            echo $this->template;
    }

    public function p_signup() {

        # More data we want stored with the user
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Encrypt the password  
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            

        # Create an encrypted token via their email address and a random string
        $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string()); 

        #Insert this user into the database
        $user_id = DB::instance(DB_NAME)->insert('users', $_POST);

         # For now, just confirm they've signed up - 
        # I should eventually make a proper View for this
        echo 'You\'re signed up';
        
    }

/*
    public function login() {

    # Setup view
        $this->template->content = View::instance('v_users_login');
        $this->template->title   = "Login";

    # Render template
        echo $this->template;

    }   
*/
    public function login($error = NULL) {

    # Set up the view
    $this->template->content = View::instance("v_users_login");

    # Pass data to the view
    $this->template->content->error = $error;

    # Render the view
    echo $this->template;

}

    public function p_login() {

    # Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
    $_POST = DB::instance(DB_NAME)->sanitize($_POST);

    # Hash submitted password so we can compare it against one in the db
    $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

    # Search the db for this email and password
    # Retrieve the token if it's available
    $q = "SELECT token 
        FROM users 
        WHERE email = '".$_POST['email']."' 
        AND password = '".$_POST['password']."'";

    $token = DB::instance(DB_NAME)->select_field($q);

    # If we didn't find a matching token in the database, it means login failed
    if(!$token) {

        # Send them back to the login page
        Router::redirect("/users/login/error");

    # But if we did, login succeeded! 
    } else {

        setcookie("token", $token, strtotime('+1 year'), '/');

        # Send them to the main page - or whever you want them to go
        Router::redirect("/");

    }

}

 public function logout() {

    # Generate and save a new token for next login
    $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

    # Create the data array we'll use with the update method
    # In this case, we're only updating one field, so our array only has one entry
    $data = Array("token" => $new_token);

    # Do the update
    DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

    # Delete their token cookie by setting it to a date in the past - effectively logging them out
    setcookie("token", "", strtotime('-1 year'), '/');

    # Send them back to the main index.
    Router::redirect("/");

}

    public function profile($user_name = NULL) {

    # If user is blank, they're not logged in; redirect them to the login page
    if(!$this->user) {
        Router::redirect('/users/login');
    }

    # If they weren't redirected away, continue:

    #Setup view in the template
    $this->template->content = View::instance('v_users_profile');

    #Set page title in the template
    $this->template->title = "Profile";

        # Create an array of 1 or many client files to be included in the head
    $client_files_head = Array(
    	'/css/sample-app.css',
        );

    # Use load_client_files to generate the links from the above array
    $this->template->client_files_head = Utils::load_client_files($client_files_head);  

    # Create an array of 1 or many client files to be included before the closing </body> tag
    $client_files_body = Array(
        );

    # Use load_client_files to generate the links from the above array
    $this->template->client_files_body = Utils::load_client_files($client_files_body);  


    # Pass information to the view the fragment as part of content in the template
    $this->template->content->user_name = $user_name;

    # Render View
    echo $this->template;

}

} # end of the class