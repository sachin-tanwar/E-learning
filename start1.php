<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>  <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<title>Untitled</title>

<script type="text/javascript">
function validate_required(field,alerttxt)
{
with (field)
{
if (value==null||value=="")
{
alert(alerttxt);
return false;
}
else
{
return true;
}
}
}
function validate_form(thisform)
{
with (thisform)
{
if (validate_required(t,"username must be filled out!")==false)
{
t.focus();
67
return false;
}
else (validate_required(t1,"password must be filled out!")==false)
{
t1.focus();
return false();
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
	     <div class="container">
        <div class="row">
		
		<img src="img/4822376-the-words-online-learning-on-a-chalkboard.jpg" align=right
style='position:absolute;height:300;width:200'></img>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="start1post.php">
                        <h2 class="post-title">
                           e-learning provides
                        </h2>
                        <h3 class="post-subtitle">
                       
                        </h3>
                    </a>
                    <p class="post-meta"> <a href="#"></a> </p>
                </div>
                <hr>
                <div class="post-preview">
                        <h2 class="post-title">
                            <body bgcolor="#81BEF7">
<form action="login.jsp" method="post"onsubmit="return validate_form(
this);">
<h3><font color=red ><i></i></font></h3>
<table>
<tr> <td>Username:</td>
<td><input type="text" name=t></td>
</tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr>
<td >Password:</td>
<td><input type="password" name=t1></td>
</tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><tr><td></td><td></td></tr>
<td>Login Type</td>
<td><select name="x"><option>student</option>
<option>faculty</option>
<option>admin</option></select></td>
</tr>
<tr><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr>
<tr><td><input type=submit value= Login></td><td></td>
<td></td><td><td></td><td></td>
<td> <input type=reset value=Reset></td>
</tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td></tr>
<tr>
<td><a href="register1.php"> New User Login</a></td>
</tr></table>
</form>

                        </h2>
                    <p class="post-meta"> 
                <hr>
                <div class="post-preview">
                    <a href="post.html"> </a>
                        <h2 class="post-title">
                          
                        </h2>
                        <h3 class="post-subtitle">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                   

                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title"> 

                            
                        </h2>
                        <h3 class="post-subtitle">
                            
				
                        </h3>
                    </a>
                    <p class="post-meta"> <a href="#"></a><img src="img/zx.jpg" align=left
style='position:relative;height:194;width:259'></img> </p>
                </div>
                <hr><img src="img/zx.jpg" align=right left=0px
style='position:relative;height:194;width:259'></img>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next"> 
                       <img src="img/zx.jpg" align=right
style='position:relative;height:194;width:259'></img>
                    </li>
                </ul>
            </div>
        </div>
    </div>


<?php

?>

</body>
</html>
