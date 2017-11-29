<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/deletejoke/helpers.inc.php'; ?>


<html>

<head>
<title>Log In</title>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
</head>
<body>
<h1>Log In</h1>
<p>Please log in to Add a comment here!!!.</p>


<?php if (isset($loginError)): ?>
<p><?php echo htmlout($loginError); ?></p>
<?php endif; ?>

<form action="" method="post">
<div>
<label for="email">UserId: <input type="text" name="email" id="email"/></label>
</div>
<div>
<label for="password">Password: <input type="password" name="password" id="password"/></label>
</div>
<div>
<input type="hidden" name="action" value="login"/>
<input type="submit" value="Log in"/>
</div>
</form>


<p><a href="/deletejoke/index.php">Return to home</a></p>
</body>
</html>