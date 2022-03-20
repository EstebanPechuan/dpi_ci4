<main>
    <?php
        $clase['menu_activo'] = 'servicios';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>


    <section class="links-utiles-servicios">
        <h3>Servicios</h3>

        <div class="link">
            <a href="#c">
                <h4>Ministerio de Hacienda y Finanzas</h4>
                <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p>
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>

        <div class="link">
            <a href=" <?= base_url('servicios/sistemas') ?> ">
                <h4>Sistemas </h4>
                <p>Requerimiento de nuevo desarrollo. (link a formulario de requerimiento en elaboración)</p>
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Integración e Interoperabilidad</h4>
                <p>Requerimiento de nuevo desarrollo. (link a formulario de requerimiento en elaboración)</p>
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Soporte</h4>
                <p>Iniciar ticket de Soporte</p>
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Asistencia Técnica</h4>
                <p>Decreto 1254</p>
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>
    </section>

    
    <section class="links-utiles-servicios">
        <h3>Aplicaciones y Servicios</h3>

        <div class="link">
            <a href="#c">
                <h4>Catálogo de Aplicaciones y Servicios</h4>
                <!-- <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p> -->
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>
    </section>

    <section class="links-utiles-servicios">
        <h3>Trámites</h3>

        <div class="link">
            <a href="#c">
                <h4>Catálogo de Aplicaciones y Servicios</h4>
                <!-- <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p> -->
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Catálogo de Aplicaciones y Servicios</h4>
                <!-- <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p> -->
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>

        <div class="link">
            <a href="#c">
                <h4>Catálogo de Aplicaciones y Servicios</h4>
                <!-- <p>Requerimiento sueldos (Iniciar expediente SIGED desde CIDI)</p> -->
                <h5 href="#c">
                    Página Web <i class='bx bx-world'></i>
                </h5>
            </a>
        </div>
    </section>

    


    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>