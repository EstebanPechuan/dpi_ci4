<section class="nav-pilares" id="depto-sueldos">
    <h2>Departamentos</h2>
    <div class="cards-pilares">
        <div class="card-pilares <?php if ($pilar_activo === 'sueldos') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('departamentos/sueldos') ?>">SUELDOS</a>
        </div>
        <div class="card-pilares <?php if ($pilar_activo === 'interoperabilidad') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('departamentos/interoperabilidad') ?>">INTEROPERABILIDAD</a>
        </div>
        <div class="card-pilares <?php if ($pilar_activo === 'sistema') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('departamentos/sistemas') ?>">SISTEMAS</a>
        </div>
        <div class="card-pilares <?php if ($pilar_activo === 'soporte') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('departamentos/soporte') ?>">SOPORTE</a>
        </div>
    </div>
</section>