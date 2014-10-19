<!DOCTYPE html>
<html>
<head>

	<title>Random User Generator</title>
	<meta charset='utf-8'>

	<link rel='stylesheet' href='/css/style.css' type='text/css'>

</head>
<body>
	<a href='/'>&larr; Back to Home </a>

	<h1>Random User Generator</h1>
	
	<form method='POST'>

		<label for="users">How many users:</label>
		<input maxlength="2" name="users" type='text' value="<?php echo $user ?>" id="users"> (Max:99)
		<p>Include:</p>
		<input type="checkbox" name="Birthdate" value="Birthdate">Birthdate
		<br/>
		<input type="checkbox" name="Profile" value="Profile">Profile
		<br/>
		<br/>
		<input type="submit" value="Generate">

	</form>
	<br/>

	<?php
		$faker = Faker\Factory::create();

		//For ($i=0, $i < $user)
		echo $faker->name;
		echo $faker->address;
	?>

</body>
</html>