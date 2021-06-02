	<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora con PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Armenta_Gamaliel_Actividad_2.css">
	</head>
	<body>
		<div align="center">
			<header><h1>Calculadora</h1></header>
		</div>
		<div align="center">
			<form method="post">
				<table bgcolor="peru" border="1">
						<tr>
							<td class="letra" align="center">Número 1</td>
							<td></td>
							<td class="letra" align="center">Número 2</td>
						</tr>
						<tr>
							<td><input type="text" name="operando1"></td>
							<td>
								<select name="operador">
									<option value="suma">+</option>
									<option value="resta">-</option>
									<option value="multiplicacion">*</option>
									<option value="division">/</option>
								</select>
							</td>
							<td><input type="text" name="operando2"></td>
							<td><input type="submit" name="submit" value="Calcular"></td>
							<br>
						</tr>
				</table>	
			</form>
		</div>

		<br>

		<div align="center">
			<?php
				if (isset($_POST['operando1']) || isset($_POST['operando2'])) {
					$operando1=$_POST['operando1'];
					$operando2=$_POST['operando2'];
				}

				foreach ($_POST as $clave => $value) {
					if ($value=='suma') {
						$suma = $operando1+$operando2;
						echo "El resultado de la suma es:".$suma;
						
					}
					if ($value=='resta') {
						$resta = $operando1-$operando2;
						echo "El resultado de la resta es:".$resta;
						
					}
					if ($value=='multiplicacion') {
						$multiplicacion = $operando1*$operando2;
						echo "El resultado de la multiplicación es:".$multiplicacion;
						
					}
					if ($value=='division') {

							echo "El resultado de la división es:".$division;
						}
				}

			?>
		</div>
	</body>
</html>