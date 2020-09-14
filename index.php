<?php
$tituloPagina = 'Médico Cirujano Flebólogo';
$descripcion = 'Flebólogo con más de 30 años de trayectoria. Eliminá tus várices con tratamientos médicos efectivos.';
$palabrasClave = 'varices, borrar varices, eliminar varices, prp, plasma rico en plaquetas, tratamiento para varices';

require_once 'includes/plantillas/header.php'; ?>

<div class="slider-inicio">
    <div id="carouselInicioDoc" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active slider1" data-interval="4000">
                <img loading="lazy" src="img/slider-01.jpg" class="d-block w-100" alt="Dr. Fabio Adlerstein">
                <div class="carousel-caption texto-carousel">
                    <h3>30 años de trayectoria</h3>
                    <h1>Dr. Fabio Adlerstein</h1>
                    <p>Médico Cirujano y Flebológo</p>
                    <a href="turnos" class="btn-doc btn-primario">Sacar turno</a>
                </div>
            </div>
            <div class="carousel-item" data-interval="4000">
                <img loading="lazy" src="img/slider-02.jpg" class="d-block w-100" alt="Flebologia: varices, arantas, celulitis">
                <div class="carousel-caption texto-carousel">
                    <h2>La estética de tus piernas,</h2>
                    <h3>en manos de un profesional</h3>
                    <p>Tratamientos a medida de cada paciente</p>
                    <a href="tratamientos-varices" class="btn-doc btn-primario">Ver tratamientos</a>
                </div>
            </div>
            <div class="carousel-item" data-interval="4000">
                <img loading="lazy" src="img/slider-03.jpg" class="d-block w-100" alt="Medicina Estética, Botox, Plasma Rico en Plaquetas">
                <div class="carousel-caption texto-carousel">
                    <h2>Medicina Estética</h2>
                    <h3>Tratá con profesionales</h3>
                    <p>Nos importa tu bienestar, salud y belleza</p>
                    <a href="#" class="btn-doc btn-primario" data-toggle="modal" data-target="#sacar-turno-modal">Sacar turno</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row tres-cajas">
    <div class="col-lg-4 col-xs4 bg-primario">
        <div class="item-caja container">
            <div class="contenido-caja">
                <i class="las la-walking"></i>
                <div class="info-caja">
                    <h2>Tratamientos Ambulatorios</h2>
                    <p>Siempre vida normal</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-xs4 bg-secundario">
        <div class="item-caja container">
            <div class="contenido-caja">
                <i class="las la-fingerprint"></i>
                <div class="info-caja">
                    <h2>Seguimiento único</h2>
                    <p>A cada paciente</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-xs4 bg-primario">
        <div class="item-caja container">
            <div class="contenido-caja">
                <i class="las la-map-marker"></i>
                <h2>Siempre cerca tuyo</h2>
                <p>Siempre donde vos estás</p>
            </div>
        </div>
    </div>
</div>

