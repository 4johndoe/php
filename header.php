<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<?php 
require_once "functions.php"; 
$userstr = ' (Guest)';
if (isset($_SESSION['user'])) 
{
	$user = $_SESSION['user'];
	$loggedin = TRUE;
	$userstr = " ($user)";
}
else $loggedin = FALSE;
?>

<head>
	<meta charset="UTF-8">
	<title><?php echo $appname . $userstr; ?></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center>
		<canvas id="logo" width='624' height='96'>
			<?php echo $appname; ?>
		</canvas>
	</center>
	<div class="appname"><?php echo $appname . $userstr; ?></div>
	<script src="javascript.js"></script>
	<?php if ($loggedin) 
	{
		echo 
		"<br><ul class=menu'>" . 
		"<li><a href='members.php?view=$user'>Home</a></li>" .
		"<li><a href=""></a></li>" .
		"<li><a href=""></a></li>" .
		"<li><a href=""></a></li>" .
		"<li><a href=""></a></li>" .
		"<li><a href=""></a></li></ul><br>";
	} 
	?>
</body>
</html>
