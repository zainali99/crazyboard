<?php
require "/db.php";
?>
<div class="tagboard">
<div>
	<ul>
		<?php
		$query = mysql_query("SELECT * FROM tagboard ORDER BY id DESC");
		
		while($r = mysql_fetch_assoc($query)){
			echo "<li><span class='user'>".$r["nickname"]."</span>:".$r["message"]."</li>";

		}



		?>

	</ul>

</div>

<div>
	<h2>Leave a message...</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >

	<input class="userinput" placeholder="Full Name" type="text" name="a" />
	<textarea class="userinput" placeholder="Write something..." name="b"></textarea>
	<input type="submit" class="userinput btn" value="SUBMIT" name="c">
	</form>
<?php
if(isset($_POST["c"])) {
	$fullname=mysql_real_escape_string(htmlspecialchars($_POST["a"]));
	$msg = mysql_escape_string(htmlspecialchars($_POST["b"]));
	if(empty($fullname) || empty($msg)) {
		echo "EMPTY VALUES";
		exit;
	}

	$query = mysql_query("INSERT INTO tagboard(nickname,message) VALUES('$fullname','$msg')") or die(mysql_errno());
	if($query){
		header("Location: http://localhost");
	}


}


?>
</div>

</div>
