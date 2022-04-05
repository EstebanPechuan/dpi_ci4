<div class="cada-aplicacion 
    <?php
        if ($tipo == 'Principal (Core)') {
            echo 'principal';
        } else {
            echo strtolower($tipo);
        }
        //echo ' ' . $this->funciones->transform_class($proceso);

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

