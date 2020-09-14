<?php
$tituloPagina = 'Tratamientos Para Varices';
$descripcion = 'Hoy en día hay diversos tratamientos para várices y es importante elegir el indicado, por eso asesorese con un médico especialista.';
$palabrasClave = 'eliminar varices, borrar varices, tratamientos para varices, tratamiento de varices, esclerosantes para varices, esclerosantes, spider, laser para varices';

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
            <h1 class="titulo-seccion texto-secundario">Tratamientos de Varices</h1>
            <p class="sub-tit">Vea a continuación los diferentes tratamientos que existen hoy en dia.</p>
            <a href="#tratamientos" class="btn-doc btn-primario">Ver tratamientos</a>
        </div>
    </div>
</div>

<div id="tratamientos" class="tratamiento-destacado pad-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 md-pb-15">
                <img class="border-doc la-sombra" src="img/procedimiento-01.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12">
                <h2 class="mini-titulo texto-secundario">Radiofrecuencia para Arañitas</h2>
                <p class="mini-descripcion">
                    Se utilizan de dos formas distintas para el tratamiento de las várices.
                    <span>
                        Hay un tipo de láser/radiofrecuencia para tratar venas pequeñas en consultorios y otro tipo de láser/radiofrecuencia para aplicar en quirófano a las várices grandes.
                    </span>
                </p>
                <p class="mini-descripcion">
                    <span>
                        La radiofrecuencia o láser son tratamientos no invasivos, es decir que no llevan inyecciones o pinchazos de ningún tipo.
                    </span>
                    <br>
                    El láser y la radiofrecuencia transmiten energía para eliminar las várices y evitar que se vean.
                </p>
                <a class="btn-doc btn-turno" href="#" data-toggle="modal" data-target="#sacar-turno-modal">Sacar Turno</a>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="text-center pb-4 md-pb-2 mt-4">
            <h3 class="sub-mini-titulo no-margin">Beneficios</h3>
            <div class="raya margin-auto"></div>
            <div class="bloque-trat mt-4">
                <div class="info-trat">
                    <ul class="lista text-left">
                        <li>Resultados duraderos e inmediatos.</li>
                        <li>Sesiones rápidas (menos de 30 minutos habitualmente), sin preparación previa necesaria.</li>
                        <li>Se puede utilizar en todo el cuerpo, inclusive en las áreas más sensibles como los tobillos, las rodillas y la cara.</li>
                        <li>No se necesitan vendajes, ni inactividad posterior ni tiempo de recuperación.</li>
                        <li>Tratamiento altamente tolerable, con moderado disconfort, no se precisa anestesia.</li>
                        <li>Para todos los tipos de piel.</li>
                    </ul>
                </div>
                <div class="info-trat">
                    <ul class="lista text-left">
                        <li>Sin efectos secundarios.</li>
                        <li>Puede aplicarse en cualquier época del año</li>
                        <li>No hay riesgos de hiper o hipopigmentación</li>
                        <li>No hay cicatrices</li>
                        <li>No hay hematomas</li>
                        <li>No hay reacciones alérgicas</li>
                        <li>No hay quemaduras</li>
                        <li>No hay necrosis</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="tratamiento-2 pad-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 md-pb-15">
                <h2 class="mini-titulo texto-blanco">Esclerosantes</h2>
                <p class="mini-descripcion texto-blanco">
                    Puede usarse para las venas varicosas superficiales, residuales o las venas varicosas recurrentes y las microvárices para obliterar la vena varicosa y hacerla desaparecer.
                </p>
                <p class="mini-descripcion texto-blanco">
                    Se inyecta una medicación especifica para cada paciente.
                </p>
                <p class="mini-descripcion texto-blanco">
                    Posteriormente, pueden aplicarse apósitos compresivos en el sitio de inyección y vendajes compresivos, entre cuyas opciones se incluyen vendaje crepe, vendaje elástico comercial o medias compresivas.
                </p>
                <button type="button" class="btn-doc btn-turno" data-toggle="modal" data-target="#sacar-turno-modal">
                    Sacar Turno
                </button>
            </div>
            <div class="col-lg-6 col-md-12">
                <img class="border-doc" src="img/procedimiento-01.jpg" alt="Esclerosantes">
            </div>
        </div>
    </div>
</div>

<div class="muchos-tratamientos pad-70">
    <div class="container">
        <div class="row un-tratamiento mb-5">
            <div class="col-lg-4 col-md-5 md-pb-15">
                <img class="hover-bw" src="img/procedimiento-03.jpg" alt="Cirugia Laser">
            </div>
            <div class="col-lg-8 col-md-7">
                <h3 class="mini-titulo texto-secundario">Microcirugía Laser</h3>
                <p class="mini-descripcion">
                Para varices de todos los diametros, ambulatorio, sin reposo.<br>
                Es un tratamiento estético. Se realiza en quirófano. 
                </p>
                <div class="collapse" id="tratamiento3">
                    <p class="mini-descripcion">
                        Se realiza en quirofano para las varices mas grandes, es mas estetico que la Microcirugia, el procedimiento es similar, la recuperacion es mas rapida y el vendaje se utiliza 24 hs. la vuelta a la actividad es inmediata.
                    </p>
                </div>
                <a class="btn-vermas" data-toggle="collapse" href="#tratamiento3" role="button" aria-expanded="false" aria-controls="tratamiento3">Leer mas</a>
            </div>
        </div>
        <div class="row un-tratamiento mb-5">
            <div class="col-lg-4 col-md-5 md-pb-15">
                <img class="hover-bw" src="img/procedimiento-04.jpg" alt="Cirugia Convencional">
            </div>
            <div class="col-lg-8 col-md-7">
                <h2 class="mini-titulo texto-secundario">Cirugia Convencional</h2>
                <p class="mini-descripcion">
                    Es la extración de trayectos varicosos bajo anestesia<br>en quirófano con el consiguiente reposo y vendaje elástico.
                </p>
            </div>
        </div>
        <div class="row un-tratamiento mb-5">
            <div class="col-lg-4 col-md-5 md-pb-15">
                <img class="hover-bw" src="img/procedimiento-01.jpg" alt="Laser Endovenoso">
            </div>
            <div class="col-lg-8 col-md-7">
                <h2 class="mini-titulo texto-secundario">Laser Endovenoso</h2>
                <p class="mini-descripcion">
                    Puede usarse para las venas varicosas superficiales, residuales o las venas varicosas recurrentes después de la cirugía y las microvárices para obliterar la vena varicosa. Un líquido irritante como el sulfato de tetradecil sódico (STD) se inyecta en el
                    vaso sanguíneo defectuoso.
                </p>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/plantillas/dudas.php'; ?>
<?php require_once 'includes/plantillas/footer.php'; ?>