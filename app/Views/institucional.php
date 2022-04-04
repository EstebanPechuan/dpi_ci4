<main>
    <?php
        $clase['menu_activo'] = 'institucional';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>
    
    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Dirección Provincial de Informática</h3>
        </div>
    </section>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Misión:</h3>
            <p>Proporcionar a los organismos del Poder Ejecutivo de San Juan, servicios tecnológicos de calidad, brindando herramientas, sistemas informáticos, integraciones, soporte y asistencia, contribuyendo activamente a la modernización del Estado.</p>
        </div>
    </section>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Visión:</h3>
            <p>Ser el referente tecnológico del Gobierno de la Provincia de San Juan, aportando innovación continua, aplicando metodologías de trabajo, velando por la sustentabilidad de nuestros equipos, persiguiendo la transversalidad, transparencia, productividad y compromiso.</p>
        </div>
    </section>

    <section class="que-es-ga" style="place-items: initial;">
        <div class="que-es-info">
            <h3>Responsabilidades:</h3>
            <ul>
                <li>Analizar, diseñar, desarrollar y mantener sistemas informáticos transversales y verticales.</li>
                <li>Integración e interoperabilidad de sistemas.</li>
                <li>Brindar soporte técnico y funcional.</li>
                <li>Liquidar los sueldos del Poder Ejecutivo, Legislativo, Judicial y Municipios.</li>
                <li>Asistencia técnica en adquisición o arrendamiento de bienes y servicios de carácter informático.</li>
            </ul>
        </div>
    </section>

    <!-- <section class="organismos">
        <h2>Organismos y Secretarías</h2>
        <div class="cards-organismos">
            <div class="card-organismos">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/mujer-org.png') ?> " alt="Organismos">
                </div>
                <h4>Lorem Ipsum</p>
                <a href="#c">Ver más</a>
            </div>
        </div>
    </section>

    <section class="organismos">
        <div class="cards-organismos">
            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <h4>Lorem Ipsum</p>
                <a href="#c">Ver más</a>
            </div>

            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <h4>Lorem Ipsum</p>
                <a href="#c">Ver más</a>
            </div>

            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <h4>Lorem Ipsum</p>
                <a href="#c">Ver más</a>
            </div>

            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <h4>Lorem Ipsum</p>
                <a href="#c">Ver más</a>
            </div>
        </div>        
    </section> -->
    

    <div class="flyer-violencia">
        <img src=" <?php echo base_url('public/img/purple-bg.png') ?> " alt="Flyer Violencia">
    </div>
</main>







