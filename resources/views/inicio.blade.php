<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rick y Morty</title>
  
        <link rel="icon" type="image/x-icon" href="assets/rick.ico" />
       
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('inicio')}}">Api Rick And Morty</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="{{route('inicio')}}">Inicio</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">¡Bienvenidos!</h1>
                    <p class="lead mb-0">Esta es una pagina informativa de personajes utilizando la API de Rick y Morty</p>
                </div>
            </div>
        </header>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="img/image01.png" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title">¿Quieres saber que es Rick And Morty?</h2>
                            <p class="card-text">Da clic en el boton leer mas</p>
                            <a class="btn btn-primary" href="https://rickandmorty.fandom.com/wiki/Rickipedia">Leer más...</a>
                        </div>
                    </div>

                    @foreach($personajes as $personaje)
                    <div class="container mt-1">
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{$personaje['imagen']}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="card-title h4">{{$personaje['nombre']}}</div>
                                    <h2 class="card-text">{{$personaje['genero']}}</h2>
                                    <p class="card-text">{{$personaje['especie']}}</p>
                                    <p class="card-text">{{$personaje['origen']}}</p>
                                    <p class="card-text">{{$personaje['estatus']}}</p>
                                    <a class="btn btn-primary" href="{{route('post',$personaje['id'])}}">Leer más...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br> </br>
                    @endforeach


                </div>
            </div>
        </div>
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">TM & © 2022  Turner Broadcasting System, Inc. A WarnerMedia Company. All Rights Reserved. &copy; Rick And Morty</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
