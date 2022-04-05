<div class="cada-aplicacion 
    <?php
        if ($tipo == 'Principal (Core)') {
            echo 'principal';
        } else {
            echo strtolower($tipo);
        }
<<<<<<< HEAD
        // echo ' ' . transform_class($proceso)
=======
        //echo ' ' . $this->funciones->transform_class($proceso);
>>>>>>> 9b24f78c4aaaa4dd32e2e609f0070d196f9ba886

        // echo strtolower(eliminar_acentos($proceso));
    ?>">
    <div class="app-nombre"> <?php echo $proceso; ?> </div>

    <div class="linea-vert"></div>

    <div class="app-tipo">
        <div> <?php echo $tipo; ?> </div>
    </div>

    <div class="linea-vert"></div>

    <div class="app-sistema">
        <div> <?php echo $sistema; ?> </div>
    </div>

    <div class="linea-vert"></div>

    <div class="app-alcance">
        <div> <?php echo $alcance; ?> </div>
    </div>
    
    <div class="flecha-ver-mas">v</div>
</div>



<?php
    // function transform_class($proceso) {
    //     $proceso = strtolower(eliminar_acentos($proceso));
    //     $proceso = eliminar_espacios($proceso);
    //     return $proceso;
    // }

    // function eliminar_espacios($cadena) {        
    //     $sinEspacios = str_replace(' ', '-', $cadena); 
    //     return $sinEspacios;
    // }

    // function eliminar_acentos($cadena) {
		
	// 	//Reemplazamos la A y a
	// 	$cadena = str_replace(
	// 	array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
	// 	array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
	// 	$cadena
	// 	);

	// 	//Reemplazamos la E y e
	// 	$cadena = str_replace(
	// 	array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
	// 	array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
	// 	$cadena );

	// 	//Reemplazamos la I y i
	// 	$cadena = str_replace(
	// 	array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
	// 	array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
	// 	$cadena );

	// 	//Reemplazamos la O y o
	// 	$cadena = str_replace(
	// 	array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
	// 	array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
	// 	$cadena );

	// 	//Reemplazamos la U y u
	// 	$cadena = str_replace(
	// 	array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
	// 	array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
	// 	$cadena );

	// 	//Reemplazamos la N, n, C y c
	// 	$cadena = str_replace(
	// 	array('Ñ', 'ñ', 'Ç', 'ç'),
	// 	array('N', 'n', 'C', 'c'),
	// 	$cadena
	// 	);
		
	// 	return $cadena;
	// }
?>