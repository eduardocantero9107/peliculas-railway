<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Películas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">

    <h1 class="text-center mb-5">
        Catálogo de Películas
    </h1>

    <form action="/guardar" method="POST" class="mb-5">
        @csrf

        <input
            type="text"
            name="titulo"
            placeholder="Título"
            class="form-control mb-3"
            required
        >

        <input
            type="text"
            name="genero"
            placeholder="Género"
            class="form-control mb-3"
            required
        >

        <input
            type="text"
            name="trailer"
            placeholder="URL Trailer YouTube"
            class="form-control mb-3"
            required
        >

        <button class="btn btn-primary w-100">
            Guardar Película
        </button>
    </form>

    <div class="row">

        @foreach($peliculas as $pelicula)

        <div class="col-md-4 mb-4">

            <div class="card bg-secondary text-white h-100">

                <div class="card-body">

                    <h3 class="card-title">
                        {{ $pelicula->titulo }}
                    </h3>

                    <p class="card-text">
                        Género: {{ $pelicula->genero }}
                    </p>

                    <a
                        href="{{ $pelicula->trailer }}"
                        target="_blank"
                        class="btn btn-danger"
                    >
                        Ver Trailer
                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

</body>
</html>