<!DOCTYPE html>
<html lang="UFT-8">
<head>
	<meta />
	<title>Remote Control for Ultimo </title>
	<link href="CSS/style_sheet.css" rel="stylesheet">
</head>

<body>
	<header>
		<h1>INSERT MEC INC BANNER?<h1>
	</header>
	
	<main>
		<form method="post" action ="remote_control.php">
		#input buttons POSTING to php script
			<input type="submit" value="Forward" name="fwd">
			<input type="submit" value="Fast Forward" name="fsfwd">
			<input type="submit" value="Left" name="left">
			<input type="submit" value="Right" name="right">
			<input type="submit" value="Strafe Right" name="Sright">
			<input type="submit" value="Strafe Left" name="Sleft">
			<input type="submit" value="Reverse" name="rvs">
			<input type="submit" value="Reverse Right" name="Rright">
			<input type="submit" value="Reverse Left" name="Rleft">
			<input type="submit" value="Stop" name="off">
		</form>
		
		<?php
			//Setting up GPIO outputs
			//consider making variables for GPIOs for easy changes
			$setmode27 = shell_exec ("/usr/local/bin/gpio -g mode 27 out" );
			$setmode17 = shell_exec ("/usr/local/bin/gpio -g mode 17 out" );
			$setmode26 = shell_exec ("/usr/local/bin/gpio -g mode 26 out" );
			$setmode18 = shell_exec ("/usr/local/bin/gpio -g mode 18 out" );
			$setmode6 = shell_exec ("/usr/local/bin/gpio -g mode 6 out" );
			$setmode5 = shell_exec ("/usr/local/bin/gpio -g mode 5 out" );
			$setmode24 = shell_exec ("/usr/local/bin/gpio -g mode 24 out" );
			$setmode20 = shell_exec ("/usr/local/bin/gpio -g mode 20 out" );
			$setmode16 = shell_exec ("/usr/local/bin/gpio -g mode 16 out" );
			//sets buttons to 1
			if(isset($_POST[fwd])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write 27 1" );
			}
			elseif(isset($_POST[fsfwd])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write 17 1" );
			}
			elseif(isset($_POST[left])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write 26 1" );
			}
			elseif(isset($_POST[right])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write 18 1" );
			}
			elseif(isset($_POST[Sright])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write 6 1" );
			}
			elseif(isset($_POST[Sleft])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write 5 1" );
			}
			elseif(isset($_POST[rvs])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write 24 1" );
			}
			elseif(isset($_POST[Rright])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write 20 1" );
			}
			elseif(isset($_POST[Rleft])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write 16 1" );
			}
			//clears GPIOs
			elseif(isset($_POST[off])){
				$gpio_off = shell_exec("usr/local/bin/gpio -g write 27 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write 17 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write 26 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write 18 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write 6 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write 5 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write 24 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write 20 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write 16 0" );
			}
		?>
	</main>
</body>
</html>
<!-- 
	*look in to javascript buttons
	*tinker with location of buttons 
	*tinker with layout
	*make variables or GPIO values for easy changes
-->
