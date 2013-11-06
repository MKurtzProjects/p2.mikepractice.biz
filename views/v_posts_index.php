<!-- view for showing posts by followers -->


	<div id="top">
		<h1> View posts by your followers. </h1> <h3>Not following anyone?  <a href='/posts/users'>Add people to follow</a>! </h3> 
	</div>
	
<?php foreach($posts as $post): ?>

<article id = "top">

    <h2><?=$post['first_name']?> <?=$post['last_name']?> posted:</h2>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

</article>

<?php endforeach; ?>