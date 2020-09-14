<?php
$tituloPagina = 'Medicina Estética';
$descripcion = 'La medicina estética es la rama de la medicina que privilegia la relación entre la salud y la belleza con un abordaje terapéutico clínico.';
$palabrasClave = 'belleza, botox, plasma rico en plaquetas, plasma, prp, relleno, celulitis, varices, eliminar varices, mesoterapia';

require_once 'includes/plantillas/header.php'; ?>

<div class="destacado" style="background-image: url(img/bg-estetica.jpg);">
    <div class="destacado-contenido">
        <h1 class="titulo-sec-2 tex-blan-fon">Medicina Estética</h1>
        <h2 class="sub-titulo-sec-2 tex-blan-fon">El poder de la belleza</h2>
        <a href="#tratamientos" class="btn-doc btn-blanco scrollTo">Ver Tratamientos</a>
    </div>
</div>

<div class="nueva-vos pad-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-xs-12">
                <div class="p2-iconos align-items-center no-mobile">
                    <div class="p2-unIcono">
                        <i class="las la-stethoscope fs-50 texto-secundario"></i>
                        <h4>Médicos calificados</h4>
                    </div>
                    <div class="p2-unIcono">
                        <i class="las la-smile fs-50 texto-secundario"></i>
                        <h4>Pacientes contentos</h4>
                    </div>
                    <div class="p2-unIcono">
                        <i class="las la-procedures fs-50 texto-secundario"></i>
                        <h4>Tratamientos Ambulatorios</h4>
                    </div>
                    <div class="p2-unIcono">
                        <i class="las la-star-of-life fs-50 texto-secundario"></i>
                        <h4>Tu salud siempre primero</h4>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-xs-12 col-md-5">
                <img class="p2-img" src="img/doctor.jpg" alt="Dr. Adlerstein">
            </div>
            <div class="col-lg-5 col-xs-12 col-md-7">
                <div class="p2-contenido">
                    <div class="cont">
                        <h2>Descubrí una nueva vos</h2>
                        <p>Dejá atrás lo que nunca te gustó</p>
                        <p>
                            La <strong>medicina estética</strong> es la rama de la medicina que privilegia la relación entre la salud y la belleza con un abordaje terapéutico clínico.
                        </p>
                        <p>
                        Tiene como objetivo el mantenimiento de la "salud estética" en condiciones fisiológicas como la restauración de la misma en situaciones patológicas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="tratamientos" class="fondo fondo-tramado">
    <div class="pt-5 pb-5 md-pt-5 md-pb-4">
        <div class="container pt-5 pb-5">
            <div class="text-center pb-4 md-pb-2">
                <h2 class="titulo-seccion">Tratamientos Estéticos</h2>
                <div class="descripcion-seccion">
                    <p>
                        Tratamientos estéticos médicos.<br>Siempre priorizando tu salud, bienestar y belleza.
                    </p>
                </div>
            </div>
            <div class="carousel-tratamientos">
                <div class="slide-item item-servicios">
                    <div class="img-item">
                        <img loading="lazy" src="img/botox.jpg" alt="Botox para Arrugas en Frente, Menton, Pata Gallo">
                    </div>
                    <div class="info-item">
                        <h4>Botox</h4>
                        <p>
                            Para arrugas de la frente, entrecejo y patas de gallo.
                            Es la aplicación de <strong>TOX</strong>ina <strong>BO</strong>tulinica para lograr que no se puedan mover esos músculos, entonces no se frunce la piel.
                        </p>
                        <a target="_blank" href="turnos" class="btn-doc btn-turno">Sacar turno Online</a>
                    </div>
                </div>
                <div class="slide-item item-servicios">
                    <div class="img-item">
                        <img loading="lazy" src="img/mesoterapia.jpg" alt="Tratamiento de Mesoterapia">
                    </div>
                    <div class="info-item">
                        <h4>Mesoterapia</h4>
                        <p>Microinyecciones que se realizan en la zona a tratar, ya sea para flaccidez de piel, adiposidades localizadas, celulitis, dolor, etc. Procedimiento ambulatorio.</p>
                        <a target="_blank" href="contacto" class="btn-doc btn-primario">Contactarse</a>
                    </div>
                </div>
                <div class="slide-item item-servicios">
                    <div class="img-item">
                        <img loading="lazy" src="img/prp.jpg" alt="Plasma Rico en Plaquetas - PRP">
                    </div>
                    <div class="info-item">
                        <h4>Plasma Rico en Plaquetas</h4>
                        <p>
                            Para mejorar la elasticidad de la piel, la luminosidad, textura, mejora pequeñas arrugas, celulitis, flaccidez, para rostro, glúteos, piernas, abdomen.
                        </p>
                        <a target="_blank" href="turnos" class="btn-doc btn-turno">Sacar turno Online</a>
                    </div>
                </div>
                <div class="slide-item item-servicios">
                    <div class="img-item">
                        <img loading="lazy" src="img/acido-hialuronico.jpg" alt="Ácido Hialuronico">
                    </div>
                    <div class="info-item">
                        <h4>Acido Hialuronico</h4>
                        <p>Sustancia mediante la cual se logra rellenar diferentes zonas y arrugas de la piel.</p>
                        <a target="_blank" href="contacto" class="btn-doc btn-primario">Contactarse</a>
                    </div>
                </div>
                <div class="slide-item item-servicios">
                    <div class="img-item">
                        <img loading="lazy" src="img/adiposidad-localizada.jpg" alt="Adiposidad localizada - Hidrolipoclaria ultrasonica">
                    </div>
                    <div class="info-item">
                        <h4>Hidrolipoclasia Ultrasónica</h4>
                        <p>Se inyecta en adiposidades localizadas una solución específica lipolítica, la cual produce la destrucción química de la adiposidad y mediante ultrasonido se realiza desde la superficie de la piel la destrucción física de la adiposidad.</p>
                        <a target="_blank" href="turnos" class="btn-doc btn-turno">Sacar turno Online</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once 'includes/plantillas/dudas.php'; ?>
<?php require_once 'includes/plantillas/footer.php'; ?>