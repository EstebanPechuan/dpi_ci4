<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'sistema';
        echo view('includes/pilares', $clase);
    ?>

    <section class="departamentos">
        <div class="depto-info">
            <h3>Departamento Sistemas</h3>
            <p>Desde el Departamento Sistema de la Dirección Provincial de Informática de la Provincia de San juan, realizamos las siguientes tareas y responsabilidades:</p>

            <ul>
                <li>Coordinar las actividades de equipos de desarrollo, ejerciendo un control sobre resultados, plazos y calidad. Mantener relación con usuarios y reparticiones, gestionando recursos y tomando decisiones operativas necesarias para cumplir los objetivos de cada proyecto.</li>

                <li>Intervenir y elevar informe correspondiente sobre adquisiciones o licenciamientos de servicios informáticos y desarrollo de proyectos de software por parte de la Administración Pública Provincial (Decreto 1254).</li>

                <li>Relevar, entender, documentar, clasificar, priorizar y validar requerimientos solicitados por usuarios o reparticiones.</li>

                <li>Diseñar y documentar requerimientos validados.</li>

                <li>Definir las pruebas a implementar para constatar el cumplimiento de los requerimientos en los entregables.</li>

                <li>Desarrollar los requerimientos relevados y documentados previamente.</li>

                <li>Preparar, documentar y ejecutar los despliegues de los componentes software, base de datos, etc. correspondientes.</li>

                <li>Ejecutar pruebas (testing) sobre funcionalidades desarrolladas, previo pase a producción.</li>

                <li>Registrar y derivar incidentes surgidos en etapa de pruebas para ser resuelto por el equipo correspondiente.</li>

                <li>Mantener y evolucionar un repositorio de código centralizado para contener los proyectos desarrollados y mantenidos en el ámbito del departamento.</li>

                <li>Generar procedimientos relacionados al control de versionamiento y despliegue de componentes de software.</li>

                <li>Incorporar nuevas funcionalidades o mejoras a los sistemas existentes.</li>
                
                <li>Gestionar el acceso y asignación de perfiles correspondientes a los sistemas desarrollados en el ámbito de la Dirección Provincial de Informática.</li>

            </ul>
        </div>


        <div class="depto-datos">
            <div class="depto-img">
                <img src=" <?php echo base_url('public/img/departamentos/departamento3.png') ?> " alt="">
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