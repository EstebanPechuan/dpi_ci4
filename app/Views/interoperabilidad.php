<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'interoperabilidad';
        echo view('includes/pilares', $clase);
    ?>

    <section class="departamentos">
        <div class="depto-info">
            <h3>Departamento Interoperabilidad</h3>
            <p>Desde el Departamento Interoperabilidad de la Dirección Provincial de Informática de la Provincia de San juan, realizamos las siguientes tareas y responsabilidades:</p>

            <ul>
                <li>Gestionar los procedimientos definidos por el Departamento de Organización y Procesos en relación a la Gestión de Requerimientos y Cambios.</li>

                <li>Generar, mantener y publicar estándar para el desarrollo de servicios, apis o cualquier otro mecanismo que permita la integración, disponibilización e intercambio de información entre reparticiones y sistemas.</li>

                <li>Generar, documentar y publicar en el sitio web institucional de la Dirección Provincial de Informática el Catálogo de Servicios provistos para realizar integraciones de sistemas e intercambio de información en reparticiones en el uso de sus facultades.</li>

                <li>Generar, configurar y disponibilizar tableros de información requeridos por usuarios y reparticiones en el uso de sus facultades.</li> 

                <li>Fomentar el intercambio de información territorial respetando competencias de los organismos involucrados, conforme su marco normativo.</li>

                <li>Estimular la cooperación, investigación, complementación e intercambio de experiencias en áreas de conocimiento relacionadas con la geotecnología.</li>

                <li>Definir lineamientos y estrategias para apoyar a los distintos organismos en el desarrollo de la información espacial relacionada con la UNIDE teniendo en cuenta las necesidades de cada uno.</li>

                <li>Transparentar y democratizar la información georreferenciada, para llegar a toda la sociedad y el Estado.</li>

                <li>Generar, documentar y evolucionar los procedimientos asociados al intercambio de información territorial georeferencial.</li>	

                <li>Definir y mantener en conjunto con las Áreas de Gobierno correspondiente, la infraestructura tecnológica sobre la cual se apoyarán las herramientas de Gestión y Operación de UNIDE.</li>

                <li>Generar, documentar y evolucionar procedimientos asociados al intercambio de datos entre diversas fuentes de información.</li>

                <li>Generar, documentar y difundir permanentemente los servicios ofrecidos por SINTyS a través del sitio web de la Dirección Provincial de Informática.</li>

                <li>Recepcionar y controlar documentación de organismos postulantes y de sus representantes, que desean hacer uso de los servicios de SINTyS.</li>

                <li>Presentar documentación y tramitar Alta de los organismos ante SINTyS Central.</li>

                <li>Gestionar procedimiento de alta y permisos legales otorgados por SINTyS Central, según la documentación presentada por los organismos que los avalan como tal.</li>

                <li>Coordinar el intercambio de requerimientos de temáticas solicitadas en  la documentación de los organismos provinciales y Área Legal del SINTyS Central.</li>

                <li>Gestionar procedimiento de control, aprobación y envío de estructuras de bases de datos, según los requerimientos técnicos de SINTyS.</li>

                <li>Gestionar procedimiento de protocolización y recepción de bases de datos de los organismos, según requerimientos de SINTyS.</li>

                <li>Diseñar los cruces de las bases de datos de los organismos con las diferentes bases que provee SINTyS para el intercambio de información según lineamientos legales.</li>

                <li>Derivar al Departamento Soporte requerimientos que surjan del intercambio de información con SINTyS a través de la plataforma de Mesa de Ayuda.</li>

            </ul>
        </div>


        <div class="depto-datos">
            <div class="depto-img">
                <img src=" <?php echo base_url('public/img/departamentos/departamento2.png') ?> " alt="">
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