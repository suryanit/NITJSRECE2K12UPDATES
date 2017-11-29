<head>
<title>Delete User</title>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
<style type="text/css">
div.deleteuser
{
border :3px solid #3399cc;
padding:10px;
width:700px;
border-radius:5px;
}
div.deleteuser input[type="submit"]{
  width:13%;
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

div.deleteuser 
input[type="submit"]:hover{
  background:#2288bb;
}
div.deleteuser 
input[type="text"]{width:270px;height:30px;
 
}

</style>

</head>
<body>

<div align=left class = "deleteuser">
<form action="" method="post">
<p><b> Enter the details of the user to delete :-</b></p>
<label for="stuid" >
<input type = "text" id="stuid" name="stuid" required placeholder="Student Id"/></label>
<label for="stuname">
<input type = "text" id="stuname" name="stuname" required placeholder="Student Name"/></label>

<input type = "hidden" name = "DeleteUser" value = "1"/>
<input type="submit" value="DeleteUser"/>
</form>
<form action = "../deletejoke/" method = post>
<input type = "hidden" name = "cancel" value = "1"/>
<div align = center>
<input type="submit" value="cancel"/>
</div>
</form>
</div>
</body>
</html>