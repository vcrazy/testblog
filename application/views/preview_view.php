<div style="border: 1px solid black;">
	<div>
		Title: <b><?php echo $news['title']; ?></b>
	</div>
	<div>
		Description: <?php echo $news['description']; ?>
	</div>
</div>

<div>
	<?php foreach ($comments as $comment): ?>
		<div>
			Comment: <br />
			From: <?php echo $comment['user_name']; ?>
			(<?php echo $comment['user_email']; ?>) <br />
			Text: <?php echo $comment['comment']; ?>
		</div>
		<hr />
	<?php endforeach; ?>
</div>
