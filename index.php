<form action="" method="get">
<div><label for="name">Name:
<input type="text" name="name" id="name"/></label></div>
<div><input type="submit" value="GO"/></div>
</form>
<?php  $name = $_REQUEST['name'];
if($name=="Kevin")
echo 'Welcome, oh glorious leader!';
else
echo 'Welcome to our website !!'.htmlspecialchars($name,ENT_QUOTES,'UTF-8').'!';
?>