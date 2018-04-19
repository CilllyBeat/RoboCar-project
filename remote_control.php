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
			$setmode__ = shell_exec ("/usr/local/bin/gpio -g mode __ out" );
			$setmode__ = shell_exec ("/usr/local/bin/gpio -g mode __ out" );
			$setmode__ = shell_exec ("/usr/local/bin/gpio -g mode __ out" );
			$setmode__ = shell_exec ("/usr/local/bin/gpio -g mode __ out" );
			$setmode__ = shell_exec ("/usr/local/bin/gpio -g mode __ out" );
			$setmode__ = shell_exec ("/usr/local/bin/gpio -g mode __ out" );
			$setmode__ = shell_exec ("/usr/local/bin/gpio -g mode __ out" );
			$setmode__ = shell_exec ("/usr/local/bin/gpio -g mode __ out" );
			$setmode__ = shell_exec ("/usr/local/bin/gpio -g mode __ out" );
			//sets buttons to 1
			if(isset($_POST[fwd])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write __ 1" );
			}
			elseif(isset($_POST[fsfwd])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write __ 1" );
			}
			elseif(isset($_POST[left])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write __ 1" );
			}
			elseif(isset($_POST[right])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write __ 1" );
			}
			elseif(isset($_POST[Sright])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write __ 1" );
			}
			elseif(isset($_POST[Sleft])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write __ 1" );
			}
			elseif(isset($_POST[rvs])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write __ 1" );
			}
			elseif(isset($_POST[Rright])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write __ 1" );
			}
			elseif(isset($_POST[Rleft])){
				$gpio_on = shell_exec ("/usr/local/bin/gpio -g write __ 1" );
			}
			//clears GPIOs
			elseif(isset($_POST[off])){
				$gpio_off = shell_exec("usr/local/bin/gpio -g write __ 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write __ 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write __ 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write __ 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write __ 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write __ 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write __ 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write __ 0" );
				$gpio_off = shell_exec("usr/local/bin/gpio -g write __ 0" );
			}
		?>
	</main>
</body>
</html>
<!-- 
	*look in to javascript buttons
	*
-->