<div class="sobre-mi bg-white my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-6 order-last text-center imagen-sobre-mi mob-mb-40">
                <img class="border-doc la-sombra" src="img/doctor.jpg" width="80%" style="max-width:800px;" alt="Sobre Mi - Dr. Fabio Adlerstein">
                <div class="logo-imagen">
                    <i class="las la-star-of-life"></i>
                </div>
            </div>
            <div class="col-lg-6 col-xs-6 text-left">
                <div class="mt-3">
                    <h2 class="mini-titulo">Sobre Mi</h2>
                    <h3 class="mini-descripcion">Dr. Fabio Adlerstein</h3>
                    <p>
                        <ul>
                            <li><i class="las la-star"></i>Médico egresado de la Universidad de Buenos Aires (UBA) en 1989</li>
                            <li><i class="las la-star"></i>Especialista en Cirugía General, título otorgado por el Ministerio de Salud Pública de la Nación en 1994</li>
                            <li><i class="las la-star"></i>Flebólogo, Asociación Médica Argentina en 1995</li>
                            <li><i class="las la-star"></i>Miembro de la Asociación Argentina de Flebología</li>
                            <li><i class="las la-star"></i>Miembro Asociación Argentina de Cirugía MAAC</li>
                            <li><i class="las la-star"></i>Miembro Colegio Americano de Cirugía Flebológica</li>
                            <li><i class="las la-star"></i>Fellow of The American College of Phlebology Surgeon FACS</li>
                        </ul>
                    </p>
                    <div style="display:inline-grid;grid-gap:10px">
                        <a href="sobre-mi" class="btn-doc btn-primario">Más información</a>
                        <a target="_blank" href="turnos" class="btn-doc btn-turno">Sacar turno Online</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="numeros-doc bg-doc-pac parallax">
    <div class="fondo filtro-primario-fuerte pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 md-mb-3">
                    <div class="item-numero">
                        <div class="icono-numero">
                            <i class="las la-syringe"></i>
                        </div>
                        <div class="info-numero">
                            <span>+<span class="numero-animado" id="numero-1">5</span>K</span>
                            <p>Cirugías Realizadas</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 md-mb-3">
                    <div class="item-numero">
                        <div class="icono-numero">
                            <i class="las la-calendar-check"></i>
                        </div>
                        <div class="info-numero">
                            <span class="numero-animado" id="numero-2">+25</span>
                            <p>Años de Experiencia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 md-mb-3">
                    <div class="item-numero">
                        <div class="icono-numero">
                            <i class="las la-smile"></i>
                        </div>
                        <div class="info-numero">
                            <span>+<span class="numero-animado" id="numero-3">15</span>K</span>
                            <p>Pacientes Atendidos</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 md-mb-3">
                    <div class="item-numero">
                        <div class="icono-numero">
                            <i class="las la-hospital"></i>
                        </div>
                        <div class="info-numero">
                            <span class="numero-animado" id="numero-4">5</span>
                            <p>Consultorios</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="fondo fondo-tramado">
    <div class="pt-5 pb-5 md-pt-5 md-pb-4">
        <div class="container pt-5 pb-5">
            <div class="text-center pb-4 md-pb-2">
                <h2 class="titulo-seccion">Tratamientos</h2>
                <div class="descripcion-seccion">
                    <p>
                        Tratamientos tanto estéticos como médicos que realiza el Dr.<br> Puede obtener más información haciendo clic en cada uno de ellos
                    </p>
                </div>
            </div>
            <div class="carousel-tratamientos">
                <div>
                    <div class="slide-item item-servicios">
                        <div class="img-item">
                            <img loading="lazy" src="img/procedimiento-01.jpg" alt="Radiofrecuencia Láse - Tratamiento para Varices y Arañitas">
                        </div>
                        <div class="info-item">
                            <h4>Radiofrecuencia / Laser</h4>
                            <p>
                                El láser y la radiofrecuencia transmiten energía para eliminar las várices y evitar que se vean.<br>Tratamiento no invasivo, ambulatorio.
                            </p>
                            <a class="btn-info" href="tratamientos-varices"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-item item-servicios">
                        <div class="img-item">
                            <img loading="lazy" src="img/procedimiento-02.jpg" alt="Tratamiento de Esclerosantes para Várices y Arañitas">
                        </div>
                        <div class="info-item">
                            <h4>Esclerosantes</h4>
                            <p>
                                Tratamiento ambulatorio mediante microinyecciones para várices y/o arañitas de un tamaño pequeño.
                            </p>
                            <a class="btn-info" href="tratamientos-varices"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-item item-servicios">
                        <div class="img-item">
                            <img loading="lazy" src="img/procedimiento-03.jpg" alt="Cirugia Laser para várices y arañitas">
                        </div>
                        <div class="info-item">
                            <h4>Cirugia Laser</h4>
                            <p>
                                Menos agresivo, resultados más estéticos y no se extraen las venas como en la cirugía convencional. Ambulatorio, sin reposo.
                            </p>
                            <a class="btn-info" href="tratamientos-varices"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-item item-servicios">
                        <div class="img-item">
                            <img loading="lazy" src="img/procedimiento-04.jpg" alt="Cirugia convencional para varices y arañitas">
                        </div>
                        <div class="info-item">
                            <h4>Cirugía Convencional</h4>
                            <p>
                                Extracción del trayecto de la várice de modo quirúrgico.<br>Procedimiento a realizar en quirófano.
                            </p>
                            <a class="btn-info" href="tratamientos-varices"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/plantillas/testimoniales.php'; ?>

<div class="consulta-inicio bg-white cont-contacto-inicio">
    <div class="container">
        <div class="row">
            <div class="bg-secundario col-lg-7 no-padding col-md-12">
                <div class="formulario-inicio">
                    <div>
                        <h2 class="sub-mini-titulo texto-blanco">Hacé tu consulta</h2>
                    </div>
                    <?php require_once 'includes/plantillas/formulario-contacto.php'; ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 no-padding">
                <div class="bg-consulta-inicio pad-70">
                    <div class="sec-title">
                        <h2 class="sub-mini-titulo texto-blanco">Siempre a tu alcance</h2>
                    </div>
                    <div class="consulta-inicio-info items-blancos">
                        <?php require_once 'includes/plantillas/lista-contacto.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/plantillas/footer.php'; ?>