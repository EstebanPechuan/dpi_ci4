<main>
    <?php
        $clase['menu_activo'] = 'aplicaciones';
		$clase['hero'] = true;
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>

    <section class="politicas-select" onchange="if((filtro1.value == '') && (filtro2.value == '')){btn_filtrar.classList.add('disable')}else{btn_filtrar.classList.remove('disable')}">
    <div class="selects select-red">
            <p>Tipo</p>
            <select name="tipo" id="filtro2" onchange="filtro(this.value)">
                <option value="">Seleccionar</option>
                <?php foreach($filtros2 as $filtro) { ?>
                    <option value="<?php echo $filtro ?>"><?php echo $filtro ?></option>
                <?php } ?>
            </select>
        </div>    
        <!-- <div class="selects">
            <p>Politicas</p>
            <select name="politicas" id="filtro1">
                <option value="">Seleccionar</option>
                <?php foreach($filtros1 as $filtro) { ?>
                    <option value="<?php echo $filtro ?>"><?php echo $filtro ?></option>
                <?php } ?> 
            </select>
        </div>
        <div class="btn-filtrar">
            <a href="#c" id="btn_filtrar" class="btn-fill-red disable">
                Filtrar
                <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z" fill="#fff"/></svg>
            </a>
        </div> -->
    </section>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Servicios / Sistemas</h3>
            <p>Desde la Dirección Provicial de Informática brindamos el sevicio de analizar, diseñar, desarrolar sistemas informáticos transversales y verticales del Gobierono de la Provincia de San Juan.</p>
        </div>
    </section>


    <!-- let flecha = document.createElement('div')
    flecha.setAttribute('class', 'flecha-ver-mas')

    flecha.innerText = 'hola'

    item.appendChild(flecha) -->


    <section class="depto-aplicaciones">
        <div class="tabla-aplicaciones">
            <div class="cada-aplicacion" style="display: grid !important;">
                <div class="app-nombre" style="font-family: var(--ff-bold)">Proceso de Negocios</div>

                <div class="linea-vert"></div>

                <div class="app-tipo">
                    <div style="font-family: var(--ff-bold)">Tipo de Proceso</div>
                </div>

                <div class="linea-vert"></div>

                <div class="app-sistema">
                    <div style="font-family: var(--ff-bold)">Sistema</div>
                </div>

                <div class="linea-vert"></div>

                <div class="app-alcance">
                    <div style="font-family: var(--ff-bold)">Alcance</div>
                </div>
                
                <div class="flecha-ver-mas">v</div>
            </div>

            <?php
                if (!empty($table)) {
                    foreach ($table as $fila) {
                        // print_r($fila);
                        // die();
                        echo view('includes/componente_aplicacion', $fila);
                    }
                } else {
                    echo 'No hay tarjetas en esta sección';
                }
            ?>
            
        </div>
    </section>
    

    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>