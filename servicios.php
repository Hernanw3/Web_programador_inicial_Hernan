<?php
include("header.php")
?>

<section class="ser">
    <div class="ser__1">
        <h2>Elegir servicio</h2>
        <ul>
            <Li>
                <a href="servicios.php?tipo=a" class="desing__btn">Semipermanente</a>
            </li>
            <Li>
                <a href="servicios.php?tipo=b" class="desing__btn">Capping</a>
            </Li>
            <Li>
                <a href="servicios.php?tipo=c" class="desing__btn">Esculpidas</a>
            </li>
        </ul>
    </div>

    <?php
    $tipo = array("Semipermanente", "Capping", "Esculpidas");
    if (isset($_GET["tipo"])) {
        $servicios = $_GET["tipo"];
        switch ($servicios) {
            case "a":
                $tipo = "Semipermanente";
                $descripcion = "Se realizan los días lunes a viernes de 8:00 a 12:00";
                $personal = "Manicuras: Micaela / iliana";
                $img = "./images/micaelailianaromina.png";
                break;
            case "b":
                $tipo = "Capping";
                $descripcion = "Se realizan los días lunes a viernes de 12:00 a 16:00";
                $personal = "Manicuras: Micaela / Iliana";
                $img = "./images/micaelailiana.png";
                break;
            case "c":
                $tipo = "Esculpidas";
                $descripcion = "Se realizan los días martes y sábado de 8:00 a 16:00";
                $personal = "Manicuras: Micaela";
                $img = "./images/micaela.jpg";
                break;
        }
    ?>

        <section class="servicios_container">
            <div class="servicios_tipo">
                <?php echo $tipo; ?>
            </div>
        </section>
        <section class="servicios_container">
            <div class="servicios_descripcion">
                <?php echo $descripcion; ?>
            </div>
        </section>
        <section class="servicios_container">
            <div class="servicios_descripcion">
                <?php echo $personal; ?>
            </div>
        </section>
        <div class="servicios_container_img">
            <div class="container_img">
                <img src=<?php echo "$img"; ?> class="servicios__img">
            </div>
        </div>


    <?php } ?>
</section>
<?php include("footer.php") ?>