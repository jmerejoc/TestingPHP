<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

</head>
<body>
<script language="JavaScript" type="text/JavaScript">
function logout()
{
$.get('logout.php', function() {
alert("the server page executed");
//Here you may do further things.
window.location = window.location;
});
}
</script>
<?php

if($_POST['username'] =='admin' && $_POST['pass']=='admin')
{
session_start();
$_SESSION['username'] = $_POST['username'];
if($_SESSION['username']==true){?>
<div data-role="page" id="home">
<div data-role="header" >
<h1>This is header
<?php if(isset($_SESSION['username'])==true){?><tr>
<td><a id="killsession" href="" onclick="javascript:logout();">logout</a></td>
</tr><?php } ?> </h1>
</div>
<div data-native-menu ="nav">
<tr>
<td><a href="#home">home</a></td>
<td><a href="#about">about us</a></td>
</tr>
</div>
<div data-role="content">
<ul id="vegetable-seeds">
<li data-spacing="10cm" data-sowing-time="March to June">Carrots</li>
<li data-spacing="30cm" data-sowing-time="February to March">Celery</li>
<li data-spacing="3cm" data-sowing-time="March to September">Radishes</li>
</ul>
<p>Widget reference Test drive every component in the library, and easily build pages by copying and pasting the markup configuration you need.</p>
<p>this is home one more paragraph tags</p>
</div>
<div data-role="footer"  >
<h4>this is home Footer copy right</h4>
</div>
</div>
<div data-role="page" id="about">
<div data-role="header"  >
<h1>This is header<?php if(isset($_SESSION['username'])==true){?><tr>
<td><a id="killsession" href="" onclick="javascript:logout();">logout</a></td>
</tr><?php } ?></h1>
</div>
<div data-role="nav">
<tr>
<td><a href="#home">home</a></td>
<td><a href="#about">about us</a></td>
</tr>
</div>
<div data-role="content">
<p>jQuery Mobile is a touch-optimized HTML5 UI framework designed to make sites and apps that are accessible on all popular smartphone, tablet and desktop devices.</p>
<p>this is about  one more paragraph tags</p></div>
<div data-role="footer"  >
<h4>this is about Footer copy right</h4>
</div>
</div>
<?php }} ?><div data-role="page" id="login">
<div data-role="header"  >
<h1>This is Login page </h1>
</div>
<div data-role="content">
<div data-role="fieldcontain">
<form action="login.php" method="POST" data-ajax="false">
<fieldset>
<div data-role="fieldcontain">
<label for="name">USERNAME:</label>
<input type="text" name="username" id="name" value="">
<label for="password">Password:</label>
<input id="password" type="password" value="" name="pass">
</div>
<button value="submit-value" name="submit" data-theme="b" type="submit" aria-disabled="false">Submit</button>
</div>
</fieldset>
</form>
</div>
<div data-role="footer"  >
<h4>this is about Footer copy right</h4>
</div>
</div>
</body>
</html>
