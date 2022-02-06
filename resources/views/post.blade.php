<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rick y Morty</title>
        <link rel="icon" type="image/x-icon" href="../assets/rick.ico" />
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('inicio')}}">Api Rick y Morty</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{route('inicio')}}">Inicio</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <article>
                        <header class="mb-4">
                            <h1 class="fw-bolder mb-1">{{$personaje['name']}}</h1>
                            <a class="badge bg-secondary text-decoration-none link-light" >{{$personaje['gender']}}</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href=>{{$personaje['species']}}</a>
                        </header>
                        <figure class="mb-4"><img class="img-fluid rounded" src="{{$personaje['image']}}" alt="..." /></figure>
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Estatus: {{$personaje['status']}}</p>
                            <p class="fs-5 mb-4">Origen: {{$personaje['origin']['name']}}</p>
                        </section>
                    </article>

                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                        </div>
                    </section>
                </div>

           
                    <div class="card mb-1">
                        <div class="card-header">Personaje Aleatorio</div>
                        <div class="card-body">
                            <div class="input-group">

                            @foreach($personajes as $personaje)
                            @if($loop->index < 4)
                            <div class="row">
                        <div class="col-8">
                            <div class="card mb-4">
                                <a href="{{route('post',$personaje['id'])}}"><img class="card-img-top" src="{{$personaje['imagen']}}" alt="..." /></a>
                                <div class="card-body">
                                    <h1 class="small text">{{$personaje['nombre']}}</h1>
                                    <p class="card-title">{{$personaje['genero']}}</p>
                                    <p class="card-text">{{$personaje['estatus']}}</p>
                                    <a class="btn btn-primary" href="{{route('post',$personaje['id'])}}">Leer más...</a>
                                </div>
                                <br> </br>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                            </div>
                        </div>
                    </div>
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
