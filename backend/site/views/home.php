<?php require __DIR__."/partials/head.php" ?>

<header>
	<h1>Home</h1>
</header>
<main>
	<header>
		<h1>Últimos posts</h1>
	</header>
	<?php foreach ($ultimosPosts as $p): ?>
		<article>
			<!-- <?php print_r($p) ?> -->
			<header>
				<h1>
					<a href="?pag=post&id=<?php echo $p["id"] ?>">
						<?php echo $p["title"] ?>
					</a>
				</h1>
				<p>
				Publicado por <?php echo $p["userName"] ?> en el tópico <?php echo $p["topicName"] ?>
			</p>
		</header>
		<section>
			<?php echo $p["content"] ?>
		</section>
	</article>
	<?php endforeach ?>
</main>

<?php require __DIR__."/partials/footer.php" ?>