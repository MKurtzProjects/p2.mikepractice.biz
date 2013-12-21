<?php

class problems_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("Members only. <a href='/users/login'>Login</a>");
        }
    }

    public function rate() {

        # Setup view
        $this->template->content = View::instance('v_rate');

        # Render template
        echo $this->template;

    }

    public function percent() {

    # Setup view
    $this->template->content = View::instance('v_percent');

    # Render template
    echo $this->template;

    }

    public function consecutive_integers() {

    # Setup view
    $this->template->content = View::instance('v_consecutive_integers');

    # Render template
    echo $this->template;

    }

    public function sum_of_consecutive_integers() {

    # Setup view
    $this->template->content = View::instance('v_consecutive_integers');

    # Render template
    echo $this->template;

    }

    public function index() {

        # Set up the View
        $this->template->content = View::instance('v_problems_index');


        # Render the View
        echo $this->template;

    }

    public function flag($problem_id_flagged) {

    # Prepare the data array to be inserted
    $data = Array(
        "user_id" => $this->user->user_id,
        "problem_id_flagged" => $user_id_flagged
        );

    # Do the insert
    DB::instance(DB_NAME)->insert('users_users', $data);

    # Send them back
    Router::redirect("/problems");

    }

    public function unflag($problem_id_flagged) {

    # Delete this connection
    $where_condition = 'WHERE user_id = '.$this->user->user_id.' AND problem_id_flagged = '.$problem_id_flagged;
    DB::instance(DB_NAME)->delete('users_users', $where_condition);

    # Send them back
    Router::redirect("/problems");

    }

}
?>