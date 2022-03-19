<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'soporte';
        echo view('includes/pilares', $clase);
    ?>

    <section class="departamentos">
        <div class="depto-info">
            <h3>Departamento Soporte</h3>
            <p>Desde el Departamento Soporte de la Dirección Provincial de Informática de la Provincia de San juan, realizamos las siguientes tareas y responsabilidades:</p>

            <ul>
                <li> Recepcionar y registrar en la plataforma soporte.sanjuan.gov.ar los incidentes solicitados por los usuarios o reparticiones.</li>

                <li>Resolver o derivar el incidente al equipo que corresponda en base a la naturaleza del mismo.</li>

                <li>Realizar el seguimiento de resolución del incidente.</li>

                <li>Informar al usuario o repartición solicitante resultado de resolución de incidente.</li>

                <li>Asistir de manera presencial al puesto de trabajo del solicitante en caso de corresponder.</li>

                <li>Elaborar informes sobre estado de equipos en relación al mantenimiento del parque tecnológico de la repartición.</li>

                <li>Responder e informar sobre incidentes relacionados a las funcionalidades y uso de las mismas dentro de los sistemas informáticos implementados en el ámbito de la Dirección.</li>

                <li>Generar, mantener y publicar manuales, videos y todo tipo de documentación relacionada a los sistemas  implementados en el ámbito de la Dirección.</li>

                <li>Generar, mantener y publicar un catálogo de equipamiento disponible que refleje su característica, estado y asignación.</li>

                <li>Intervenir y elevar informe correspondiente sobre adquisiciones de bienes informáticos por parte de la Administración Pública Provincial (Decreto 1254).</li>

            </ul>
        </div>


        <div class="depto-datos">
            <div class="depto-img">
                <img src=" <?php echo base_url('public/img/departamentos/departamento4.png') ?> " alt="">
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