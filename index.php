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

			$directors = [
				[
					'id' => 1,
					'first_name' => 'Edgar',
					'last_name' => 'Wright',
					'country' => 'United Kingdom',
					'birthdate' => '1974-04-18',
				],
				[
					'id' => 2,
					'first_name' => 'Jim',
					'last_name' => 'Jarmusch',
					'country' => 'United States',
					'birthdate' => '1953-01-22',
				],
				[
					'id' => 3,
					'first_name' => 'Leos',
					'last_name' => 'Carax',
					'country' => 'France',
					'birthdate' => '1960-11-22',
				],
				[
					'id' => 4,
					'first_name' => 'Ingmar',
					'last_name' => 'Bergman',
					'country' => 'Sweden',
					'birthdate' => '1918-07-14',
				],
				[
					'id' => 5,
					'first_name' => 'Andrej',
					'last_name' => 'Tarkovskij',
					'country' => 'Russia',
					'birthdate' => '2000-10-10',
				],
			];

			foreach ($directors as $director) {
				foreach ($director as $key => $value)
				{
					echo $key . ': ' . $value . '<br>';
				}
				echo '<br>';
			}


		?>