<?php
if(isset($_GET['open'])) {
	switch ($_GET['open']){
		default			: if(!file_exists ("../catalogo/empresas.php")) die ("Informacion de archivo no existe");
								include "../catalogo/empresas.php"; break;

		case 'empresa': if(!file_exists ("../catalogo/empresas.php")) die ("Informacion de archivo no existe");
								include "../catalogo/empresas.php"; break;

			break;
	}
}
else {
	if(!file_exists ("master.php")) die ("Inicio");
}
?>
