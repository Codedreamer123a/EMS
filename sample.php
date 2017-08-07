<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
<script type="text/javascript">
	function show(){
		ducoment.getElementById('sam').innerHTML="hehehhe";
	}
</script>
</head>
<body>
	<form action="livesearch.php?id=<?php echo "15" ?>" method="get">
		<input type="text" id="idnum" />
		<input type="submit" value="submit" onclick="show();"/>
	</form>
	<p id="sam"></p>
</body>
</html>