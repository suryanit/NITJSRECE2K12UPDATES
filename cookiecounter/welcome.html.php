<html>
<head>
<title>Cookie counter</title>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
</head>
<body>
<p>
<?php
if ($visits > 1)
{
echo "This is visit number $visits.";
}
else
{
// First visit
echo 'Welcome to my web site! Click here for a tour!';
}
?>
</p>
</body>
</html>