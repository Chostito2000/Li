<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header style="background-color: #007BFF; color: white; padding: 10px;">
        <h1 style="color: red;">TIENDA</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Detalle Producto</h1>
        {{$id_producto}}
    </div>
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://img.freepik.com/foto-gratis/podio-redondo-luz-roja-fondo-negro-maqueta_43614-950.jpg?w=826&t=st=1699378300~exp=1699378900~hmac=444e64390176c5263058fc943e3fffca5b30a118a1a2e22147c69d5f561afee5');
        }
        .table>:not(caption)>*>* {
            padding: 0.5rem 0.5rem;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }
        tbody, td, tfoot, th, thead, tr {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }
        td {
            display: table-cell;
            vertical-align: inherit;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        .redes-sociales a {
            font-size: 24px; /* Cambia el tamaño de los iconos */
            margin-right: 10px; /* Añade margen entre los iconos */
            color: red; /* Cambia el color de los iconos */
        }
    </style>
</body>
<footer>
    <p>Derechos de autor &copy; 2023 Elvis winder ccama</p>
</footer>
</html>
