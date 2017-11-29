<head>
<title>Add Joke</title>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
<style type="text/css">
div.add
{
border : 3px solid #3399cc ;
width:700px;
padding : 10px;
border-radius:5px;
}
div.add textarea {
margin-top:5px;
margin-bottom:4px;
display: block;
width:700px;
}
div.add input[type="submit"]{
  width:10%;
  background:#3399cc;
  border:0;
  padding:3px;
  font-family:'Open Sans',sans-serif;
 margin:0px; font-size:100%;
  color:#fff;
  cursor:pointer;
  transition:background .3s;
  -webkit-transition:background .3s;
}

div.add 
input[type="submit"]:hover{
  background:#2288bb;
}


</style>

</head>
<body>
<div class = "add">
<form action="?" method="post">
<label for="joketext">
<textarea rows = "3" cols = "65" id="joketext" name="joketext" placeholder="Enter the update here" required></textarea></label>
<input type="submit" value="Add"/>
</form>
<form action = "../deletejoke/" method = post>
<div align = center>
<input type = "hidden" name = "cancel" value = "1"/>
<input type="submit" value="cancel"/>
</div>
</div>
</form>
</div>
</body>
</html>