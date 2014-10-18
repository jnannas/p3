<!DOCTYPE html>
<html>
<head>

	<title>Lorem Impsum Generator</title>
	<meta charset='utf-8'>

	<link rel='stylesheet' href='/css/style.css' type='text/css'>

</head>
<body>
	<a href='/'>&larr; Back to Home </a>

	<h1>Lorem Impsum Generator</h1>
	<p>Please input the number of paragraphs you would like:</p>
	
	<form method='POST'>

		<label for="paragraphs">Paragraphs</label>
		<input maxlength="2" name-"paragraphs" type='text' value="2" id="paragraphs"> (Max:99)
		<br/>
		<br/>
		<input type="submit" value="Generate">

	</form>

	<?php 

	$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);
?>

</body>
</html>