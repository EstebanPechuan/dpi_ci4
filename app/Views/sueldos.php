<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'sueldos';
        echo view('includes/pilares', $clase);
    ?>

    <section class="departamentos">
        <div class="depto-info">
            <h3>Departamento Sueldos</h3>
            <p>Desde el Departamento Sueldos de la Dirección Provincial de Informática de la Provincia de San juan, realizamos las siguientes tareas y responsabilidades:</p>

            <ul>
                <li>Gestionar los procedimientos correspondientes al Ingreso de</li>

                <li>Novedades de Liquidación de Haberes.</li>

                <li>Generar la Liquidación de Haberes.</li>

                <li>Gestionar los procedimientos de generación y ejecución de los procesos requeridos para la ejecución de las distintas instancias de liquidaciones.</li>

                <li>Generar Liquidación del Impuesto a las Ganancias.</li>

                <li>Generación de acreditaciones bancarias.</li>

                <li>Gestionar los procedimientos correspondientes al Control y Entrega de resultados de Liquidación de haberes a usuarios pertenecientes a reparticiones y entidades externas.</li>

                <li>Generar Reportes e Interfaces de información para reparticiones que lo requieran, en el uso de sus facultades.</li>

                <li>Realizar emisiones de material de sueldos (órdenes de pago, listados de descuentos, planillas de sueldos, pedidos de fondo, listado de novedades).</li>

                <li>Realizar emisiones de informes solicitados por entidades externas.</li>
            </ul>
        </div>


        <div class="depto-datos">
            <div class="depto-img">
                <img src=" <?php echo base_url('public/img/departamentos/departamento1.png') ?> " alt="">
            </div>

            <div class="depto-datos-jefe">
                <h3>Jefe de Área</h3>
                <p>Valdéz, Darío</p>

                <br>

                <h3>Contacto</h3>
                <h4>Teléfono</h4>
                <p>2645669980</p>

                <br>

                <h4>Mail</h4>
                <p>dario_valdez@gmail.com</p>
            </div>
        </div>
    </section>


    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>