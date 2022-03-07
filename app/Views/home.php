
<main>
    <?php
        $clase['menu_activo'] = 'home';
        echo view('includes/hero', $clase);

        echo view('includes/pilares');
    ?>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Qué es Gobierno Abierto</h3>
            <p>El Gobierno de la Provincia trabaja bajo el paradigma de Gobierno Abierto sustentado en tres pilares: <strong>la transparencia, la colaboración y la participación</strong>, priorizando a la innovación como transversal a todos los procesos.</p>
        </div>
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/gob-san-juan.png') ?> " alt="Logo Gobierno San Juan">
        </div>
    </section>

    <section class="publi-cidi-compu">
        <div class="publi-info-compu">
            <div class="publi-texto-compu">
                <h3>Ciudadano Digital web donde podes acceder a tus servivios de una forma Rápida, Fácil y Segura</h3>
                <p>Podrás realizar distintos trámites y servicios digitales</p>
            </div>
            <div class="publi-button-compu">
                <a href="#c">Ir a Ciudadano Digital</a>
            </div>
        </div>
        <div class="publi-img-compu">
            <img src=" <?php echo base_url('public/img/mockup-compu.png') ?> " alt="MockUp Computadora">
        </div>
    </section>

    <section class="noticias-home">
        <h2>Noticias</h2>
        <div class="cards-noticias">
            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                <a href="#c">Ver más</a>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                <a href="#c">Ver más</a>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                <a href="#c">Ver más</a>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                <a href="#c">Ver más</a>
            </div>
        </div>
    </section>

    <section class="cards-home-tramites">
        <div class="card-home-tramite">
            <div class="card-home-img">
                <img src=" <?php echo base_url('public/img/iconos/folder.png') ?> " alt="Icono Carpeta">
            </div>
            <div class="card-home-titulo">
                <h3>Consultas de Expedientes</h3>
            </div>
        </div>

        <div class="card-home-tramite">
            <div class="card-home-img">
                <img src=" <?php echo base_url('public/img/iconos/hands.png') ?> " alt="Icono Manos">
            </div>
            <div class="card-home-titulo">
                <h3>Trámites</h3>
            </div>
        </div>

        <div class="card-home-tramite">
            <div class="card-home-img">
                <img src=" <?php echo base_url('public/img/iconos/document-mouse.png') ?> " alt="Icono Documento">
            </div>
            <div class="card-home-titulo">
                <h3>Contrataciones</h3>
            </div>
        </div>

        <div class="card-home-tramite">
            <div class="card-home-img">
                <img src=" <?php echo base_url('public/img/iconos/chats.png') ?> " alt="Icono Conversación">
            </div>
            <div class="card-home-titulo">
                <h3>Consultas y solicitudes</h3>
            </div>
        </div>
    </section>

    <section class="links-utiles">
        <div class="link">
            <h4>Ministerio de Hacienda y Finanzas</h4>
            <a href="#c">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Dirección Provincial de Informática</h4>
            <a href="#c">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Recaudación Impositiva</h4>
            <a href="#c">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Régimen Federal de Responsabilidad Fiscal</h4>
            <a href="#c">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>
        
        <div class="link">
            <h4>Digesto Administrativo</h4>
            <a href="#c">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Consulta de  Comprobantes de Pago y Rentenciones</h4>
            <a href="#c">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>
    </section>

    <section class="publi-cidi-celu">
        <div class="publi-img-celu">
            <img src=" <?php echo base_url('public/img/mockup-celu.png') ?> " alt="MockUp Celulares">
        </div>
        <div class="publi-info-celu">
            <div class="publi-texto-celu">
                <h3>Descarga nuestra app y accede a tus servivios de una forma Rápida, Fácil y Segura</h3>
                <p>Podrás realizar distintos trámites y servicios digitales</p>
            </div>
            <div class="publi-buttons-celu">
                <a href="#c">
                    <img src=" <?php echo base_url('public/img/google-play.png') ?> " alt="Botón Google Play">
                </a>
                <a href="#c">
                    <img src=" <?php echo base_url('public/img/app-store.png') ?> " alt="Botón App Store">
                </a>
            </div>
        </div>
    </section>

    <div class="flyer-violencia">
        <img src=" <?php echo base_url('public/img/purple-bg.png') ?> " alt="Flyer Violencia">
    </div>
</main>