<head>
<title>List of Jokes</title>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
</head>
<body>
<p><a href="?addjoke">Add your own joke</a></p>
<p>Here are all the jokes in the database:</p>

<?php foreach ($jokes as $joke): ?>
<blockquote><p>
<?php echo htmlspecialchars($joke, ENT_QUOTES, 'UTF-8'); ?>
</p></blockquote>
<?php endforeach; ?>
</body>
</html>