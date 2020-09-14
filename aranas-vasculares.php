<?php
$tituloPagina = 'Arañitas - Arañas Vasculares';
$descripcion = 'Las arañitas son pequeños vasos sanguíneos rojos o azulados localizados justo debajo de la superficie cutánea';
$palabrasClave = 'arañitas, pierna, eliminar arañitas, sacar arañitas, varices';

require_once 'includes/plantillas/header.php';
function imgDestacadaResponsive($celular, $escritorio){ ?>
    <style> .destacado { background-image: url(<?php echo $celular; ?>); }
@media (min-width: 768px) { .destacado { background-image: url(<?php echo $escritorio; ?>);} } </style> <?php
} ?>

<?php echo imgDestacadaResponsive('img/bg-aranitas-celular.jpg', 'img/bg-aranitas.jpg'); ?>
<div class="destacado">
    <div class="container">
        <div class="recuadro">
            <p class="categoria">Flebología</p>
            <h1 class="titulo-seccion texto-secundario">Arañitas Vasculares</h1>
            <p class="sub-tit">Son pequeños vasos sanguíneos rojos o azulados localizados justo debajo de la superficie cutánea.</p>
            <a href="#tratamientos-seccion" class="btn-doc btn-primario scrollTo">Mas informacion</a>
        </div>
    </div>
</div>

<div class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-4 text-center imagen-sobre-mi mob-mb-40">
                <img loading="lazy" class="border-doc la-sombra" src="img/arania-01.jpg" height="90%" style="width:800px;max-width:100%;" alt="Arañas Vasculares - Dr. Fabio Adlerstein">
            </div>
            <div class="col-lg-8 col-xs-8 text-left">
                <div class="mt-3">
                    <h2 class="titulo-sec-pat texto-secundario">
                    Casi siempre miden unos pocos milímetros de longitud y están distribuidas por los muslos y las piernas dibujando como un mapa.
                    </h2>
                    <p>
                    Las arañas vasculares pueden ser un indicio de que debajo hay varices, es decir, de que se está iniciando una afección venosa. La aparición de "arañas vasculares" a los lados de los muslos también puede ser un indicio de un lipoedema o adiposidad localizada.
                    </p>
                    <p>
                        <strong>
                        En caso que sus arañas vasculares sean un trastorno venoso banal, existe la posibilidad de eliminarlas con un tratamiento de esclerosis, láser o radiofrecuencia.
                        </strong>
                    </p>

                    <button type="button" class="btn-doc btn-turno" data-toggle="modal" data-target="#sacar-turno-modal">
                    Sacar Turno
                     </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sintomas parallax">
    <div class="fondo filtro-primario-fuerte pad-100">
        <div class="container">
            <div class="titulo text-center pb-4">
                <h2 class="titulo-seccion texto-blanco">Síntomas</h2>
                <div class="descripcion-seccion">
                    <p class="texto-blanco">
                        Los primeros cambios en las venas de las piernas ya han comenzado normalmente mucho antes<br>de que usted descubra las varices u otros signos visibles.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="sintoma text-center">
                        <img loading="lazy" src="img/varices-icono1.svg" class="icono-sintoma" alt="Cansancio">
                        <h3 class="sub-mini-titulo texto-secundario">Cansancio</h3>
                        <p class="descripcion-sintoma">
                            El cansancio o los pinchazos en las piernas, los tobillos hinchados por la noche, la sensación de agujas y alfileres o el dolor en las piernas son las primeras señales de cambios en las venas. Las llamadas “venas de alarma”, un círculo de venas distendidas
                            en el tobillo, son un signo precoz importante.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="sintoma text-center">
                        <img loading="lazy" src="img/varices-icono2.svg" class="icono-sintoma" alt="Cansancio">
                        <h3 class="sub-mini-titulo texto-secundario">Hinchazón</h3>
                        <p class="descripcion-sintoma">
                            A esto le sigue posteriormente la hinchazón debido a la acumulación de agua, las llamadas "piernas hinchadas” Es importante la evaluación por el profesional para determinar el tratamiento adecuado en cada caso, es importante resaltar que la misma es indolora
                            y no presenta riesgo absoluto.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tratamientos -->
<section id="tratamientos-seccion" class="fondo fondo-tramado">
    <div class="pt-5 pb-5 md-pt-5 md-pb-4">
        <div class="container pt-5 pb-5">
            <div class="text-center pb-4 md-pb-2">
                <h2 class="titulo-seccion">Tratamientos</h2>
                <div class="descripcion-seccion">
                    <p>
                        Tratamientos para várices.<br>Puede obtener más información haciendo clic en cada uno de ellos.
                    </p>
                </div>
            </div>
            <div class="carousel-tratamientos">
                <div>
                    <div class="slide-item item-servicios">
                        <div class="img-item">
                            <img  loading="lazy" src="img/procedimiento-01.jpg" alt="Radiofrecuencia Laser">
                        </div>
                        <div class="info-item">
                            <h4>Radiofrecuencia Laser</h4>
                            <p>
                                El láser y la radiofrecuencia transmiten energía para tapar las venas y evitar que se vean.<br>
                            </p>
                            <a class="btn-info" href="tratamientos-varices"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-item item-servicios">
                        <div class="img-item">
                            <img loading="lazy" src="img/procedimiento-02.jpg" alt="Esclerosantes">
                        </div>
                        <div class="info-item">
                            <h4>Esclerosantes</h4>
                            <p>
                                Para venas varicosas superficiales, residuales o recurrentes después de la cirugía y las microvárices para obliterar la vena varicosa.
                            </p>
                            <a class="btn-info" href="tratamientos-varices"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-item item-servicios">
                        <div class="img-item">
                            <img  loading="lazy" src="img/procedimiento-03.jpg" alt="Cirugia Laser">
                        </div>
                        <div class="info-item">
                            <h4>Cirugia Laser</h4>
                            <p>Es mucho menos agresivo, de resultados más estéticos y no se extraen las venas como en la cirugía convencional de várices.</p>
                            <a class="btn-info" href="tratamientos-varices"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide-item item-servicios">
                        <div class="img-item">
                            <img  loading="lazy" src="img/procedimiento-04.jpg" alt="Cirugía Convencional">
                        </div>
                        <div class="info-item">
                            <h4>Cirugía Convencional</h4>
                            <p>Es la cirugía mediante la cual se realiza la extracción de las venas enfermas.</p>
                            <a class="btn-info" href="tratamientos-varices"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/plantillas/dudas.php'; ?>
<?php require_once 'includes/plantillas/footer.php'; ?>