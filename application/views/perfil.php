<!DOCTYPE html>
<html>
<head>
	<title>Panel Principal</title>
</head>
<body>

<p>Aqui va el panel</p>
<ul>
	<?php foreach($menu as $item): ?>
		<li><a href="<?=$item['url']?>"><?=$item['title'] ?></a></li>
	<?php endforeach; ?>
</ul>
</body>
</html>
