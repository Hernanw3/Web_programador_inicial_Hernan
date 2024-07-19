<?php 
include ("header.php")
?>

<body class="body_contacto">

<?php
    if(isset($_GET ['ok'])){
        echo "<h3> Mensaje enviado con éxito </h3>";
    }
    ?>

    <form action="consulta.php" method="post" class="form"> 
        <h2> Formulario de contacto</h2>

        <!--SIMPLE IMPUTS-->
    <fieldset>
        <Legend>INFORMACION BASICA</Legend>
        <div class="form_input">
            <label for="nombre">Nombre completo</label>
                <input type="text" name="nombre" placeholder="Hernan Oyarzabal">
        </div>
        <div class="form_input">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Ejemplo@gmail.com">
        </div>
        <div class="form_input">
            <label for="text">Asunto</label>
            <input type="asunto" name="asunto" placeholder="El asunto de tu mensaje">
        </div>
    </fieldset>
                
        <!--TEXT AREA-->
        <div class="form_input">
            <label>Mensaje
                <textarea name="mensaje" placeholder="Deja tu mensaje"></textarea>
            </label>
        </div>
        <!--Enviar consulta-->
        <div class="form_input">
            <input type="submit" value="Enviar Consulta">
        </div>
    </form>


<?php 
include ("footer.php")
?>