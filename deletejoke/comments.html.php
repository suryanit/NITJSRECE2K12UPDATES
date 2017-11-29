<body bgcolor = white>
<?php 
include $_SERVER['DOCUMENT_ROOT'].'deletejoke/magicquotes.inc.php';
include $_SERVER['DOCUMENT_ROOT'].'deletejoke/db.inc.php';


$sql = 'SELECT * FROM comments ORDER BY date desc';

$result = mysqli_query($link,$sql);

if (!$result)
{
$error = 'Error fetching jokes: ' . mysqli_error($link);
include 'error.html.php';
exit();
}
$comments[] = array('id'=>'' ,'date'=>'','text'=>'');
while($row = mysqli_fetch_array($result))
{
$comments[] = array('id' => $row['studentid'] , 'date' => $row['date'], 'text' => $row['joketext']);
}
?>
<p><b> Comments : </b></p>
<?php foreach($comments as $comment): ?>


<blockquote>
</p>
<b> <?php echo bbcodeout1( $comment['text']);?></b>


<?php $cid = htmlspecialchars($comment['id'],ENT_QUOTES,'UTF-8');
if($cid=='sumanth')
{
echo bbcodeout1($comment['date']);?>(By <?php echo $cid;?>)
<?php 
}
$sql = "SELECT name FROM students where id = '$cid'" ;
$result1 = mysqli_query($link,$sql);

if (!$result1)
{
$error = 'Error fetching comments: ' . mysqli_error($link);
include 'error.html.php';
exit();
}
?>
<p>
<?php 
while($row = mysqli_fetch_array($result1))
{
echo bbcodeout1($comment['date']);?>(By <?php echo htmlspecialchars($row['name'],ENT_QUOTES,'UTF-8');?>)

<?php 
}
?>
</p>
</blockquote>
<br>

<?php endforeach;?>
</body>

