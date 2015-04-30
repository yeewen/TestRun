<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
	<link rel="stylesheet" type="text/css" href="/style.css"></link>
</head>
<body>

<div id="wrapper">
	<h3>TEST: ADD and SEARCH</h3>
	<br/>
	<form method="post" action="index.php" id="form1">
		<input id="name" name="name" placeholder="Add name"></input>
		<input id="submit" name="submit" type="submit" value="Submit"></input>
	</form>
	<br/>
	<form id="form2" method="get" action="index.php" >
		<input id="userid" name="userid" placeholder="Search with ID"></input>
		<input id="submit" name="submit" type="submit" value="Submit"></input>
	</form>
	<br/>
	<?php include "testcode.php";?>
</div>

<br/>

</body>
</html>