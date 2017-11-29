<?php include_once $_SERVER['DOCUMENT_ROOT'] .
'/deletejoke/helpers.inc.php'; ?>

<head>
<title>Manage Authors</title>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
</head>
<body>
<h1>Manage Authors</h1>
<p><a href="?add">Add new author</a></p>
<ul>
<?php foreach ($authors as $author): ?>
<li>
<form action="" method="post">
<div>
<?php htmlout($author['name']); ?>
<input type="hidden" name="id" value="<?php
echo $author['id']; ?>"/>
<input type="submit" name="action" value="Edit"/>
<input type="submit" name="action" value="Delete"/>
</div>
</form>
</li>
<?php endforeach; ?>
</ul>
<p><a href="..">Return to JMS home</a></p>
<?php include '../logout.inc.html.php'; ?>
</body>
</html>