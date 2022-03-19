
<main>
    <?php
        $clase['menu_activo'] = 'pilares';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
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
    
    <section class="que-es-ga">
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/innovacion.png') ?> " alt="Innovacion" style="height: auto !important; width: 80% !important;">
        </div>
        <div class="que-es-info">
            <h3>Transparencia</h3>
            <p>Este pilar o valor de la Dirección de Gobierno Abierto es fundamental ya que de esta manera es cómo el ciudadano puede obtener su información sin que nadie la oculte, dándole la posibilidad de acceso a su documentación y su estado.
            <br>
            Un gobierno transparente fomenta y promueve la rendición de cuentas de la Administración ante la ciudadanía y proporciona información sobre lo que está realizando y sobre sus planes de actuación. 
            <br>
            De esta manera el Gobierno debería permitir el acceso a esta información pública de manera sencilla y clara, permitiendo de esta manera que los ciudadanos puedan realizar un control de la acción de gobierno, así como crear valor económico o social a partir de los datos públicos ofrecidos libremente por la Administración.</p>
        </div>
    </section>

    <section class="que-es-ga">
        <div class="que-es-info">
            <h3>Colaboración</h3>
            <p>Este pilar o valor de la Dirección de Gobierno Abierto también está centrado en el ciudadano y comprende acciones para brindarle la información, expedientes y documentación que él necesite.</p>
            <h3>Participación Ciudadana </h3>
            <p>Este pilar o valor le da la posibilidad al ciudadano y a la sociedad, el poder de participación en las decisiones gubernamentales.
            <br>
            Desde la Dirección de Gobierno Abierto siempre estamos dispuestos a escuchar al ciudadano, sus consultas, necesidades y aportes para así poder brindar un mejor producto y servicio, generando espacios de comunicación a través de los diferentes portales, plataformas y aplicaciones digitales.</p>
        </div>
        <div class="que-es-logo">
            <img src=" <?php echo base_url('public/img/people.png') ?> " alt="Participación Ciudadana" style="height: auto !important; width: 80% !important;">
        </div>
    </section>
    

    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>







