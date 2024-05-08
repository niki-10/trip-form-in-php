<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> php tutorial </title>
</head>
<body>
	<div class="container">
		
		this is my first php website
		<br>
		<?php
		$languages = array("python", "c++", "php", "NodeJs");
		$j=count($languages);
		for ($i=0; $i < $j; $i++) { 
			echo $languages[$i];
			echo "<br>";
		}

		foreach($languages as $values){
			echo $values;
			echo "<br>";

		}

		echo "<br>";

		function test(){
			echo "this is test function";
			echo "<br>";
		}

		function test1($sum){
			echo $sum;
			echo "<br>";
		}

		test1(5);
		test();

		?>
 
	</div>
</body>
</html> 