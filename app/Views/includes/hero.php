<section class="hero" style=" <?php if($hero == true) { echo 'display: flex;';} else { echo 'display: none;'; } ?>" >
    <div class="">
        <h2>Bienvenid@ a la</h2>
        <h1>Dirección Provincial de Informática</h1>
    </div>

    <!-- <form action="./index.html" method="POST">
        <input type="text">
        <div class="home-hero-submit">
            <input type="submit" value="">
            <div class="">
                <p>Buscar</p>
                <i class='bx bx-search'></i>
            </div>
        </div>
    </form> -->
</section>

<div class="nav-secundario" id="nav-sec">
    <ul>
        <li><a href="<?= base_url('/') ?>" class=" <?php if ($menu_activo === 'home') { echo 'li-active'; } ?> ">INICIO</a></li>
        |
        <li><a href="<?= base_url('institucional') ?>" class=" <?php if ($menu_activo === 'institucional') { echo 'li-active'; } ?> ">INSTITUCIONAL</a></li>
        |
        <li><a href="<?= base_url('servicios') ?>" class=" <?php if ($menu_activo === 'servicios') { echo 'li-active'; } ?> ">SERVICIOS</a></li>
        |
        <li><a href="https://hacienda.sanjuan.gob.ar/#dnwvZ29iaWVybm8vcmVkbWluZS9jb25zdWx0YXMvcy9fZl9CMzcxOTJCQjMxMzM0NDQ1QjU0OEQ1QjgyQ0Y4OEIyQi5odG1sfF92YWxpZGFjaW9uZXN8fHx8" target="_blank" class=" <?php if ($menu_activo === 'contacto') { echo 'li-active'; } ?> ">CONTACTO</a></li>
    </ul>
</div>


<script>
    var auxi = document.querySelector('#nav-sec');
    auxi.focus();
    
</script>