<head>
<title>Add User</title>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
<style type="text/css">
div.adduser
{
border :3px solid #3399cc;
padding:10px;
width:700px;
border-radius:5px;
}
div.adduser input[type="submit"]{
  width:13%;
  background:#3399cc;
  border:0;
  padding:3px;
  font-family:'Open Sans',sans-serif;
 margin-top:-10px; font-size:100%;
  color:#fff;
  cursor:pointer;
  transition:background .3s;
  -webkit-transition:background .3s;
}

div.adduser 
input[type="submit"]:hover{
  background:#2288bb;
}
div.adduser 
input[type="text"]{width:225px;height:30px;
 
}
</style>

</head>
<body>

<div align=left class = "adduser">
<form action="" method="post">
<p><b> Enter the details of the user to Add :-</b></p>
<label for="stuid" >
<input type = "text" id="stuid" name="stuid" required="required" placeholder="Student id"/></label>
<label for="stuname">
<input type = "text" id="stuname" name="stuname" required="required" placeholder = "Student name"/></label>
<label for="password">
<input type = "text" id="password" name="password" required="required" placeholder = "Password"/></label>
<input type = "hidden" name = "AddUser" value = "1"/>
<br><br>
<div align = left>
<input type="submit" value="AddUser"/>
</div>
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