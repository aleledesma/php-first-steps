<?php 
    include('gestionTareas.php')
?>

<!doctype html>
<html lang="en">
    <head>
        <title>to-do app</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            .lista{ text-decoration: line-through;}
        </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="container mt-3">
            <div class="card">
                <div class="card-header">Lista de tareas</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre de la tarea</label>
                            <input
                                type="text"
                                class="form-control"
                                name="tareaNombre"
                                id="tareaNombre"
                                placeholder="..."
                            />
                        </div>
                        <input
                            name="tareaBoton"
                            id="tareaBoton"
                            class="btn btn-primary"
                            type="submit"
                            value="Crear tarea"
                        />
                    </form>
                </div>
                <ul class="list-group">
                    <?php foreach($tareas as $tarea) {?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <form action="" method="post">
                                    <input type="hidden" name="id" value=<?php echo $tarea["id"] ?> >
                                    <input onChange="this.form.submit()" class="form-check-input" type="checkbox" value=<?php echo $tarea["completada"] ?> name="tareaEstado" id="tareaEstado" <?php echo($tarea["completada"] ? 'checked' : '' ) ?> />
                                </form>
                                <label class="form-check-label <?php echo($tarea["completada"] ? 'lista' : '') ?>" for="tareaEstado"> <?php echo ucfirst($tarea["nombre"]) ?></label>
                                <a
                                    href="?id=<?php echo $tarea["id"] ?>"
                                    class="btn btn-sm bg-danger"
                                >
                                    Eliminar
                                </a>
                                
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            
        </main>
        


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
