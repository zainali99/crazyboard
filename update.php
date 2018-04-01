<?php
require "config.class.php";
$s = new crazyboardconfig();
var_dump($s);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Update - <?php echo $s->showname(); ?></title>
	<link rel="stylesheet" type="text/css" href="css/crazyboard.css" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<div class="board">
	<div class="header">
		<?php include_once("templates/headercontent.html") ?>
	</div>


	<nav id="menu">
		<ul>
			<?php include_once("templates/menulinks.html"); ?>
		</ul>
	</nav>
	<div class="main">
		<h1>Update page</h1>

	</div>


	</div>
<?php echo "You are running the CrazyBoard ".$s->printVersion().""; ?>


<script type="text/javascript" src="js/crazyboard.js"></script>

</body>
</html>