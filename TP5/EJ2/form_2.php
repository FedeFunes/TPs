<html>
	<head>
	</head>
	<body>
		<form action="resultados.php" method="post">
			<?php
				$zona = $_POST["zona"];

				switch ($zona) {
					case "noroeste":
			?>
						<select name="provincia">
							<option value="jujuy" selected>Jujuy</option>
							<option value="salta">Salta</option>
							<option value="tucuman">Tucuman</option>
							<option value="catamarca">Catamarca</option>
							<option value="la rioja">La Rioja</option>
							<option value="santiago del estero">Santiago del Estero</option>
						</select>
			<?php
						break;
					
					case "cuyo":
			?>
						<select name="provincia">
							<option value="mendoza" selected>Mendoza</option>
							<option value="san juan">San Juan</option>
							<option value="san luis">San Luis</option>
						</select>
			<?php
						break;

					case 'litoral':
			?>
						<select name="provincia">
							<option value="misiones" selected>Misiones</option>
							<option value="corrientes">Corrientes</option>
							<option value="entre rios">Entre R&iacuteos</option>
							<option value="formosa">Formosa</option>
							<option value="chaco">Chaco</option>
							<option value="santa fe">Santa F&eacute</option>
						</select>
			<?php
						break;

					case 'centro':
			?>	
						<select name="provincia">
							<option value="cordoba" selected>Cordoba</option>
							<option value="buenos aires">Buenos Aires</option>
						</select>
			<?php
						break;

					case 'patagonia':
			?>
						<select name="provincia">
							<option value="neuquen" selected>Neuqu&eacuten</option>
							<option value="rio negro">R&iacuteo Negro </option>
							<option value="chubut">Chubut</option>
							<option value="santa cruz">Santa Cruz</option>
							<option value="tierra del fuego">Tierra del Fuego</option>
						</select>
			<?php
						break;
				}
			
				echo "<input type='hidden' name='zona' value='$zona'>" 
			?>
			<input type="submit">
		</form>
	</body>
</html>


