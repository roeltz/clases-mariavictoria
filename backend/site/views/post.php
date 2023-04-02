<?php require __DIR__."/partials/head.php" ?>

<header>
	<h1>Post: <?php echo $post["title"] ?></h1>
</header>
<main>
	<?php echo $post["content"] ?>
</main>

<?php require __DIR__."/partials/footer.php" ?>