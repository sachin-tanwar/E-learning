<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title><link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript">
70
function validate_email(field,alerttxt)
{
with (field)
{
apos=value.indexOf("@");
dotpos=value.lastIndexOf(".");
if (apos<1||dotpos-apos<2)
{
alert(alerttxt);
return false;
}
else {return true;}
}
}
function validate_required(field,alerttxt)
{
with (field)
{
if (value==null||value=="")
{
alert(alerttxt);return false;
}
else
{
71
return true;
}
}
}
function validate_form(thisform)
{
with (thisform)
{
if(validate_required(student name,"User Name must be entered") ==fa
lse )
{
uname.focus();
return false;
}
else if(validate_required(uid,"User Id must be filled")==false){
uid.focus();
return false;
}
else if(validate_required(pwd,"Password must be filled")==false
){
pwd.focus();
return false;
}else if(validate_required(cpwd,"Confirm Password must be filled")=
=false){
cpwd.focus();
72
return false;
}
/* else if(validate_required(qual,"Qualification must be filled")
==false){
qual.focus();
return false;
}
*/
else if(validate_required(pno,"Phone Number must be filled")==false)
{
pno.focus();
return false;
}
else if (validate_email(mail,"Not a valid e-mail address!")==fal
se)
{
mail.focus();
return false;
}
else if(validate_required(addr,"Address1 must be filled")==false)
{
addr.focus();
return false;
}
else if(validate_required(city,"City must be filled")==fals
e)
{
city.focus();
73
return false;
}
}
}
</script>
</head>

<body> 

	    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
		
	    <ul class="nav navbar-nav navbar-right" >
                    <li >
                        <a href="start1.php">Home</a>
                    </li>
                    <li>
                        <a href="start1about.php">About</a>
                    </li>
                    <li>
                        <a href="start1post.php">Sample Post</a>
                    </li>
                    <li>
                        <a href="start1contact.php">Contact</a>
                    </li>
                </ul>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>stud-e</h1>
                        <hr class="small">
                        <span class="subheading">lets make it simple</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<center style="color:#000066"><h2>Registration Form</h2></center> <hr
>
<form action="start1.php" method="post" onsubmit="return validat
e_form(this)"; >
<table align="center">
<tr><td></td><td></td></tr>
<tr>
<td>Student Name : </td>
<td><input type=text name=uname /></td>
</tr>
<tr>
<td>User Id </td>
<td><input type=text name=uid /></td>
</tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>

<tr>
<td>Password :</td>
<td><input type="password" name="pwd" /></td>
</tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr>
<td>Confirm Password :</td>
<td><input type="password" name="cpwd" /></td>
</tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr>
<td>Phone Number</td>
<td><input type="text" name="pno"
onselect="passwordValidation(pwd,cpwd);" /></td>
</tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr>
<td>Email :</td>
<td><input type="text" name="mail" /></td>
</tr>
<tr><td></td><td></td></tr>

<tr><td></td><td></td></tr>
<tr>
<td>Adderss</td>
<td><input type="text" name="addr" /></td>
</tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr>
<td>City</td>
<td><input type="text" name=city /></td>
</tr>
<tr><td></td><td><input type="submit" value="Register" 
></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
</table>
</form>

<?php

?>

</body>
</html>
