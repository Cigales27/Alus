<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalogo Alus</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
<nav class="navbar navbar-dark navbar-expand-md sticky-top clean-navbar"
     style="background: linear-gradient(-100deg, rgb(251,15,15), #dc7633 34%, white 100%), var(--bs-red);color: var(--bs-white);">
    <div class="container-fluid"><a class="navbar-brand logo" href="#" style="color: rgb(0,0,0);">Alus</a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto" style="font-size: 25px;">
                <li class="nav-item"><a class="nav-link" href="index.html" style="font-size: 13.8px;">Inicio</a></li>
                <li class="nav-item"><a class="nav-link active" href="index.html" style="font-size: 13.8px;">Catalogo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="page catalog-page">
    <section class="clean-block clean-catalog dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info" style="color: var(--bs-gray-dark) !important;font-size: 44px;">Lista de
                    productos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                    mattis vitae leo.</p>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-3" style="border-style: none;border-color: var(--bs-blue);">
                        <div class="d-none d-md-block">
                            <div class="filters">
                                <div class="filter-item">
                                    <h3>Categories</h3>
                                    <select class="categorias" style="width: 100%;padding: 10px;color: var(--bs-gray-dark);font-size: 18px;border-radius: 17px;border-style: outset;border-color: var(--bs-blue);">
                                        <option value="0" selected="">Todos</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse"
                                                  data-bs-toggle="collapse" aria-expanded="false"
                                                  aria-controls="filters" href="#filters" role="button">Filters<i
                                class="icon-arrow-down filter-caret"></i></a>
                            <div class="collapse" id="filters">
                                <div class="filters">
                                    <div class="filter-item">
                                        <h3>Categories</h3>
                                        <select class="categorias"
                                            style="width: 100%;padding: 10px;color: var(--bs-gray-dark);font-size: 18px;border-radius: 17px;border-style: outset;border-color: var(--bs-blue);">
                                        <option value="0" selected>Todos</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="products">
                            <div class="row g-0" id="productos">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/vanilla-zoom.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>