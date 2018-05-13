<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
	<h1>Task for the day</h1>

	<ul>
		<?php foreach ($task as $key => $value) : ?>
			<?php if($key != 'completed') : ?>
				<li><strong><?= ucwords($key); ?></strong>: <?= $value; ?></li>
			<?php else : ?>
				<li><strong><?= ucwords($key); ?></strong>: <?= $value ? 'Complete' : 'Incomplete'; ?></li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
</body>
</html>
