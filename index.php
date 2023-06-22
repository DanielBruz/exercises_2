<?php
			// Nacteni hlavicky
			include 'header.php';
			
			// Cykly pole

			$badass = 'Brienne of Tarth';

			$arr = array(
				"Princes Bubblegum",
				"Imperator Furiosa",
				$badass,
				"Bulbasaur"
			);

			echo '<pre>';
			print_r ( $arr );
			echo '</pre>';

			echo '<ul class="list-group text-left">';
			foreach ($arr as $key => $value)
			{
				echo "<li class=\"list-group-item\">
					<small class=\"text-info\"> $key &hellip;</small>
					$value
					</li>";
			}
			echo '</ul>';

			echo '<br>----<br>';

			while ( $arr )
			{
				echo array_pop($arr);
				if ($arr) echo '<span class="text-warning"> / </span>';
			}

			echo '<br>----<br>';

			echo '<pre>';
			print_r ($arr);
			echo '</pre>';

			echo '<br>----<br>';







		?>