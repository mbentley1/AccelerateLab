<html>
  <head><title>Scale Set Autoscale demo app Accelerate Lab 2</title></head>
  <body>
    <?php $hostname = gethostname(); ?>
    <center>
	  <h1>Scale Set App - <?php echo "$hostname";?></h1>
	</center>
    <br/><br/><br/>
	<ul><ul><ul>
	<form action="do_work.php" method="get">
	  Duration (seconds): <input type="text" name="num" maxlength="4" size="4">
	  <input type="submit" value="Do work">
	</form>
	</ul></ul></ul>
  </body>
</html>