<?php
$tituloPagina = 'Plasma Rico en Plaquetas (PRP)';
$descripcion = 'El PRP mejora la piel y la rejuvenece de forma natural con la propia sangre de cada paciente.';
$palabrasClave = 'prp, plasma rico en plaquetas, rejuvenecimiento facial, plasma, plaquetas, plasma rico';

require_once 'includes/plantillas/header.php';
function imgDestacadaResponsive($celular, $escritorio){ ?>
    <style> .destacado { background-image: url(<?php echo $celular; ?>); }
@media (min-width: 768px) { .destacado { background-image: url(<?php echo $escritorio; ?>);} } </style> <?php
} ?>

<?php echo imgDestacadaResponsive('img/bg-prp-celular.jpg', 'img/bg-prp.jpg'); ?>
<div class="destacado">
    <div class="container">
        <div class="recuadro">
            <p class="categoria no-mobile">Medicina Estetica</p>
            <h1 class="titulo-seccion texto-secundario">Plasma Rico en Plaquetas</h1>
            <p class="sub-tit">El PRP mejora la piel y la rejuvenece de forma natural con la propia sangre de cada paciente.</p>
            <a href="#" class="btn-doc btn-primario" data-toggle="modal" data-target="#sacar-turno-modal">Mas informacion</a>
        </div>
    </div>
</div>

<div class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-6 text-center imagen-sobre-mi mob-mb-40">
                <img class="border-doc la-sombra" src="img/prp-01.jpg" width="90%" style="max-width:800px;" alt="Sobre Mi - Dr. Fabio Adlerstein">
            </div>
            <div class="col-lg-6 col-xs-6 text-left">
                <div class="mt-3">
                    <h3 class="titulo-sec-pat texto-secundario">
                        Una porción del centrifugado contiene plasma rico en plaquetas, que son las células que participan en la coagulación.
                    </h3>
                    <p>
                        Es ideal para aquellos casos en los que se desea mejorar el aspecto de la piel, aumentar su firmeza y luminosidad. <strong>Tiene un efecto rejuvenecedor y estimulante celular muy intenso.</strong>
                    </p>
                    <p>
                    Se trata de una técnica de regeneración de la piel, que permite mediante la estimulación los fibroblastos y la elastina, suavizar las arrugas y aportar un aspecto joven y luminoso a la piel.
                    </p>
                    <a href="#" class="btn-doc btn-primario" data-toggle="modal" data-target="#sacar-turno-modal">Mas informacion</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/plantillas/dudas.php'; ?>

<div class="importancia">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cuadro">
                        <img loading="lazy" src="img/puntos.png" alt="" class="atras-cuadro">
                        <h3 class="titulo-sec-pat">En la artrosis</h3>
                        <div class="raya"></div>
                        <p><strong>
                        Trata de aprovechar las propiedades curativas naturales de la sangre para reparar el cartílago dañado, los tendones, ligamentos, músculos, o incluso, hueso.
                        </strong></p>
                        <p>
                        Se utiliza normalmente para la artrosis de rodilla, y cadera, pero se puede utilizar en otras articulaciones.
                        </p>
                        <p>
                        Con el tratamiento de la artrosis con el plasma rico en plaquetas, un médico inyecta PRP directamente en la articulación afectada.
                        <br>La meta es:
                        <br>• Reducir e incluso eliminar el dolor
                        <br>• Mejorar la función articular
                        <br>• Enlentecer la evolución de la artrosis o incluso reparar los daños en el cartílago hasta donde biológicamente sea posible.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cuadro">
                        <img loading="lazy" src="img/puntos.png" alt="" class="atras-cuadro">
                        <h3 class="titulo-sec-pat">En la caída del cabello</h3>
                        <div class="raya"></div>
                        <p>
                            <strong>Es una novedosa técnica que permite aislar y utilizar los factores de crecimiento presentes en la sangre del propio paciente para potenciar, acelerar y estimular la regeneración de los tejidos.</strong>
                        </p>
                        <p>
                        Su aplicación a nivel capilar estimula la formación de colágeno elastina y ácido hialurónico aumentando además la vascularización a nivel del folículo piloso por lo que está indicada para frenar la caída del cabello y potenciar la regeneración en pacientes con pérdida moderada de pelo
                        </p>
                        <p>
                        Se realiza mediante microinyecciones en el cuero cabelludo de forma prácticamente indolora.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/plantillas/footer.php'; ?>