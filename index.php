<?php 
include ("header.php")
?>

<body>
    <!-- Encabezado -->
    <header class="header">
        <div class="header__overlay">
        </div>
        <div class="header__item-container">
            <h1 class="header__title">KRYSA NAILS</h1>
            <div class="redirection">
            </div>
        </div>
        <div class="nav__logo-container">
            <a href="https://ar.pinterest.com/damianayensina/uñasdiseños/" target="_blank"><img class="nav__logo"
                    src="./images/k.jpg" alt="Logo Krysa"></a>
        </div>
    </header>

    <?php 
include ("carrusel.php")
?>

    <!-- Principal -->
    <main class="main">
        <section>
            <h2 class="main_conteiner">UÑAS PERFECTAS SIEMPRE</h2>
            <h3>LOCAL CORONDA - SAN MARTIN 2044</h3>
        </section>
    </main>
    <!-- Secciones 1 -->
    <Div class="container">
        <section class="design">
            <h2 class="design__h2">DISEÑOS</h2>
            <article class="tipe">
                <h3>1-Diseño</h3>
                <img class="design__img" src="./images/img1.webp" alt="Uñas">
                <p>Lorem ipsum dolor sit, amet </p>
                <button class="desing__btn">más información</button>
            </article>
            <article class="tipe">
                <h3>2-Diseño</h3>
                <img class="design__img" src="./images/img2.webp" alt="Uñas">
                <p>Lorem ipsum dolor sit, amet </p>
                <button class="desing__btn">más información</button>
            </article>
            <article class="tipe">
                <h3>3-Diseño</h3>
                <img class="design__img" src="./images/img3.webp" alt="Uñas">
                <p>Lorem ipsum dolor sit, amet </p>
                <button class="desing__btn">más información</button>
            </article>
        </section>
        <!-- Seccion 2 -->
        <section class="mid">
            <div class="mid__1">
                <h2>Semipermanente</h2>
                <H3>Precio $8000</H3>
                <ul> 
                    <Li>Duración del turno: 50 minutos.</li>
                    <Li>Las uñas duran 2 semanas aproximadamente.</li>
                    <Li>Incluye: decoración de 2 uñas</li>
                </ul>
            </div>
            <div class="mid__2">
                <h2>Capping</h2>
                <H3>Precio $10000</H3>
                <ul>
                    <Li>Duración del turno: 80 minutos.</u></li>
                    <Li>Las uñas duran 3 semanas aproximadamente.</></li>
                    <Li>incluye: decoracion 3 uñas,limado, cutícula, esmaltado, exfoliación con exfoliantes naturales y masajes con aceites tibios.</li>
                </ul>
            </div>
            <div class="mid__3">
                <h2>Esculpidas</h2>
                <H3>Precio $15000</H3>
                <ul>
                    <Li>Duración del turno: 120 minutos.</></li>
                    <Li>Las uñas duran 3 semanas aproximadamente.</></li>
                    <Li>incluye: decoración en 5 uñas, limado, cutícula, esmaltado, exfoliación con exfoliantes naturales y masajes con aceites tibios.</li>
                </ul>
            </div>
        </section>
        <!-- Secciones 3 -->
        <section class="section">
            <h2>Consultar</h2>
            <ul class="section__ul">
                <Li> <a href='#' class="section__link">Manicura a domicilio</a></li>
                <Li> <a href='#' class="section__link">Casamiento/recepciones</a></li>
            </ul>
            <h2>TURNOS</h2>
            <ul class="section__ul">
                <Li> <a href='#' class="section__link">Lunes</a></L>
                <Li> <a href='#' class="section__link">Martes</a></li>
                <Li> <a href='#' class="section__link">Miercoles</a></li>
                <Li> <a href='#' class="section__link">Jueves</a></li>
                <Li> <a href='#' class="section__link">Viernes</a></li>
                <Li> <a href='#' class="section__link">Sábados</a></li>
            </ul>
        </section>
    </Div>

    <?php include ("footer.php") ?>