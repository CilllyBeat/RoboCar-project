<!DOCTYPE html>
<html lang="UFT-8">
<head>
	<meta />
	<title>Remote Control for Ultimo </title>
	<link href="CSS/style_sheet.css" rel="stylesheet">
</head>

<body>
	<header>
		<h1>MEC INC BANNER?<h1>
	</header>
	
	<main>
		<form method="post" action ="remote_control.php">
			<input type="submit" value="Strafe Left" name="Sleft">
			<input type="submit" value="Fast Forward" name="fsfwd">
			<input type="submit" value="Strafe Right" name="Sright"><br>
			<input type="submit" value="Left" name="left">
			<input type="submit" value="Forward" name="fwd">
			<input type="submit" value="Right" name="right"><br>
			<input type="submit" value="Reverse Left" name="Rleft">
			<input type="submit" value="Reverse" name="rvs">
			<input type="submit" value="Reverse Right" name="Rright"><br>
			<input type="submit" value="Stop" name="off">
		</form>
		
		<?php
			//creating vairables for easy changes
			$forward = 27;
			$fast_forward = 17;
			$turn_left = 26;
			$turn_right = 18;
			$strafe_right = 6;
			$strafe_left = 5;
			$reverse = 24;
			$reverse_right = 20;
			$reverse_left = 16;
			
			//Setting up GPIO outputs
			$setmode27 = shell_exec ("/usr/local/bin/gpio -g mode $forward out" );
			$setmode17 = shell_exec ("/usr/local/bin/gpio -g mode $fast_forward out" );
			$setmode26 = shell_exec ("/usr/local/bin/gpio -g mode $turn_left out" );
			$setmode18 = shell_exec ("/usr/local/bin/gpio -g mode $turn_right out" );
			$setmode6 = shell_exec ("/usr/local/bin/gpio -g mode $strafe_right out" );
			$setmode5 = shell_exec ("/usr/local/bin/gpio -g mode $strafe_left out" );
			$setmode24 = shell_exec ("/usr/local/bin/gpio -g mode $reverse out" );
			$setmode20 = shell_exec ("/usr/local/bin/gpio -g mode $reverse_right out" );
			$setmode16 = shell_exec ("/usr/local/bin/gpio -g mode $reverse_left out" );
			

			//sets buttons to 1
			if(isset($_POST[fwd])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write $forward 1" );
			}
			elseif(isset($_POST[fsfwd])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write $fast_forward 1" );
			}
			elseif(isset($_POST[left])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write $turn_left 1" );
			}
			elseif(isset($_POST[right])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write $turn_right 1" );
			}
			elseif(isset($_POST[Sright])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write $strafe_right 1" );
			}
			elseif(isset($_POST[Sleft])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write $strafe_left 1" );
			}
			elseif(isset($_POST[rvs])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write $reverse 1" );
			}
			elseif(isset($_POST[Rright])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write $reverse_right 1" );
			}
			elseif(isset($_POST[Rleft])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write $reverse_left 1" );
			}
			//clears GPIOs
			elseif(isset($_POST[off])){
				$gpio_off = shell_exec("usr/local/bin/gpio -g write $forward 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write $fast_forward 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write $turn_left 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write $turn_right 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write $strafe_right 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write $strafe_left 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write $reverse 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write $reverse_right 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write $reverse_left 0" );
			}
		?>
	</main>
</body>
</html>
<!-- 
	*look in to javascript buttons
	*tinker with location of buttons 
	*tinker with layout
	*make variables or GPIO values for easy changes [DONE]
-->
