<!DOCTYPE html>
<html>
<head>

	<title>Lorem Impsum Generator</title>
	<meta charset='utf-8'>

	<link rel='stylesheet' href='' type='text/css'>

</head>
<body>
	<a href='/'>&larr; Back to Home </a>

	<h1>Lorem Impsum Generator</h1>
	<p>Please input the number of paragraphs you would like:</p>
	
	<form method='POST'>

	</form>

	<?php 

	$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);
?>

</body>
</html>