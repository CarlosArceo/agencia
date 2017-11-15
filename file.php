<?php
if(isset($_GET['open'])) 
{
	switch ($_GET['open'])
	{
		default : if(!file_exists ("index.php")) die ("Sección no encontrada");
					include "../catalogo/empresas.php"; break;

		case 'sucursales': if(!file_exists ("view/sucursales.html")) die ("Sección no encontrada");
			include "view/sucursales.html"; break;

		case 'usuarios': if (!file_exists("view/usuarios.php")) die("La seccion " . $_GET['open'] . " no encontrada"); {
			include "view/usuarios.php"; break;
		}
			# code...
			break;
		break;
	}
}
else {
	if(!file_exists ("master.php")) die ("Inicio");
}
?>
