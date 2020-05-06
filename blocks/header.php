<? 

	session_start();
	global $msg;
	global $valid_user;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link type="text/css" rel="stylesheet" href="css/styles.css" />
<title>BlueBug Project Tracker</title>
<script>
function redirect(page)
{
   var pg = page;
   //alert (page);
   document.location = pg;
}

</script>
</head>

<body>
<div class="main">
<div class="header">

</div>
	<ul class="headernav">
      <li> HOME </li>
      <li> HOME </li>
      <li> HOME </li>
      <li> HOME </li>
    </ul>
	<p style="text-align:center">Welcome to the blueBug Tracking System.</p>

<div class="login">
<?
include("includes/auth.php");
if (!(isset($_SESSION['username'])))
{
?>
	<!--<script> location.replace("login.php");</script>-->
	<!--header("Location: login.php");-->
	<form name='form'  action='index.php' method='post' onsubmit='javascript: return validate();'>
		<input type='text' name='username' value="username..." onblur="if(this.value=='') this.value='username...';" onfocus="if(this.value=='username...') this.value='';" />
		<input type='text' name='pass' value="password..." onblur="if(this.value=='') { this.value='password...'};" onfocus="if(this.value=='password...') {this.value='';};" /><input name='login' type='submit' value='login' />
		</form>
<?
}else{
?>

<form name='form'  action='index.php' method='post' onsubmit='javascript: return validate();'>
Welcome <? echo $_SESSION['username']; ?>
<input name='logout' type='submit' value='logout' />
</form>

<?
}
?>
</div>