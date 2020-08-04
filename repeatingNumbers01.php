
<!DOCTYPE html>
<html>
  <head>
    <title>Estudo sobre conjuntos de números</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		
		<style>
			table {
				border-collapse: collapse;
			}
			td {
				border: 1px solid black;
			}
			
			table {
				margin-top: 50px;
				margin-bottom: 50px;
				margin-right: 50px;
				margin-left: 50px;
			}
			
			h1 {
				margin-top: 50px;
				margin-left: 80px;
			}
			
			p {
				margin-top: 10px;
				margin-left: 80px;
			}
			.redText 
			{ 
					color: red; 
			} 
			.blueText 
			{ 
					color: blue; 
			} 

		</style>
  </head>
  <body>
		<h1>
			Estudo sobre conjuntos de números
		</h1>
		<p>
			Proposta: Conjuntos de 15 números entre 1 e 50, que possuam apenas 11 algarismos em comum com o primeiro conjunto.
		</p>
		<p>
			<u>Legenda:</u><br>
		</p>
		<p><span class="blueText">AZUL</span>= Conjunto base</p>
		<p><span class="redText">VERMELO</span>= Números que estão contidos no conjunto base</p>
		

	<?php
		$totalNumbers= 15;
		$arrayBeingProcessed= array(array(), array(), array(), array(), array(), 
																array(), array(), array(), array(), array(), 
																array(), array(), array(), array(), array(), 
																array(), array(), array(), array(), array(), 
																array(), array(), array(), array(), array());
		$x = 0;
		while ($x < 15) {
			$newRandomNumber= rand (1 , 50);
			if (in_array($newRandomNumber, $arrayBeingProcessed[0])) {
				// Conjunto já contém	este número
			}
			else {
				array_push($arrayBeingProcessed[0], $newRandomNumber);
				$x++;
			}
			// Mostrar iteração
			//echo 'Iteração: ' . $x . '<br>' . print_r($arrayBeingProcessed) . '<br>';
		}

		sort($arrayBeingProcessed[0]);
		
		echo '<div class="row">';
		
		// start of cool-md-4
		echo '<div class="col-md-2">';
		$i = 0;
		echo '<table>';
		for ($y = 0; $y < 3; $y++) {
			echo '<tr>';
			for ($x = 0; $x < 5; $x++) {
				echo '<td style="padding:10px;text-align:center;color:blue;">';
				echo $arrayBeingProcessed[0][$i];
				echo '</td>';
				$i++;
			}
			echo '</tr>';
		}
		echo '</table>';
		
		// end of col-md-2
		echo '</div>';
		
		
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		for ($tab = 1; $tab <= 5; $tab++) {
			$repetingCount = 11;
			$x = 0;
			while ($x < 15) {
				$newRandomNumber= rand (1 , 50);
				if ($repetingCount > 0) {
					if (in_array($newRandomNumber, $arrayBeingProcessed[0])) {
						if (in_array($newRandomNumber, $arrayBeingProcessed[$tab])) {
							// Conjunto já contém	este número
						}
						else {
							array_push($arrayBeingProcessed[$tab], $newRandomNumber);
							$x++;
							$repetingCount--;
							//echo 'new repeated number<br>';
						}
					}
				}
				else {
					if (!in_array($newRandomNumber, $arrayBeingProcessed[0])) {
						if (in_array($newRandomNumber, $arrayBeingProcessed[$tab])) {
							// Conjunto já contém	este número
						}
						else {
							array_push($arrayBeingProcessed[$tab], $newRandomNumber);
							$x++;
							//echo 'new NOT repeated number<br>';
						}
					}
				}


				// Mostrar iteração
				//echo 'Iteração: ' . $x . '<br>' . print_r($arrayBeingProcessed) . '<br>';
			}

			sort($arrayBeingProcessed[$tab]);

			// start of cool-md-4 
			echo '<div class="col-md-2">';
			$i = 0;
			echo '<table>';
			for ($y = 0; $y < 3; $y++) {
				echo '<tr>';
				for ($x = 0; $x < 5; $x++) {
					if (in_array($arrayBeingProcessed[$tab][$i], $arrayBeingProcessed[0])) {
						//echo '<script>console.log("contains");</script>';
						echo '<td style="padding:10px;text-align:center;color:red;">';
						echo $arrayBeingProcessed[$tab][$i];
					}
					else {
						//echo '<script>console.log("does not contains");</script>';
						echo '<td style="padding:10px;text-align:center;color:black;">';
						echo $arrayBeingProcessed[$tab][$i];
					}
					echo '</td>';
					$i++;
				}
				echo '</tr>';
			}
			echo '</table>';

			// end of col-md-2
			echo '</div>';
		}
		echo '</div>';
		
		
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo '<div class="row">';
		for ($tab = 6; $tab <= 11; $tab++) {
			$repetingCount = 11;
			$x = 0;
			while ($x < 15) {
				$newRandomNumber= rand (1 , 50);
				if ($repetingCount > 0) {
					if (in_array($newRandomNumber, $arrayBeingProcessed[0])) {
						if (in_array($newRandomNumber, $arrayBeingProcessed[$tab])) {
							// Conjunto já contém	este número
						}
						else {
							array_push($arrayBeingProcessed[$tab], $newRandomNumber);
							$x++;
							$repetingCount--;
							//echo 'new repeated number<br>';
						}
					}
				}
				else {
					if (!in_array($newRandomNumber, $arrayBeingProcessed[0])) {
						if (in_array($newRandomNumber, $arrayBeingProcessed[$tab])) {
							// Conjunto já contém	este número
						}
						else {
							array_push($arrayBeingProcessed[$tab], $newRandomNumber);
							$x++;
							//echo 'new NOT repeated number<br>';
						}
					}
				}


				// Mostrar iteração
				//echo 'Iteração: ' . $x . '<br>' . print_r($arrayBeingProcessed) . '<br>';
			}

			sort($arrayBeingProcessed[$tab]);

			// start of cool-md-4 
			echo '<div class="col-md-2">';
			$i = 0;
			echo '<table>';
			for ($y = 0; $y < 3; $y++) {
				echo '<tr>';
				for ($x = 0; $x < 5; $x++) {
					if (in_array($arrayBeingProcessed[$tab][$i], $arrayBeingProcessed[0])) {
						//echo '<script>console.log("contains");</script>';
						echo '<td style="padding:10px;text-align:center;color:red;">';
						echo $arrayBeingProcessed[$tab][$i];
					}
					else {
						//echo '<script>console.log("does not contains");</script>';
						echo '<td style="padding:10px;text-align:center;color:black;">';
						echo $arrayBeingProcessed[$tab][$i];
					}
					echo '</td>';
					$i++;
				}
				echo '</tr>';
			}
			echo '</table>';

			// end of col-md-2
			echo '</div>';
			
			
		}
		echo '</div>';
		
		
		
		
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo '<div class="row">';
		for ($tab = 12; $tab <= 17; $tab++) {
			$repetingCount = 11;
			$x = 0;
			while ($x < 15) {
				$newRandomNumber= rand (1 , 50);
				if ($repetingCount > 0) {
					if (in_array($newRandomNumber, $arrayBeingProcessed[0])) {
						if (in_array($newRandomNumber, $arrayBeingProcessed[$tab])) {
							// Conjunto já contém	este número
						}
						else {
							array_push($arrayBeingProcessed[$tab], $newRandomNumber);
							$x++;
							$repetingCount--;
							//echo 'new repeated number<br>';
						}
					}
				}
				else {
					if (!in_array($newRandomNumber, $arrayBeingProcessed[0])) {
						if (in_array($newRandomNumber, $arrayBeingProcessed[$tab])) {
							// Conjunto já contém	este número
						}
						else {
							array_push($arrayBeingProcessed[$tab], $newRandomNumber);
							$x++;
							//echo 'new NOT repeated number<br>';
						}
					}
				}


				// Mostrar iteração
				//echo 'Iteração: ' . $x . '<br>' . print_r($arrayBeingProcessed) . '<br>';
			}

			sort($arrayBeingProcessed[$tab]);

			// start of cool-md-4 
			echo '<div class="col-md-2">';
			$i = 0;
			echo '<table>';
			for ($y = 0; $y < 3; $y++) {
				echo '<tr>';
				for ($x = 0; $x < 5; $x++) {
					if (in_array($arrayBeingProcessed[$tab][$i], $arrayBeingProcessed[0])) {
						//echo '<script>console.log("contains");</script>';
						echo '<td style="padding:10px;text-align:center;color:red;">';
						echo $arrayBeingProcessed[$tab][$i];
					}
					else {
						//echo '<script>console.log("does not contains");</script>';
						echo '<td style="padding:10px;text-align:center;color:black;">';
						echo $arrayBeingProcessed[$tab][$i];
					}
					echo '</td>';
					$i++;
				}
				echo '</tr>';
			}
			echo '</table>';

			// end of col-md-2
			echo '</div>';
			
			
		}
		echo '</div>';
		
		
		
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		echo '<div class="row">';
		for ($tab = 18; $tab <= 23; $tab++) {
			$repetingCount = 11;
			$x = 0;
			while ($x < 15) {
				$newRandomNumber= rand (1 , 50);
				if ($repetingCount > 0) {
					if (in_array($newRandomNumber, $arrayBeingProcessed[0])) {
						if (in_array($newRandomNumber, $arrayBeingProcessed[$tab])) {
							// Conjunto já contém	este número
						}
						else {
							array_push($arrayBeingProcessed[$tab], $newRandomNumber);
							$x++;
							$repetingCount--;
							//echo 'new repeated number<br>';
						}
					}
				}
				else {
					if (!in_array($newRandomNumber, $arrayBeingProcessed[0])) {
						if (in_array($newRandomNumber, $arrayBeingProcessed[$tab])) {
							// Conjunto já contém	este número
						}
						else {
							array_push($arrayBeingProcessed[$tab], $newRandomNumber);
							$x++;
							//echo 'new NOT repeated number<br>';
						}
					}
				}


				// Mostrar iteração
				//echo 'Iteração: ' . $x . '<br>' . print_r($arrayBeingProcessed) . '<br>';
			}

			sort($arrayBeingProcessed[$tab]);

			// start of cool-md-4 
			echo '<div class="col-md-2">';
			$i = 0;
			echo '<table>';
			for ($y = 0; $y < 3; $y++) {
				echo '<tr>';
				for ($x = 0; $x < 5; $x++) {
					if (in_array($arrayBeingProcessed[$tab][$i], $arrayBeingProcessed[0])) {
						//echo '<script>console.log("contains");</script>';
						echo '<td style="padding:10px;text-align:center;color:red;">';
						echo $arrayBeingProcessed[$tab][$i];
					}
					else {
						//echo '<script>console.log("does not contains");</script>';
						echo '<td style="padding:10px;text-align:center;color:black;">';
						echo $arrayBeingProcessed[$tab][$i];
					}
					echo '</td>';
					$i++;
				}
				echo '</tr>';
			}
			echo '</table>';

			// end of col-md-2
			echo '</div>';
			
			
		}
		echo '</div>';

	?>
		
  </body>
</html>
