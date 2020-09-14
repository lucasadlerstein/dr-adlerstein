<footer class="footer-doc">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="columna-footer">
                    <div class="logo-footer">
                        <img src="img/logo-blanco.png" alt="Logo Doc">
                    </div>
                    <div class="descripcion-footer">
                        <p class="pb-0">Médico Cirujano Estético y Flebólogo</p>
                        <p class="pt-0">MN 80131 | MP 442751</p>
                    </div>
                    <div class="lista-footer">
                        <ul>
                        <li>
                                <a href="#" data-toggle="modal" data-target="#sacar-turno-modal">
                                    <i class="las la-globe-americas"></i>Buenos Aires, Argentina
                                </a>
                            </li>
                            <li>
                                <a href="mailto:dr@adlerstein.com.ar">
                                <i class="las la-envelope"></i>dr@adlerstein.com.ar
                                </a>
                            </li>
                            <li>
                                <a href="tel:5491154999937">
                                <i class="las la-phone"></i>11 5499 9937
                                </a> 
                            </li>
                            <li>
                                <a href="https://wa.me/5491154999937" target="_blank">
                                <i class="lab la-whatsapp"></i>11 5499 9937
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="columna-footer">
                    <div class="titulo">
                        <h5>Consultorios</h5>
                    </div>
                    <div class="lista-footer">
                        <ul>
                            <li>
                                <i class="las la-caret-right"></i> Palermo
                            </li>
                            <li>
                                <i class="las la-caret-right"></i> San Isidro
                            </li>
                            <li>
                                <i class="las la-caret-right"></i> Belgrano
                            </li>
                            <li>
                                <i class="las la-caret-right"></i> Tigre
                            </li>
                            <li>
                                <i class="las la-caret-right"></i> San Miguel
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="columna-footer">
                    <div class="titulo">
                        <h5>Newsletter</h5>
                    </div>
                    <div class="descripcion-footer">
                        <p class="pt-0">
                            Enterate antes que nadie de las novedades, promociones, consejos y más del Dr. Adlerstein
                        </p>
                        <!-- <form class="form-newsl" action="">
                            <input type="email" name="emailNews" class="emailNewsl" placeholder="Ingrese su Email" required>
                            <button type="submit" name="newsEnviado" class="enviarNewsl">
                                    <i class="las la-arrow-right"></i>
                                </button>
                        </form> -->
                    </div>
                    <div class="redes-sociales">
                        <ul>
                            <li>
                                <a target="_blank" href="https://www.facebook.com/Dr.Adlerstein/"><i class="lab la-facebook-f"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/dr.fabioadlerstein/"><i class="lab la-instagram"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://wa.me/5491154999937"><i class="lab la-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="barra-footer">
    <div class="container text-center derechos-footer">
        <p>Todos los derechos reservados &copy;</p>
        <a target="_blank" href="https://mepiache.com.ar">
            <img src="img/mepiache-agency.png" alt="Desarrollado por Mepiache Agency">
        </a>
    </div>
</div>

<div class="globo-turno">
    <a target="_blank" href="turnos" class="btn-doc btn-turno-header">Reservar mi turno</a>
</div>

<div class="globo-wpp">
    <a href="https://wa.me/5491154999937" target="_blank">
        <img src="img/whatsapp_logo.jpg" alt="Enviar WhatsApp al Dr. Adlerstein">
    </a>
</div>

<?php require 'sacar-turno-modal.php'; ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin=" anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

<?php 
    $archivo = basename($_SERVER['PHP_SELF']); 
    $pagina = str_replace(".php", "", $archivo);    
    
    if($pagina == 'contacto' || $pagina == 'index'){
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>';
        // echo '<script src="js/jquery.animateNumber.min.js"></script>';
    }
?>

<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/main.js"></script>



<script>
    var slider = tns({
    container: '.carousel-testimoniales',
    items: 1,
    autoplay: true,
    autoplayButtonOutput: false,
    mouseDrag: true,
    swipeAngle: false,
    speed: 400,
    gutter: '10',
    controls: false,
    nav: false,
    responsive: {
        640: {
            edgePadding: 20,
            gutter: 20

        },
        991: {
            items: 2,
            gutter: 40
        }
    }
});
</script>

<script>
    var slider = tns({
    container: '.carousel-tratamientos',
    items: 1,
    autoplay: true,
    autoplayButtonOutput: false,
    mouseDrag: true,
    swipeAngle: false,
    speed: 400,
    gutter: '20',
    controls: true,
    controlsPosition: 'bottom',
    controlsText: ['<i class="las la-chevron-circle-left"></i>', '<i class="las la-chevron-circle-right"></i>'],
    nav: false,
    responsive: {
        640: {
            edgePadding: 20,
            gutter: 20,
            items: 2
        },
        700: {
            gutter: 30
        },
        1000: {
            items: 3
        }
    }
});
</script>

<script>
    var slider = tns({
    container: '.carousel-ooss',
    items: 3,
    autoplay: true,
    autoplayButtonOutput: false,
    mouseDrag: true,
    swipeAngle: false,
    speed: 400,
    gutter: '10',
    controls: false,
    nav: false,
    responsive: {
        640: {
            items: 4,
            edgePadding: 20,
            gutter: 20

        },
        991: {
            items: 5,
            gutter: 40
        }
    }
});
</script>

</body>
</html>