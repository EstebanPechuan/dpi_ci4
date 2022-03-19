
<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'participacion';
        echo view('includes/pilares', $clase);
    ?>

    <section class="que-es-ga">
        <div class="que-es-info menu-ul-circle">
            <p>Este pilar o valor le da la posibilidad al ciudadano y a la sociedad, el poder de participación en las decisiones gubernamentales.
            <br>
            Desde la Dirección de Gobierno Abierto siempre estamos dispuestos a escuchar al ciudadano, sus consultas, necesidades y aportes para así poder brindar un mejor producto y servicio, generando espacios de comunicación a través de los diferentes portales, plataformas y aplicaciones digitales.</p>
        </div>
        
    </section>

    <section class="que-es-ga">
        <div class="que-es-info menu-ul-circle">
            <h3>Consultas Ciudadana </h3>
            <ul style="">
                <li>Identificar crítica</li>
                <li>Incorporar sugerencias</li>
                <li>Compartir  ideas</li>
            </ul>

            <h3>Derribar Estructuras Piramidales </h3>
            <ul style="">
                <li>Organizar debates públicos</li>
                <li>Co-diseño de las políticas públicas con los ciudadanos</li>
            </ul>
        </div>
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/people.png') ?> " alt="Colaboración" style="height: auto !important; width: 80% !important;">
        </div>
    </section>

    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>







