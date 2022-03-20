<section class="hero">
    <div class="">
        <h2>Bienvenid@</h2>
        <h1>Dirección Provincial de Informática</h1>
    </div>
    <h3>Simple, Rápido y Fácil</h3>

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