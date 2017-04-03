<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="length" placeholder="Length of the Fibonacci Series" />
			<input type="submit" />
		</form>
		<?php
			if(isset($_POST['length'])) {
				if(is_numeric($_POST['length'])) {
					$a = 0;
					$b = 1;
					echo "<br /> Fibonacci Series:<br /> 0";

					/* Loop the process using "While Loop" */
					while($b <= $_POST['length']) {
						echo " ".$b;
						$temp = $a + $b;
						$a = $b;
						$b = $temp;
					}
				}
			}
		?>
	</body>
</html>
