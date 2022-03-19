
<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'innovacion';
        echo view('includes/pilares', $clase);
    ?>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Innovación Tecnológica</h3>
            <p>Es un pilar o valor fundamental y transversal dentro de la Dirección de Gobierno Abierto, a través del cual el ciudadano pueda tener acceso transparente a su información, para que él pueda ver el estado de cada documento, cada expediente sin que esté oculto.
            <br>
            Brindando al ciudadano el poder de participación, escuchando cuáles son sus necesidades y de esta manera producir o mejorar un producto digital, tecnológico pensado para él.</p>
        </div>
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/dispositivos.png') ?> " alt="Dispositivos" style="height: auto !important; width: 80% !important;">
        </div>
    </section>


    <div class="publicidad-cidi">
        <img src=" <?php echo base_url('public/img/publicidad-1.png') ?> " alt="">
    </div>

    <section class="que-es-ga">
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/innovacion.png') ?> " alt="Innovacion" style="height: auto !important; width: 80% !important;">
        </div>
        <div class="que-es-info">
            <p>También genera la posibilidad de mejorar al Estado, demostrando su funcionamiento y haciendo transparente su función gubernamental, visualizando datos, exhibiendo el proceso de trabajo a través de infografías y plataformas digitales.
            <br>
            A través de esta, se genera un ambiente de trabajo colaborativo entre las organizaciones, direcciones y secretarias, donde se utilizan metodologías flexibles y agiles que derriban las estructuras piramidales y dan lugar a un método de trabajo horizontal. 
            <br>
            Donde la participación del ciudadano es prioritaria, de esta manera le permite al Gobierno identificar críticas, incorporar sugerencias y compartir ideas.</p>
        </div>
    </section>


    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>







