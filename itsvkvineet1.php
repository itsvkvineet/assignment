<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.header{
	width:100%;
	height:200px;

	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}
.menu{
	width:100%;
	height:50px;
	
	background-color:green;
	float:left;
	text-align:center;
	color: #FFF;
		}
		.image{
	width:100%;
	height:300px;
	
	background-image:url(1.jpg);
	float:left;
	text-align:center;
	color: #FFF;
		}

.leftcontent{
	width:49%;
	height:300px;

	background-color:#FFFF66;
	float:left;
	text-align:center;
	color: #F00;
		}
.rightcontent{
	width:49.33%;
	height:300px;
	background-color:#663399;
	float:left;
	text-align:center;
	color: #FFF;
		}
		.footer{
	width:99%;
	height:200px;

	background-color:#99FFFF;
	float:left;
	text-align:center;
	color:#09F;
		}		

</style>
<script language="javascript1.5">
function f1()
{
var ta=parseInt(document.getElementById('ta').value);
var duration=parseInt(document.getElementById('duration').value);
var total=ta +(ta*duration);
document.getElementById('ta').value=total;
}
 </script>
</head>

<body>
<div class="header">
 Header 
</div>
<div class="menu">
 Menu
</div>
<div class="image">
image
</div>
<div class="leftcontent">
<form method="post" >
<select name="city" required="required">
<option value="20000">Fashion design </option>
<option value="40000">Bech </option>
<option value="50000">bca </option>
</select>

<div class ="frontform"><input type="number" name="duration" id="duration" placeholder="duration" onblur="f1()"/></div>
<div class="frontform"><input type="number" name="ta" id="ta" readonly="readonly" placeholder="Total Amount"/></div>
<div class="frontform"><input type="Submit"/></div>
</div>
<div class="rightcontent">
<form method="POST">
<div class="frontform"><input type="text" name="uname" placeholder="Your Name" required="required"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required" /></div>
<div class="frontform"><input type="text" name="contact" placeholder="Your Contact" maxlength="10" required="required"  /></div>
<div class="frontform">Male: <input type="radio" name="gender" value="male" /> |
Fe-Male: <input type="radio" name="gender" value="female" /></div>
<input type="submit" name="submit"  />
</form>
</div>
<div class="footer">
</div>


</body>
</html>
