<?php foreach ($news as $single_news): ?>
	<div style="border: 1px solid black;">
		<div>
			Title: <b><?php echo $single_news['title']; ?></b>
		</div>
		<div>
			Description: <?php echo $single_news['description']; ?>
		</div>
	</div>
<?php endforeach; ?>
