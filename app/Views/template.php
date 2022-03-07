<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPI - <?php echo ucfirst($contenido) ?> </title>

    <link rel="shortcut icon" href="<?php echo base_url('favicon.png') ?>" type="image/png">

    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Estilos DGA -->
    <link rel="stylesheet" href=" <?php echo base_url('public/css/style.css') ?> ">
    <link rel="stylesheet" href=" <?php echo base_url('public/css/media.css') ?> ">
</head>
<body>


<?php
    echo view("includes/header");
    echo view($contenido);
    echo view("includes/footer");
?>


<script src=" <?php echo base_url('public/js/main.js') ?> "></script>

</body>
</html