<?php
$tituloPagina = 'Várices - Venas Varicosas';
$descripcion = 'Las varices son unas venas de la pierna que se dilatan y se retuercen, y aparecen en la superficie de la piel con aspecto de cordones hinchados.';
$palabrasClave = 'varices, varice, eliminar varices, tratamientos para varices, trombosis, tratamiento de varices, esclerosantes';

require_once 'includes/plantillas/header.php';
function imgDestacadaResponsive($celular, $escritorio){ ?>
    <style> .destacado { background-image: url(<?php echo $celular; ?>); }
@media (min-width: 768px) { .destacado { background-image: url(<?php echo $escritorio; ?>);} } </style> <?php
} ?>

<?php echo imgDestacadaResponsive('img/bg-varices-celular.jpg', 'img/bg-varices.jpg'); ?>

<div class="destacado">
    <div class="container">
        <div class="recuadro">
            <p class="categoria">Flebología</p>
            <h1 class="titulo-seccion texto-secundario">Varices</h1>
            <p class="sub-tit">Intervenga en la salud y estética de sus piernas con un profesional médico de trayectoria.</p>
            <a href="#tratamientos-seccion" class="btn-doc btn-primario scrollTo">Más informacion</a>
        </div>
    </div>
</div>

<div class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-6 text-center imagen-sobre-mi mob-mb-40">
                <img class="border-doc la-sombra" src="img/varices02.jpg" width="90%" style="max-width:800px;" alt="Sobre Mi - Dr. Fabio Adlerstein">
            </div>
            <div class="col-lg-6 col-xs-6 text-left">
                <div class="mt-3">
                    <h2 class="titulo-sec-pat texto-secundario">
                        Las varices son unas venas de la pierna que se dilatan y se retuercen, y aparecen en la superficie de la piel con aspecto de cordones hinchados.
                    </h2>
                    <p>
                        No se trata solamente de un problema cosmético o un síntoma de la edad que hay que asumir, las varices también tienen importancia médica. Porque si no se tratan, a partir de las varices más pequeñas pueden formarse otras mucho más grandes, del grosor
                        de un dedo.
                    </p>
                    <p>
                        Y puede que no sólo provoquen grandes molestias, también pueden ser un gran peligro para la salud. Si no se tratan, pueden provocar una afección venosa permanente, como incluso las úlceras varicosas o la trombosis.
                    </p>

                    <a href="#tratamientos-seccion" class="btn-doc btn-primario scrollTo">Ver tratamientos</a>
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
                            <img loading="lazy" src="img/procedimiento-01.jpg" alt="Radiofrecuencia Laser">
                        </div>
                        <div class="info-item">
                            <h4>Radiofrecuencia Laser</h4>
                            <p>
                                El láser y la radiofrecuencia transmiten energía para tapar las venas y evitar que se vean.<br>Consultá para más información
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
                            <img loading="lazy" src="img/procedimiento-03.jpg" alt="Cirugia Laser">
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
                            <img loading="lazy" src="img/procedimiento-04.jpg" alt="Cirugía Convencional">
                        </div>
                        <div class="info-item">
                            <h4>Cirugía Convencional</h4>
                            <p>Son pequeños vasos sanguíneos rojos o azulados localizados justo debajo de la superficie cutánea.</p>
                            <a class="btn-info" href="tratamientos-varices"><i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="importancia">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cuadro">
                        <img loading="lazy" src="img/puntos.png" alt="Separador de puntos" class="atras-cuadro">
                        <h3 class="titulo-sec-pat">Factores de riesgo</h3>
                        <div class="raya"></div>
                        <p>
                            La insuficiencia venosa es con frecuencia genética. Pero otros factores como la laxitud del tejido conectivo básico, los embarazos y los cambios hormonales favorecen los trastornos venosos.
                        </p>
                        <p>
                            El alcohol, que relaja los vasos sanguíneos, también puede influir, al igual que la obesidad. Hábitos como estar mucho de pie o sentado y la falta de ejercicio físico también son negativos.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cuadro">
                        <img loading="lazy" src="img/puntos.png" alt="Separador de puntos" class="atras-cuadro">
                        <h3 class="titulo-sec-pat">Prevención</h3>
                        <div class="raya"></div>
                        <blockquote>
                            "Mejor caminar y estar acostado que estar sentado y de pie"
                        </blockquote>
                        <p>
                            Ejercicio físico y ejercicios específicos para las venas mantienen sus venas sanas y elásticas. Alternar la contracción y relajación de los músculos de las piernas mantiene realmente la sangre en movimiento. Las duchas con agua fría y caliente son asimismo
                            un regalo para las piernas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/plantillas/footer.php'; ?>