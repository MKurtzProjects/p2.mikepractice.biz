<!-- view for following users -->

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
    
    <!-- CSS for the Followers section -->
    <link rel="stylesheet" href="/css/follower_style.css" type="text/css"> 
</head>

<body>
    <div id = "top">
        <h1> Who Would You Like to Follow? </h1>
        <p> Select users to follow. Don't know who to follow?  Read their bios to learn more.</p2>
        </br>
        </br>
    </div>

<!-- Shows each user's first name, last name, and biography.  Allows one to follow or unfollow.  Followed users's posts will appear in the posts/index page -->

    <?php foreach($users as $user): ?>
        <div id = "top">
        <!-- Print this user's name -->
        <?=$user['first_name']?> <?=$user['last_name']?>
        <br>    
        <span id="biography"><?=$user['biography']?></span>

        <!-- If there exists a connection with this user, show a unfollow link -->
        <?php if(isset($connections[$user['user_id']])): ?>
            <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

        <!-- Otherwise, show the follow link -->
        <?php else: ?>
            <a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
        <?php endif; ?>
        </div>


    <?php endforeach; ?>

</body>

</html>