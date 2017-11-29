<?php include 'helpers.inc.php';?>
<head>
<title>NIT JSR ECE 2k12 BATCH UPDATES</title>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
</head>
<body>
<p><a href="?addjoke"><h2>Post An Update</a></h2></p>
<p>Here are all the recent updates:</p>
<?php foreach ($jokes as $joke): ?>
<blockquote>
<p>
<b>
<?php 
if($joke['text'] != '')
{
echo bbcodeout1(''.$joke['text'].'');?>
</b>
<?php echo bbcodeout1($joke['jokedate']);?>
(by <?php
echo htmlspecialchars($joke['name'],ENT_QUOTES,'UTF-8');
?>
)
<?php
}
?>
</p>
</blockquote>


<?php endforeach; ?>
</body>
</html>