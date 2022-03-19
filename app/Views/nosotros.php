
<main>
    <?php
        $clase['menu_activo'] = 'nosotros';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Qué es Gobierno Abierto</h3>
            <p>El Gobierno de la Provincia trabaja bajo el paradigma de Gobierno Abierto sustentado en los siguientes pilares: <strong>La Innovación Tecnología, la Transparencia, la Colaboración y la Participación</strong>, priorizando a la innovación como transversal a todos los procesos.
            Desde Gobierno Abierto consideramos que trabajamos con una filosofía político administrativa que pretende mejorar el desempeño y la calidad de los organismos públicos.</p>
        </div>
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/gob-san-juan.png') ?> " alt="Logo Gobierno San Juan">
        </div>
    </section>

    <section class="nosotros-responsabilidad">
        <h3>Resposabilidades
            <br>
            Nuestras responsabilidades están centradas  en impactar de forma:
        </h3>
        <div class="responsabilidad">
            <div class="resposabilidad-img">
                <img src=" <?php echo base_url('public/img/engranages.png') ?> " alt="Engranages">
            </div>
            <div class="resposabilidad-texto">
                <div class="">
                    <p>
                        <strong>Directa</strong>
                        <ul>
                            <li>Gestionar la comunicación bilateral entre el Gobierno y el ciudadano.</li>
                            <li>Promover los canales que faciliten los componentes deliberativos y participativos de la democracia.</li>
                            <li>Garantizar el libre acceso a la información pública</li>
                        </ul>
                    </p>

                    <br>

                    <p>Estas responsabilidades se ven reflejadas en operaciones que la D.G.A. realiza de manera periódica y continúa brindándole al ciudadano un producto digital, de calidad e innovación tecnológica para mayor transparencia a la hora de solicitar datos, expedientes y demás gestiones gubernamentales de una manera fácil, rápida y simple.</p>

                </div>
            </div>
        </div>

        <div class="responsabilidad-2">
            <div class="resposabilidad-img-2">
                <img src=" <?php echo base_url('public/img/persona-engranage.png') ?> " alt="Engranages">
            </div>
            <div class="resposabilidad-texto-2">
                <div class="">
                    <p>
                        <strong>Indirecta, relacionadas con una visión a futuro</strong>

                        <br>
                        <strong>- Automatización de procesos</strong>
                        <br>
                        (Innovación tecnológica / Transparencia)
                        <br>
                        Es la operación de un proceso utilizando la tecnología y la integración de sistemas y datos. Es un paso importante capaz de generar competitividad, eficiencia, transparencia, coherencia y valor al ciudadano.
                        <br><br>
                        <strong>- Gestión Metodológica</strong>
                        <br>
                        (Innovación tecnológica / Transparencia)
                        <br>
                        Es la disciplina encargada de elaborar, definir y sistematizar el procedimiento que se debe seguir durante el desarrollo de un proyecto para la producción de una plataforma o producto digital.
                        <br><br>
                        <strong>- Interoperabilidad</strong>
                        <br>
                        (Innovación tecnológica / Transparencia)
                        <br>
                        (Intercambio de información)
                        <br>
                        Generando una comunicación entre plataformas digitales donde se intercambia información, datos, documentos y expedientes de manera uniforme y eficiente. Facilitando la gestión de la información del ciudadano.
                        <br><br>
                        <strong>- Multicanalidad</strong>
                        <br>
                        (Participación ciudadana)
                        <br>
                        Creación de bots y CAIGE desde donde el usuario se pone en contacto con el Gobierno y de esta manera generar una comunicación entre ambos donde nace y se crea un producto que conoce y cumple las necesidades del ciudadano.
                        Con esta visión se crean productos digitales que trascienden gestiones gubernamentales, siempre orientados al beneficio del ciudadano y generando transparencia desde el Gobierno.
                        Estas responsabilidades se ven reflejadas en las áreas de Ejecución, Operación y Mantenimiento donde se brinda soporte a las diferentes plataformas gubernamentales como Portales Web y Aplicaciones Móviles, creadas para facilitar el acceso al ciudadano y a los trabajadores de Gobierno a diferentes trámites, documentos y expedientes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="organismos">
        <h2>Organismos y Secretarías</h2>
        <div class="cards-organismos">
            <div class="card-organismos">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/mujer-org.png') ?> " alt="Organismos">
                </div>
                <h4>Lorem Ipsum</p>
                <!-- <a href="#c">Ver más</a> -->
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
                <!-- <a href="#c">Ver más</a> -->
            </div>

            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <h4>Lorem Ipsum</p>
                <!-- <a href="#c">Ver más</a> -->
            </div>

            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <h4>Lorem Ipsum</p>
                <!-- <a href="#c">Ver más</a> -->
            </div>

            <div class="card-organismos-2">
                <div class="card-org">
                    <img src=" <?php echo base_url('public/img/hombre-org.png') ?> " alt="Organismos">
                </div>
                <h4>Lorem Ipsum</p>
                <!-- <a href="#c">Ver más</a> -->
            </div>
        </div>        
    </section>

    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>







