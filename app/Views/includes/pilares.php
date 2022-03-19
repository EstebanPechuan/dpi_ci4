<section class="nav-pilares">
    <h2>PILARES</h2>
    <div class="cards-pilares">
        <div class="card-pilares <?php if ($pilar_activo === 'innovacion') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('pilares/innovacion') ?>">INNOVACIÓN TECNOLÓGICA</a>
        </div>
        <div class="card-pilares <?php if ($pilar_activo === 'transparencia') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('pilares/transparencia') ?>">TRANSPARENCIA</a>
        </div>
        <div class="card-pilares <?php if ($pilar_activo === 'colaboracion') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('pilares/colaboracion') ?>">COLABORACIÓN</a>
        </div>
        <div class="card-pilares <?php if ($pilar_activo === 'participacion') { echo 'pilar-active'; } ?> ">
            <a href="<?= base_url('pilares/participacion') ?>">PARTICIPACIÓN</a>
        </div>
    </div>
</section>