<main>
    <?php
        $clase['menu_activo'] = 'home';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>


    <section class="publi-cidi-celu">
        <div class="publi-img-celu">
            <img src=" <?php echo base_url('public/img/mockup-celu.png') ?> " alt="MockUp Celulares">
        </div>
        <div class="publi-info-celu">
            <div class="publi-texto-celu">
                <h3>Descarga nuestra app y accede a tus servicios de una forma Rápida, Fácil y Segura</h3>
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

    <section class="noticias-home">
        <h2>Noticias</h2>
        <div class="cards-noticias">
            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/noticias/noticia1.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Los Sistemas Integrados como aliados del proceso de modernización del Estado sanjuanino</h4>
                <p>El uso de Sistemas de Información Integrados resultan aliados a la hora de agilizar trámites y conectar al Estado entre sí y con el ciudadano.</p>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/noticias/noticia2.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Presentaron el sistema de digitalización de trámites en comisarías policiales</h4>
                <p>Presentaron el sistema de digitalización de trámites en comisarías policiales.</p>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/noticias/noticia3.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Qué es el RUN, un software para el fortalecimiento de las políticas de infancia</h4>
                <p>Junto a UNICEF, San Juan viene trabajando en su implementación y capacitando a los dispositivos municipales en favor de los derechos de niños, niñas y adolescentes.</p>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/noticias/noticia4.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>Lanzamiento del sistema de oficio electrónico</h4>
                <p>Lo presentó la Corte de Justicia junto con la ministra de Hacienda y Finanzas. La aplicación, desarrollada por el Poder Judicial, agilizará las gestiones judiciales ya que se obtendrá en minutos un trámite que antes demoraba unos 4 meses.</p>
            </div>
        </div>
    </section>

    <section class="cards-home-tramites">
        <div class="card-home-tramite">
            <div class="card-home-titulo">
                <a href="https://hacienda.sanjuan.gob.ar/">
                    <h3>Consultas de Expedientes</h3>
                </a>
            </div>
            <div class="card-home-img">
                <img src=" <?php echo base_url('public/img/iconos/folder.png') ?> " alt="Icono Carpeta">
            </div>
        </div>

        <div class="card-home-tramite">
            <div class="card-home-titulo">
                <h3>Consultas y solicitudes</h3>
            </div>
            <div class="card-home-img">
                <img src=" <?php echo base_url('public/img/iconos/chats.png') ?> " alt="Icono Conversación">
            </div>
        </div>
    </section>

    <section class="links-utiles">
        <div class="link">
            <h4>Ministerio de Hacienda y Finanzas</h4>
            <a href="https://hacienda.sanjuan.gob.ar/">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Dirección de Gobierno Abierto</h4>
            <a href="https://gobiernoabierto.sanjuan.gob.ar/">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Ciudadano digital</h4>
            <a href="https://mi.sanjuan.gob.ar/">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>
        
        <div class="link">
            <h4>Formulario TIC</h4>
            <a href="https://web.sanjuan.gob.ar/formulariostic/">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>
    </section>


    <?php
        echo view('includes/flyer_violencia');
    ?>    
</main>