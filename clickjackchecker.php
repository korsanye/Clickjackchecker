<?php
if (isset($_POST["value"]))
	{
		$page = $_POST["value"];
		echo $page;
	}
	
	else 
	{
		$page = null;
		echo "please enter url and click submit";
	}
?>

<h1>Click Jack Checker</h1>

<form method="post" action="">
<input type="text" name="value">
<input type="submit">
<iframe align="center" width="100%" height="100%" src="<?=$page;?>" frameborder="yes" scrolling="yes" name="myIframe" id="myIframe"> </iframe>
</form>
</body>
</html>
