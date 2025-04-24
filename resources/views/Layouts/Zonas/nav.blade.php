<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav" style="background-color: #ccaadc;">
    <div class="container px-4 px-lg-5">
        <!-- Logo e imagen al lado del texto -->
        <a class="navbar-brand d-flex align-items-center" href="#page-top">
        <img src="assets/img/logo.jpg" alt="Logo" style="height: 40px; margin-right: 10px;"> <!-- Aquí va la imagen -->
        <span style="color: rgb(13, 12, 12); font-family: 'Pacifico', cursive;">Strawberry Whimsy</span>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <head>
            <!-- Importar fuentes bonitas desde Google Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
            <style>
                .navbar-nav .nav-link {
                    font-family: 'Poppins', sans-serif;
                    font-size: 1.1rem;
                    font-weight: 600;
                    color: #000 !important; /* Color negro */
                }
        
                .brand-name {
                    font-family: 'Dancing Script', cursive;
                    font-size: 1.8rem;
                    font-weight: 600;
                    color: #000 !important; /* Color negro */
                }
            </style>
        </head>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ms-auto my-2 my-lg-0 d-flex align-items-center justify-content-center text-center">
        <li class="nav-item"><a class="nav-link brand-name" href="{{url('/')}}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('nuevoProducto')}}">Registro</a></li>
        <li class="nav-item"><a class="nav-link brand-name" href="{{url('/')}}">Vision</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('portafolio')}}">Productos</a></li>
        <li class="nav-item">
            <a class="nav-link fs-3 d-flex align-items-center justify-content-center" href="{{url('carrito')}}" style="height: 100%;">🛒</a>
        </li>
    </ul>
</div>

        
        
    </div>
</nav>

