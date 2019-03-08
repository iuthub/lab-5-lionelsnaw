<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>
		<?php $name = $_REQUEST["Name"];
		$section = $_REQUEST["Section"];
		$credit = $_REQUEST["Credit"];  
		$cardi = $_REQUEST["card"];

		if (!$name || !$section || strlen($credit) != 20 || !$cardi) { ?>
			<h1>Sorry Wrong Data!</h1>
			<a href="buyagrade.php">Try again</a>
		<?php }?>
		

		<p>Name: 
			<?php echo $name; ?>
		</p>
		<p>Section: </p>
		<?php echo $section; ?>
		<p> Credit Card: 
			<?php echo $credit . "(" . $cardi . ")"?>
		</p>

		<?php $info = file_get_contents('sucker.txt');
		echo $info; 
		$file = 'sucker.txt';
		$current = file_get_contents($file);
		file_put_contents($file, $current);	
		echo $file; ?>





	</body>
</html>  