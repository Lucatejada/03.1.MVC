<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Ejemplo MVC </title>

    <comm-html-section>
        <!-- PLUGGINS CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </comm-html-section>

    <comm-html-section>
        <!-- PLUGGINS JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/0b4b023277.js" crossorigin="anonymous"></script>
    </comm-html-section>
</head>

<body>

    <div class="container-fluid">
        <h3 class="text-center py-3">SISTEMAS</h3>
    </div>

    <!-- BOTONERA -->



    <div class="container-fluid">
        <div class="container">
            <ul class="nav justify-content-center nav-pills">

                <?php if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "registro") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "ingreso") : ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                        </li>
                    <?php endif  ?>

                    <?php if ($_GET["pagina"] == "inicio") : ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                        </li>
                    <?php endif  ?>


                <?php else: 
                    header('location: ../index.php?pagina=inicio');
                ?>
                <?php endif  ?>


            </ul>
        </div>
    </div>


    <!------------- Contenido ------------->

    <div class="container-fluid">
        <div class="container">

            <?php
            #ISSET : isset ( ) Determina si una variable está definida y no es NULL 

            #LISTA BLANCA DE URL

            if (isset($_GET["pagina"])) {

                if (
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "inicio" ||
                    $_GET["pagina"] == "salir"
                ) {

                    include "paginas/" . $_GET["pagina"] . ".php";
                } else {

                    include "paginas/error404.php";
                }
            } else {

                include "paginas/registro.php";
            }

            ?>

        </div>



    </div>



</html>