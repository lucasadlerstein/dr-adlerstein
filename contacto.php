<?php 
$tituloPagina = 'Contacto';
$descripcion = 'Dr. Fabio Adlerstein - Médico Cirujano Flebólogo con más de 30 años de trayectoria.';
$palabrasClave = 'contacto, eliminar varices, varices, sacar varices, remedio para varices, tratamiento para varices';

require_once 'includes/plantillas/header.php'; ?>

    <div class="pagina-contacto parallax">
        <div class="fondo filtro-blanco pt-100 pad-100">
            <div class="container">
                <div class="titulo text-center pb-4">
                    <h2 class="titulo-seccion texto-primario">Contactame</h2>
                    <div class="descripcion-seccion">
                        <p>Escribime sin compromiso, responderé tu consulta.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-12 no-padding">
                        <div class="bg-primario h-con direccion-contacto borde-red-a">
                            <div class="text-left">
                                <div class="dir-item">
                                    <!-- <i class="dir-icono las la-mobile"></i>
                                    <div class="dir-contenido">
                                        <h3 class="dir-titulo">Teléfono</h3>
                                        <a href="tel:5491124094837" target="_blank" class="dir-info">11 2409 4837</a>
                                    </div> -->
                                </div>
                                <div class="dir-item">
                                    <i class="dir-icono lab la-whatsapp"></i>
                                    <div class="dir-contenido">
                                        <h3 class="dir-titulo">WhatsApp</h3>
                                        <a href="https://wa.me/5491124094837" target="_blank" class="dir-info">+54 9 11 2409 4837</a>
                                    </div>
                                </div>
                                <div class="dir-item">
                                    <i class="dir-icono las la-envelope-open"></i>
                                    <div class="dir-contenido">
                                        <h3 class="dir-titulo">Email</h3>
                                        <a href="mailto:dr@adlerstein.com.ar" target="_blank" class="dir-info">dr@adlerstein.com.ar</a>
                                    </div>
                                </div>
                                <div class="dir-item">
                                    <i class="dir-icono las la-map-marker"></i>
                                    <div class="dir-contenido">
                                        <h3 class="dir-titulo">Dirección</h3>
                                        <a href="#mapas" id="dire-clic" class="dir-info scrollTo">Palermo, San Isidro, Belgrano.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 no-padding">
                        <div class="bg-secundario h-con borde-red-b">
                            <div class="formulario-inicio">
                                <?php require_once 'includes/plantillas/formulario-contacto.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="mapas" id="mapas">
        <div class="container pad-100 pb-5 titulo text-center">
            <h2 class="titulo-seccion texto-primario no-margin">Encontranos</h2>
            <div class="descripcion-seccion">
                <p>en el consultorio más cercano a vos.</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-lg-6 col-md-6 col-sm-12 unMapa">
                <h3 class="mini-titulo">Palermo</h3>
                <h4 class="mini-descripcion pb-2">Av. Santa Fe 3283, CABA</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.6343797081563!2d-58.413390884770706!3d-34.5881167804636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca822edb9d53%3A0xebcc815674c1028!2sAv.%20Santa%20Fe%203283%2C%20C1425%20CABA!5e0!3m2!1ses-419!2sar!4v1592253114631!5m2!1ses-419!2sar"
                    width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 unMapa">
                <h3 class="mini-titulo">San Isidro</h3>
                <h4 class="mini-descripcion pb-2">Av. del Libertador 16483, San Isidro</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13157.716015631759!2d-58.51073!3d-34.4666397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd1f896afb73e450c!2sSan%20Isidro%20Medicina%20S.A.!5e0!3m2!1ses-419!2sar!4v1592253057705!5m2!1ses-419!2sar"
                    width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 unMapa">
                <h3 class="mini-titulo">Belgrano</h3>
                <h4 class="mini-descripcion pb-2">Tte. Benjamín Matienzo 2615, CABA</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.168530735791!2d-58.44378468477103!3d-34.57460198046702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5c01f7ab111%3A0xd50a106f60f51bb!2sTte.%20Benjam%C3%ADn%20Matienzo%202615%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1600096899491!5m2!1ses-419!2sar" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 unMapa">
                <h3 class="mini-titulo">Tigre</h3>
                <h4 class="mini-descripcion pb-2">Av. Liniers 2673, Tigre</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3290.6010086245033!2d-58.5971261849244!3d-34.43688858050304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1b549606b9b9079%3A0xffb59220ef800238!2sCentro%20M%C3%A9dico%20del%20Sol!5e0!3m2!1ses-419!2sar!4v1600098193598!5m2!1ses-419!2sar" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div> -->
    
<?php require_once 'includes/plantillas/footer.php'; ?>