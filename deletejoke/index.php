<link rel = "stylesheet" type = "text/css" href="style1.css"/>
<link rel="shortcut icon" href="favicon.ico" type="image/ico" />

<body bgcolor="#f0f0f0">

<?php
include 'magicquotes.inc.php';

require_once 'access.inc.php';
?>

<div class = "head">
<p><h3><a href="../new">NIT JSR ECE 2K12 BATCH UPDATES</h3></a></p>
</div>
<?php
if(!userisLoggedIn())
{
 ?>
<div class = "login">
<h1>Log in</h1>

<form action="" method="post">

<label for="email">
<input type="text" name = "email" placeholder="user name" />
</label>
<label for="password"><input type="password" name = "password" placeholder="password" />
</label>
<input type="hidden" name="action" value="login"/>
<input type="submit" value="Log in" />

</form>



</form>


</div>
<?php
} 
else
{
?>
<div class = "logout">
<form action="" method = "post">

<div>
<?php 
include 'db.inc.php';
$cid = htmlspecialchars($_SESSION['email'],ENT_QUOTES,'UTF-8');
$sql = "SELECT name from students WHERE id = '$cid' UNION SELECT name from cr WHERE userid = '$cid'";
$result1 = mysqli_query($link,$sql);
if (!$result1)
{
$error = 'Error fetching comments: ' . mysqli_error($link);
include 'error.html.php';
exit();
}
?>
<?php 
while($row = mysqli_fetch_array($result1))
{

echo 'WELCOME TO this site!!!!'."    ". $row['name'];
}

?>
<input type = "hidden" name = "action" value = "logout"/>
<input type = "hidden" name = "goto" value = "">
<input type = "submit" value = "Log out"/>
</div>
</form>
</div>
<?php 
}

if(crIsLoggedIn())
{
?>

<div class="crera">
<form action="?adduser" method="post">
<div align="center">
<input type="submit" value="AddUser"/></div>
</form> 
<form action="?deleteuser" method="post">
<div align="center">
<input type = "submit" value="DeleteUser"/>
</div>
</form>
</div>
<?php
}
?>


<?php 
if(isset($_GET['Addcomment']) and $_GET['Addcomment']=='Addcomment')
{
if(userIsLoggedIn())
{
include 'db.inc.php';
$joketext = mysqli_real_escape_string($link, $_GET['text']);
$stuid = mysqli_real_escape_string($link, $_SESSION['email']);
$sql = 'INSERT INTO comments SET
joketext="' . $joketext . '",studentid="'.$stuid.'",
date=NOW()';
if (!mysqli_query($link, $sql))
{
$error = 'Error Updating database: ' . mysqli_error($link);
include 'error.html.php';
exit();
}
header('Location: .');
exit();
}
}

?>
<?php
if (isset($_GET['addjoke']) and crIsLoggedIn())
{
include 'form.html.php';
}
else if(isset($_GET['addjoke']))
{
?>
<p style= "color:red">Please login as CR !! </p>

<?php 
}

if (isset($_GET['adduser']) and crIsLoggedIn())
{
include 'form1.html.php';
}
else if(isset($_GET['adduser']))
{
?>
<p style= "color:red">Please login as CR to add new users!! </p>

<?php 
}

if (isset($_GET['deleteuser']) and crIsLoggedIn())
{
include 'form2.html.php';
}
else if(isset($_GET['deleteuser']))
{
?>
<p style= "color:red">Please login as CR to delete  users!! </p>

<?php 
}


if (isset($_GET['deletejoke']))
{
include 'db.inc.php';
$id = mysqli_real_escape_string($link, $_POST['id']);
$sql = "DELETE FROM joke WHERE id='$id'";
if (!mysqli_query($link, $sql))
{
$error = 'Error deleting joke: ' . mysqli_error($link);
include 'error.html.php';
exit();
}
header('Location: .');
exit();
}


if (isset($_POST['joketext']))
{
include 'db.inc.php';
$joketext = mysqli_real_escape_string($link, $_POST['joketext']);
$authid = mysqli_real_escape_string($link, $_SESSION['email']);

$sql = 'INSERT INTO updates SET
text="' . $joketext . '",
jokedate=NOW(), authorid = "'.$authid.'"';
if (!mysqli_query($link, $sql))
{
$error = 'Error adding submitted update: ' . mysqli_error($link);
include 'error.html.php';
exit();
}
header('Location: .');
exit();
}






if (isset($_POST['AddUser']))
{
include 'db.inc.php';
$stuid = mysqli_real_escape_string($link, $_POST['stuid']);
$stuname = mysqli_real_escape_string($link, $_POST['stuname']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$password = MD5 ($password);
$sql = 'INSERT INTO students SET
id="' . $stuid . '",
password="' . $password . '", name = "'.$stuname.'"';


if (!mysqli_query($link, $sql))
{
$error = 'Error adding the new user: ' . mysqli_error($link);
include 'error.html.php';
exit();
}
header('Location: .');
exit();
}



if (isset($_POST['DeleteUser']))
{
include 'db.inc.php';
$stuid = mysqli_real_escape_string($link, $_POST['stuid']);
$stuname = mysqli_real_escape_string($link, $_POST['stuname']);

$sql = 'DELETE FROM  students WHERE
id="' . $stuid . '" and  name = "'.$stuname.'"';


if (!mysqli_query($link, $sql))
{
$error = 'Error deleting the user: ' . mysqli_error($link);
include 'error.html.php';
exit();
}
header('Location: .');
exit();
}


include 'db.inc.php';
$result = mysqli_query($link, 'SELECT id,text,jokedate,name FROM updates INNER JOIN cr ON authorid = cr.userid ORDER BY jokedate desc');
if (!$result)
{
$error = 'Error fetching jokes: ' . mysqli_error($link);
include 'error.html.php';
exit();
}
$jokes[] = array('id' => '', 'text' =>'', 'name'=>'','jokedate'=>'');
while ($row = mysqli_fetch_array($result))
{
$jokes[] = array('id' => $row['id'], 'text' => $row['text'], 'name'=>$row['name'],'jokedate'=>$row['jokedate']);
}
?>


<div class = "updates">
<?php 
include 'jokes.html.php';
?>
<br>
</div>
<br>

<div class = "form">
<?php 
if(isset($_GET['Addcomment']) and $_GET['Addcomment']=='Addcomment')
{
if(!userIsLoggedIn())
{
?>
<p style="color:red"><b> please login above to add comment here !!!! </b></p>
<?php
}
}
?>
<h2>Post your comments : </h2>
<form action="" method = "GET">
<textarea name = "text" rows = "6" cols = "80" placeholder = "Enter your comment here" required></textarea>
<br>
<input type = "hidden" name = "Addcomment" value = "Addcomment"></input>
<input type = "submit" value = "submit"></input>
</form>


<!--<h3> comments : </h3>-->


<?php include 'comments.html.php';
?>
<div>


