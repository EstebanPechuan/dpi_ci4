
<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'colaboracion';
        echo view('includes/pilares', $clase);
    ?>

    <section class="que-es-ga">
        <div class="que-es-info menu-ul-circle">
            <h3>Colaboración</h3>
            <p>Este pilar o valor de la Dirección de Gobierno Abierto también está centrado en el ciudadano y comprende acciones para brindarle la información, expedientes y documentación que él necesite.</p>

            <h3>Derribar Estructuras Piramidales </h3>
            <ul style="">
                <li>Dentro de las Organizaciones</li>
                <li>Entre las organizaciones</li>
            </ul>
        </div>
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/colaboracion.png') ?> " alt="Colaboración" style="height: auto !important; width: 80% !important;">
        </div>
    </section>


    <section class="que-es-ga">
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/metodologias-trabajo.png') ?> " alt="Metodologías de Trabajo" style="height: auto !important; width: 80% !important;">
        </div>
        <div class="que-es-info menu-ul-circle">
            <h3>Metodología de Trabajo Horizontal</h3>
            <ul style="">
                <li>Entre las organizaciones</li>
                <li>Entre los Territorios</li>
                <li>Utilizando herramientas para diseñar productos y servicios digitales de primera</li>
                <li>Utilizando Metodologías Ágiles y Flexibles</li>
                <li>Mediante la participación ciudadana</li>
                <li>Promocionando la cooperación</li>
            </ul>
        </div>
    </section>


    <section class="fields-colaboracion">
        <fieldset>
            <legend>Dirección de Gobierno Abierto</legend>

            <div class="interior-fieldset">
                <ul class="fields-colaboracion-menu">
                    <li><span>&#10033;</span> Dirección responsable de portales digitales, externos, del Gobierno de la provincia de San Juan.</li>
                    <li><span>&#10033;</span> Proyectos vinculando a con la direccion de gobierno abierto.</li>
                    <ul class="fields-colaboracion-submenu">
                        <li>Ciudadano Digital</li>
                        <li>Ejemplo de Proyecto</li>
                        <li>Ejemplo de Proyecto</li>
                    </ul>
                    <li><span>&#10033;</span> Encuentro virtuales promulgando la transparencia y coperacion entre direcciones en el Gobierno de la Provincia de San Juan </li>
                    <li><span>&#10033;</span> Proyecto en coperativo con Dirección Provincial de Informática modernización del Estado de la Proviencia de San Juan</li>
                </ul>
            </div>


            <div class="grafica-est-1">
                <img src=" <?php echo base_url('public/img/field1.png') ?> " alt="">
            </div>
        </fieldset>

        <fieldset>
            <legend>Dirección Provincial de Informática</legend>

            <div class="interior-fieldset">
                <ul class="fields-colaboracion-menu">
                    <li><span>&#10033;</span> Dirección responsable del sistema de gestión interna, acceso a sistemas.</li>
                    <li><span>&#10033;</span> Proyectos vinculando a con la direccion de gobierno abierto.</li>
                        <ul class="fields-colaboracion-submenu">
                            <li>Ciudadano Digital</li>
                            <li>Ejemplo de Proyecto</li>
                            <li>Ejemplo de Proyecto</li>
                        </ul>
                    <li><span>&#10033;</span> Encuentro virtuales promulgando la transparencia y coperacion entre direcciones en el Gobierno de la Provincia de San Juan</li>
                    <li><span>&#10033;</span> Proyecto en coperativo con Dirección de Gobierno Abierto modernización del Estado de la Proviencia de San Juan </li>
                </ul>
            </div>


            <div class="grafica-est-1">
                <img src=" <?php echo base_url('public/img/field2.png') ?> " alt="">
            </div>
        </fieldset>
    </section>



    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>






