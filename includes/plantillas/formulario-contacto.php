<form action="form.php" method="POST" id="contacto-inicio">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>   
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
        </div> 
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" placeholder="Mensaje" id="mensaje" name="mensaje" rows="3" required></textarea>
    </div>
    <div class="form-group text-right">
        <button class="btn-doc btn-blanco" id="btn-enviar-form">Consultar</button>
    </div>

</form>