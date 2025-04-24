

<?php $__env->startSection('content'); ?>

<div class="container-fluid d-flex justify-content-center align-items-center mt-5" style="min-height: 100vh;">
    <div class="row justify-content-center w-70 g-4 mt-4">

        <!-- Producto 1 -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center" id="producto-1">
            <div class="card shadow-sm" style="margin-bottom: 20px;">
                <img class="card-img-top img-fluid" src="assets/img/Chocolate.jpg" alt="Galletas" style="margin-top: 10px;">
                <div class="card-body" style="font-family: 'Poppins', sans-serif;">
                    <h5 class="card-title">Caja de Galletas</h5>
                    <p class="card-text">Galletas de chocolate crujientes, dulces y deliciosas. Perfectas para regalar o disfrutar en cualquier momento.</p>
                    <p class="card-text font-weight-bold">Precio: $120 MXN</p>
                    <div class="cantidad-container d-flex justify-content-center align-items-center mb-2">
                        <input type="number" class="form-control cantidad-input mx-2" value="1" min="1" max="10" style="width: 60px; text-align: center;">
                    </div>
                    <button class="btn btn-primary comprar-btn"
                            style="background-color: #f8c8dc; border-color: #000000; border-width: 3px; font-family: 'Poppins', sans-serif; color: #000;"
                            data-id="1" data-nombre="Caja de Galletas" data-precio="120">
                        Comprar
                    </button>
                </div>
            </div>
        </div>
        

        <!-- Producto 2 -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center" id="producto-2">
            <div class="card shadow-sm" style="margin-bottom: 20px;">
                <img class="card-img-top img-fluid" src="assets/img/cupcakes.jpg" alt="Cupcakes con Frutos Rojos" style="margin-top: 10px;">
                <div class="card-body" style="font-family: 'Poppins', sans-serif;">
                    <h5 class="card-title">Cupcakes del Bosque Encantado</h5>
                    <p class="card-text">Deliciosos cupcakes adornados con fresas, moras y frambuesas, perfectos para disfrutar en cualquier momento especial o como un dulce capricho. ¡Vienen 6 en la caja!</p>
                    <p class="card-text font-weight-bold">Precio: $170 MXN</p>
                    <div class="cantidad-container d-flex justify-content-center align-items-center mb-2">
                        <input type="number" class="form-control cantidad-input mx-2" value="1" min="1" max="10" style="width: 60px; text-align: center;">
                    </div>
                    <button class="btn btn-primary comprar-btn"
                            style="background-color: #f8c8dc; border-color: #000000; border-width: 3px; font-family: 'Poppins', sans-serif; color: #000;"
                            data-id="2"
                            data-nombre="Cupcakes del Bosque Encantado"
                            data-precio="80"
                            data-img="cupcakes.jpg">
                        Comprar
                    </button>
                </div>
            </div>
        </div>
        

        <!-- Agrega los demás productos igual, eliminando solo id="cantidad" de cada input -->


        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center" id="producto-3">
    <div class="card shadow-sm" style="margin-bottom: 20px;">
        <img class="card-img-top img-fluid" src="assets/img/Estrellas.jpg" alt="Galletas de Estrellas" style="margin-top: 10px;">
        <div class="card-body" style="font-family: 'Poppins', sans-serif;">
            <h5 class="card-title">Galletas Estelares</h5>
            <p class="card-text">Deliciosas galletas en forma de estrellas, perfectas para endulzar tu día o para compartir en cualquier ocasión especial. ¡Vienen 10 galletas pequeñas en cada paquete!</p>
            <p class="card-text font-weight-bold">Precio: $90 MXN</p>
            <div class="cantidad-container d-flex justify-content-center align-items-center mb-2">
                <input type="number" class="form-control cantidad-input mx-2" value="1" min="1" max="10" style="width: 60px; text-align: center;">
            </div>
            <button class="btn btn-primary comprar-btn"
                    style="background-color: #f8c8dc; border-color: #000000; border-width: 3px; font-family: 'Poppins', sans-serif; color: #000;"
                    data-id="2" data-nombre="Galletas Estelares" data-precio="80">
                Comprar
            </button>
        </div>
    </div>
