

<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Carrito de Compras</h2>
    <div id="carrito-container" class="card p-4 shadow-sm"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carritoContainer = document.getElementById('carrito-container');
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        if (carrito.length === 0) {
            carritoContainer.innerHTML = '<p class="text-center" style="font-size: 24px; font-weight: bold;">Tu carrito está vacío.</p>';
            return;
        }

        let total = 0;
        let html = `
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="thead-dark">
                            <tr>
                                <th>Imagen</th>
                                <th>Producto</th>
                                <th>Precio Unitario</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
        `;

        carrito.forEach((producto, index) => {
            const subtotal = producto.precio * producto.cantidad;
            total += subtotal;

            const imagen = producto.imagen
                ? `<img src="asset/img/${producto.imagen}" style="width:60px; height:60px; object-fit:cover; border-radius: 10px; box-shadow: 0 0 6px rgba(0,0,0,0.1); margin:auto;" />`
                : `
                    <div style="
                        width: 60px;
                        height: 60px;
                        background-color: #f3d1e0;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-weight: bold;
                        color: #a03560;
                        font-size: 18px;
                        box-shadow: 0 0 6px rgba(0,0,0,0.1);
                        margin: auto;
                    ">
                        ${producto.nombre.charAt(0).toUpperCase()}
                    </div>
                `;

            html += `
                <tr>
                    <td>${imagen}</td>
                    <td>${producto.nombre}</td>
                    <td>$${producto.precio.toFixed(2)}</td>
                    <td>${producto.cantidad}</td>
                    <td>$${subtotal.toFixed(2)}</td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminarProducto(${index})" style="border-radius: 20px;">Eliminar</button>
                    </td>
                </tr>
            `;
        });

        html += `
                        <tr>
                            <td colspan="4" class="text-end"><strong>Total</strong></td>
                            <td><strong>$${total.toFixed(2)}</strong></td>
                            <td></td>
                        </tr>
                    </tbody>
                    </table>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button class="btn btn-danger" onclick="vaciarCarrito()" style="border-radius: 20px;">
                            Vaciar carrito
                        </button>
                        <a href="/pago" class="btn btn-success" style="border-radius: 20px;">
                            Proceder al pago
                        </a>
                    </div>

                </div>
            </div>
        `;

        carritoContainer.innerHTML = html;
    });

    function eliminarProducto(index) {
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carrito.splice(index, 1);
        localStorage.setItem('carrito', JSON.stringify(carrito));
        location.reload();
    }

    function vaciarCarrito() {
        if (confirm("¿Estás seguro de que deseas vaciar el carrito?")) {
            localStorage.removeItem('carrito');
            location.reload();
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Template.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\XAMPP\htdocs\laravel\proyecto501\resources\views/carrito.blade.php ENDPATH**/ ?>