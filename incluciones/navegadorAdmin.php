<?php

echo '
		<div class="w3-bar w3-black w3-top">
			<a href="cargar-producto.php" class="w3-bar-item w3-hover-blue-grey">Producto</a>
			<a href="cargar-categoria.php" class="w3-bar-item w3-hover-blue-grey">Categoria</a>
			<a href="cargar-proveedor.php" class="w3-bar-item w3-hover-blue-grey">Proveedor</a>
            <a href="cargar-marca.php" class="w3-bar-item w3-hover-blue-grey">Marca</a>
            <a href="cargar-moneda.php" class="w3-bar-item w3-hover-blue-grey">Monedas</a>
			<a href="../controladores/cerrarSesionController.php" class="w3-bar-item w3-hover-red w3-right">Salir</a>
			<a href="admin-home.php" class="w3-bar-item w3-hover-blue-gray w3-right">Inicio</a>
			<span class="w3-bar-item w3-right">'. $username .'</span>
		</div>';
