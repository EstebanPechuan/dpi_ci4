<section class="hero">
    <h1>Bienvenid@ a Gobierno Abierto</h1>
    <h3>Innovación Tecnológica</h3>

    <form action="./index.html" method="POST">
        <input type="text">
        <div class="home-hero-submit">
            <input type="submit" value="">
            <div class="">
                <p>Buscar</p>
                <i class='bx bx-search'></i>
            </div>
        </div>
    </form>
</section>

<div class="nav-secundario">
    <ul>
        <li><a href="<?= base_url('/') ?>" class=" <?php if ($menu_activo === 'home') { echo 'li-active'; } ?> ">INICIO</a></li>
        |
        <li><a href="<?= base_url('nosotros') ?>" class=" <?php if ($menu_activo === 'nosotros') { echo 'li-active'; } ?> ">DGA</a></li>
        |
        <li><a href="<?= base_url('pilares') ?>" class=" <?php if ($menu_activo === 'pilares') { echo 'li-active'; } ?> ">PILARES</a></li>
        |
        <li><a href="<?= base_url('contacto') ?>" class=" <?php if ($menu_activo === 'contacto') { echo 'li-active'; } ?> ">CONTACTO</a></li>
    </ul>
</div>