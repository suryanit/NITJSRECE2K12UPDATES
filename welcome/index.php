<?php 
if(!isset($_REQUEST['name']))
    include 'form.html.php';
else
{
$name = $_REQUEST['name'];
if($name == 'Sumanth')
$output = 'Welcome , oh glorious leader !!!';
else
{
$output = 'Welcome to our website,'.$name.'!';
}
include 'welcome.html.php';
}
?>