</div>


        <!-- ... Producto 3 al 7: mismos ajustes ... -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center" id="producto-4">
            <div class="card shadow-sm" style="margin-bottom: 20px;">
                <img class="card-img-top img-fluid" src="assets/img/Galletas.jpg" alt="Macarrones" style="margin-top: 10px;">
                <div class="card-body" style="font-family: 'Poppins', sans-serif;">
                    <h5 class="card-title">Macarrones de Chocolate</h5>
                    <p class="card-text">Exquisitos macarrones de chocolate, con una textura crujiente por fuera y suave por dentro, el dulce toque perfecto para cualquier ocasión.</p>
                    <p class="card-text font-weight-bold">Precio: $100 MXN</p>
                    <p class="card-text font-weight-bold text-success">¡Promoción! Lleva 12 macarrones por solo $100 MXN</p>
                    <div class="cantidad-container d-flex justify-content-center align-items-center mb-2">
                        <input type="number" class="form-control cantidad-input mx-2" value="1" min="1" max="10" style="width: 60px; text-align: center;">
                    </div>
                    <button class="btn btn-primary comprar-btn"
                            style="background-color: #f8c8dc; border-color: #000000; border-width: 3px; font-family: 'Poppins', sans-serif; color: #000;"
                            data-id="1" data-nombre="Macarrones de Chocolate" data-precio="100">
                        Comprar
                    </button>
                </div>
            </div>
        </div>
        

        
        <!-- ... Producto 3 al 7: mismos ajustes ... -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center" id="producto-5">
            <div class="card shadow-sm" style="margin-bottom: 20px;">
                <img class="card-img-top img-fluid" src="assets/img/Gelatina.jpg" alt="Gelatina" style="margin-top: 10px;">
                <div class="card-body" style="font-family: 'Poppins', sans-serif;">
                    <h5 class="card-title">Gelatinas de colores</h5>
                    <p class="card-text">Deliciosas gelatinas en diferentes colores y sabores, perfectas para cualquier evento o simplemente para disfrutar en casa.</p>
                    <p class="card-text font-weight-bold">Precio: $200 MXN</p>
                    <div class="cantidad-container d-flex justify-content-center align-items-center mb-2">
                        <input type="number" class="form-control cantidad-input mx-2" value="1" min="1" max="10" style="width: 60px; text-align: center;">
                    </div>
                    <button class="btn btn-primary comprar-btn"
                            style="background-color: #f8c8dc; border-color: #000000; border-width: 3px; font-family: 'Poppins', sans-serif; color: #000;"
                            data-id="2" data-nombre="Gelatinas de colores" data-precio="80">
                        Comprar
                    </button>
                </div>
            </div>
        </div>
        
        <!-- ... Producto 3 al 7: mismos ajustes ... -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center" id="producto-6">
            <div class="card shadow-sm" style="margin-bottom: 20px;">
                <img class="card-img-top img-fluid" src="assets/img/Merengues.jpg" alt="Cupcakes Adornados" style="margin-top: 10px;">
                <div class="card-body" style="font-family: 'Poppins', sans-serif;">
                    <h5 class="card-title">Cupcakes Encantados</h5>
                    <p class="card-text">Deliciosos cupcakes adornados con cremosos glaseados y decoraciones únicas, perfectos para cualquier celebración o simplemente para consentirte.</p>
                    <p class="card-text font-weight-bold">Precio: $120 MXN</p>
                    <p class="card-text font-weight-bold text-danger">¡Oferta Día del Niño! 2 por $120 MXN. ¡Celebra con dulzura!</p>
                    <div class="cantidad-container d-flex justify-content-center align-items-center mb-2">
                        <input type="number" class="form-control cantidad-input mx-2" value="1" min="1" max="10" style="width: 60px; text-align: center;">
                    </div>
                    <button class="btn btn-primary comprar-btn"
                            style="background-color: #f8c8dc; border-color: #000000; border-width: 3px; font-family: 'Poppins', sans-serif; color: #000;"
                            data-id="2" data-nombre="Cupcakes Encantados" data-precio="80">
                        Comprar
                    </button>
                </div>
            </div>
        </div>
        
        

        
        <!-- ... Producto 3 al 7: mismos ajustes ... -->
        <!-- ... Producto 3 al 7: mismos ajustes ... -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center" id="producto-7">
            <div class="card shadow-sm" style="margin-bottom: 20px;">
                <img class="card-img-top img-fluid" src="assets/img/Pay.jpg" alt="Pay" style="margin-top: 10px;">
                <div class="card-body" style="font-family: 'Poppins', sans-serif;">
                    <h5 class="card-title">Pay artesanal</h5>
                    <p class="card-text">Exquisito pay hecho a mano con ingredientes frescos. Ideal para compartir en reuniones o disfrutar en cualquier momento.</p>
                    <p class="card-text font-weight-bold">Precio: $150 MXN</p>
                    <div class="cantidad-container d-flex justify-content-center align-items-center mb-2">
                        <input type="number" class="form-control cantidad-input mx-2" value="1" min="1" max="10" style="width: 60px; text-align: center;">
                    </div>
                    <button class="btn btn-primary comprar-btn"
                            style="background-color: #f8c8dc; border-color: #000000; border-width: 3px; font-family: 'Poppins', sans-serif; color: #000;"
                            data-id="2" data-nombre="Pay artesanal" data-precio="80">
                        Comprar
                    </button>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center" id="producto-8">
            <div class="card shadow-sm" style="margin-bottom: 20px;">
                <img class="card-img-top img-fluid" src="assets/img/Pastel.jpg" alt="Pastel de 3 leches" style="margin-top: 10px;">
                <div class="card-body" style="font-family: 'Poppins', sans-serif;">
                    <h5 class="card-title">Pastel de 3 Leches</h5>
                    <p class="card-text">Un pastel esponjoso y delicioso, impregnado con tres tipos de leches, ideal para cualquier ocasión especial o para un antojo único.</p>
                    <p class="card-text font-weight-bold">Precio: $250 MXN</p>
                    <div class="cantidad-container d-flex justify-content-center align-items-center mb-2">
                        <input type="number" class="form-control cantidad-input mx-2" value="1" min="1" max="10" style="width: 60px; text-align: center;">
                    </div>
                    <button class="btn btn-primary comprar-btn"
                            style="background-color: #f8c8dc; border-color: #000000; border-width: 3px; font-family: 'Poppins', sans-serif; color: #000;"
                            data-id="2" data-nombre="Pastel de 3 Leches" data-precio="120">
                        Comprar
                    </button>
                </div>
            </div>
        </div>
        

        
        <!-- ... Producto 3 al 7: mismos ajustes ... -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center" id="producto-9">
            <div class="card shadow-sm" style="margin-bottom: 20px;">
                <img class="card-img-top img-fluid" src="assets/img/Velas.jpg" alt="Velas de cumpleaños" style="margin-top: 10px;">
                <div class="card-body" style="font-family: 'Poppins', sans-serif;">
                    <h5 class="card-title">Velas de cumpleaños</h5>
                    <p class="card-text">Coloridas velas mágicas ideales para pasteles de cumpleaños. ¡Sorprende a todos con su efecto brillante y divertido!</p>
                    <p class="card-text font-weight-bold">Precio: $80 MXN</p>
                    <div class="cantidad-container d-flex justify-content-center align-items-center mb-2">
                        <input type="number" class="form-control cantidad-input mx-2" value="1" min="1" max="10" style="width: 60px; text-align: center;">
                    </div>
                    <button class="btn btn-primary comprar-btn"
                            style="background-color: #f8c8dc; border-color: #000000; border-width: 3px; font-family: 'Poppins', sans-serif; color: #000;"
                            data-id="2" data-nombre="Velas de cumpleaños" data-precio="80">
                        Comprar
                    </button>
                </div>
            </div>
        </div>
        

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const botonesCompra = document.querySelectorAll('.comprar-btn');

        botonesCompra.forEach(function(boton) {
            boton.addEventListener('click', function() {
                const idProducto = this.getAttribute('data-id');
                const nombreProducto = this.getAttribute('data-nombre');
                const precioProducto = this.getAttribute('data-precio');

                const contenedor = document.querySelector(`#producto-${idProducto}`);
                const cantidadInput = contenedor.querySelector('.cantidad-input');
                const cantidadProducto = cantidadInput ? parseInt(cantidadInput.value) : 1;

                const producto = {
                    id: idProducto,
                    nombre: nombreProducto,
                    precio: parseFloat(precioProducto),
                    cantidad: cantidadProducto
                };

                let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
                const indiceProducto = carrito.findIndex(item => item.id === producto.id);
                if (indiceProducto !== -1) {
                    carrito[indiceProducto].cantidad += producto.cantidad;
                } else {
                    carrito.push(producto);
                }

                localStorage.setItem('carrito', JSON.stringify(carrito));
                alert(`${producto.nombre} ha sido agregado al carrito.`);
            });
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Template.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\XAMPP\htdocs\laravel\proyecto501\resources\views/portafolio.blade.php ENDPATH**/ ?>