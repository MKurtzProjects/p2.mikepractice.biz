

<!DOCTYPE html>
<html>
<head>
	<title>Share Stuff</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- Common CSS/JSS -->
    <link rel="stylesheet" href="/css/master_style.css" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
      <style>
  .ui-menu { width: 150px; }
  </style>
    <script>
  $(function() {
    $( "#menu" ).menu();
  });
  </script>
	
</head>

<body>  

    <div id='head'>

        <div id='mainmenu'>
            <a id="logo" href='/'> <img src="/images/logo.png" alt=""></a></p>



            <!-- Menu for users who are logged in -->
            <?php if($user): ?>
                
                <ul>
                    <li class='useractions'><a href='/users/logout'>Logout</a></li>
                </ul>
        <ul id='chapters'>
          <li><a href="/index">Home</a></li>
          <li><a href="/problems/percent">Percent Problems</a></li>
          <li><a href="/problems/rate">Rate Problems</a></li>
          <li><a href="/problems/consecutive_integers">Consecutive Integer Problems</a></li>
        </ul>

            <!-- Menu options for users who are not logged in -->
            
            <?php else: ?>
                <ul>
                    <li class='useractions'><a href='/users/signup'>Sign up</a></li>
                    <li class='useractions'><a href='/index/index/'>Log in</a></li>
                </ul>
            <?php endif; ?>
        </div> 

    </div>

    <div id="container">



    <div id="content">

        <br>

	   <?php if(isset($content)) echo $content; ?>

	   <?php if(isset($client_files_body)) echo $client_files_body; ?>
    </div>

    </div>

</body>

</html>