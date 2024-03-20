<!DOCTYPE html>
<html lang="es">

<head>
    <?php include './static/head.php'; ?>
</head>

<body>
    <div class="carga" id="carga">
        <img  class="animated  fadeIn delay-2s" src="./assets/img/logo.png" alt="Logo" width="50%" height="50%">
    </div>
    <div class="contenido" id="contenido">
        <?php include './components/Index/Menu.php'; ?>
        <?php include './components/Index/About.php'; ?>
        <?php include './components/Index/Resume.php'; ?>
        <?php include './components/Index/Services.php'; ?>
        <?php include './components/Index/Team.php'; ?>
        <?php include './components/Index/Testimoniales.php'; ?>
        <?php include './static/footer.php'; ?>
    </div>
</body>

</html>