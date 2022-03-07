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
        <li><a href="<?= base_url('institucional') ?>" class=" <?php if ($menu_activo === 'institucional') { echo 'li-active'; } ?> ">INSTITUCIONAL</a></li>
        |
        <li><a href="<?= base_url('servicios') ?>" class=" <?php if ($menu_activo === 'servicios') { echo 'li-active'; } ?> ">SERVICIOS</a></li>
        |
        <li><a href="<?= base_url('contacto') ?>" class=" <?php if ($menu_activo === 'contacto') { echo 'li-active'; } ?> ">CONTACTO</a></li>
    </ul>
</div>