<?php 
    session_start();

    $datos = $_SESSION['usuarioDatos'][0];

    include('modelo/clase_institucion.php');
    $institucion = new Institucion();
    $logo = $institucion->obtenerLogo()[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $nombrePagina;  ?></title>


    <link rel="shortcut icon" href="assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">

    <link rel="stylesheet" href="assets/compiled/css/styleapart.css">
    <link rel="stylesheet" href="assets/compiled/css/app.css">
    <link rel="stylesheet" href="assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="assets/compiled/css/iconly.css">
    <link rel="stylesheet" href="assets/extensions/@fortawesome/fontawesome-free/css/all.min.css">

    <style>
        .no-resize {
            resize: none !important;
        }
        .botones {
            display: flex;
            justify-content: space-between;
        }
        .flex-item {
            margin-right: 2px;
        }
        .fila {
            text-align: center;
        }
        .card-header {
            display: flex;
            justify-content: space-between;
        }
        .checkbox-container{
            display: flex;
            justify-content: space-between;
        }
        .plus-container{
            display: flex;
            justify-content: space-between;
        }
        .first-sibling{
            flex-basis: 85%;
        }
    </style>

<script src="Javascript/validaciones.js"></script>

</head>

<body>
    <script src="vista/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="index.php"><img src="<?php echo $logo;?>" style="width: 5rem; height: 3rem;" alt="Logo"></a>
                            <h6 style="font-size:15px; display:inline-block;">Cuerpo Autónomo de Bomberos</h6>
                        </div>
                        

                        <div class="header-top-right">
                            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                        <g transform="translate(-210 -1)">
                                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                            <circle cx="220.5" cy="11.5" r="4"></circle>
                                            <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                        </g>
                                    </g>
                                </svg>
                                <div class="form-check form-switch fs-6">
                                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                                    <label class="form-check-label"></label>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="assets/compiled/jpg/1.jpg" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">oskers</h6>
                                        <p class="user-dropdown-status text-sm text-muted">Administrador</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                    <form action="../controlador/ctl_sesion.php" method="post">
                                        <li><a class="dropdown-item" href="#">My Account</a></li>

                                        <?php if($datos["institucion"] == "si"):?>
                                        <li><a class="dropdown-item" href="datosInstitucion.php">Institucion</a></li>
                                        <?php endif;?>

                                        <?php if($datos["usuario"] == "si"):?>
                                        <li><a class="dropdown-item" href="privilegios.php">Privilegios</a></li>
                                        <?php endif;?>
                                        <li><a class="dropdown-item" href="../controlador/ctl_respaldo.php">Crear Respaldo</a></li>
                                        <li><a class="dropdown-item" href="#">Configuración</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><button type="submit" class="dropdown-item" name="logout" value="logout">Cerrar Sesión</button></li>
                                    </form>
                                </ul>
                            </div>

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>



                            <li class="menu-item  ">
                                <a href="inicio.php" class='menu-link'>
                                    <span><i class="bi bi-house-door-fill"></i>Inicio</span>
                                </a>
                            </li>
                            
                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <span><i class="bi bi-geo-alt-fill"></i>Localidad</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">


                                        <ul class="submenu-group">

                                            <?php if($datos["usuario"] == "si"):?>
                                            <li class="submenu-item">
                                                <a href="catalogoMunicipio.php" class='submenu-link'>Municipio</a>
                                            </li>
                                            <?php endif;?>

                                            <?php if($datos["lugar"] == "si"):?>
                                            <li class="submenu-item">
                                                <a href="catalogoLugar.php" class='submenu-link'>Lugar</a>
                                            </li>
                                            <?php endif;?>

                                            <?php if($datos["estacion"] == "si"):?>
                                            <li class="submenu-item">
                                                <a href="catalogoEstacion.php" class='submenu-link'>Estacion</a>
                                            </li>
                                            <?php endif;?>

                                            <?php if($datos["seccion"] == "si"):?>
                                            <li class="submenu-item">
                                                <a href="catalogoSeccion.php" class='submenu-link'>Sección</a>
                                            </li>
                                            <?php endif;?>
                                        </ul>
                                    </div>
                                </div>
                            </li>


                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <span><i class="bi bi-person-fill"></i>Persona</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">


                                        <ul class="submenu-group">
                                            
                                            <?php if($datos["tipo"] == "si"):?>
                                            <li class="submenu-item">
                                                <a href="catalogoTpersona.php" class='submenu-link'>Tipo de Persona</a>
                                            </li>
                                            <?php endif;?>

                                            <?php if($datos["cargo"] == "si"):?>
                                            <li class="submenu-item">
                                                <a href="catalogoCargo.php" class='submenu-link'>Cargo de Bombero</a>
                                            </li>
                                            <?php endif;?>

                                            <?php if($datos["persona"] == "si"):?>
                                            <li class="submenu-item">
                                                <a href="catalogoPersona.php" class="submenu-link">Persona</a>
                                            </li>
                                            <?php endif;?>

                                            <?php if($datos["usuario"] == "si"):?>
                                            <li class="submenu-item">
                                                <a href="catalogoUsuario.php" class='submenu-link'>Usuario</a>
                                            </li>
                                            <?php endif?>
                                        
                                            <li class="submenu-item">
                                                <a href="catalogoHdO.php" class='submenu-link'>Historial de Operación</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            
                            <?php if($datos["aseguradora"] == "si"):?>
                            <li class="menu-item">
                                <a href="catalogoAseguradora.php" class='menu-link'>
                                    <span><i class="bi bi-shield-fill-check"></i>Aseguradora</span>
                                </a>
                            </li>
                            <?php endif;?>
                            

                            <li class="menu-item active has-sub">
                                <a href="#" class='menu-link'>
                                    <span><i class="bi bi-car-front-fill"></i>Vehiculo</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">

                                        <div class="submenu active">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                                                              
                                        <ul class="submenu-group">
                                            
                                            
                                            <?php if($datos["vehiculo"] == "si"):?>
                                            <li class="submenu-item  has-sub">
                                                <a href="#" class="submenu-link">Vehiculo</a>

                                                
                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">
                                                    
                                                <li class="subsubmenu-item">
                                                
                                            </li>
                                            
                                            <?php if($datos["marca"] == "si"):?>
                                            <li class="subsubmenu-item  ">
                                                <a href="catalogoMarca.php" class='subsubmenu-link'>Marca de Vehiculo</a>
                                            </li>
                                            <?php endif;?>

                                            <?php if($datos["modelo"] == "si"):?>
                                            <li class="subsubmenu-item  ">
                                                <a href="catalogoModelo.php" class='subsubmenu-link'>Modelo de Vehiculo</a>
                                            </li>
                                            <?php endif;?>
                                            
                                            <li class="subsubmenu-item  ">
                                                <a href="catalogoVehiculo.php" class='subsubmenu-link'>Registro de Vehiculo</a>
                                            </li>
                                            
                                            </ul>
                                            <?php endif;?>

                                                
                                            <?php if($datos["mantenimiento"] == "si"):?>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="catalogoMantenimiento.php" class='submenu-link'>Cronograma de Mantenimiento</a>
                                            </li>

                                            <li class="submenu-item  ">
                                                <a href="catalogoHM.php" class='submenu-link'>Historial de Mantenimiento</a>
                                            </li>
                                            <?php endif;?>
                                        
                                        </ul>
                                        
                                        
                                        
                                    </div>
                                </div>

                                    </div>
                                </div>
                            </li>

                            <?php if($datos["recurso"] == "si"):?>
                            <li class="menu-item">
                                <a href="catalogoRecursos.php" class='menu-link'>
                                    <span><i class="bi bi-shield-fill-check"></i>Recurso</span>
                                </a>    
                            </li>
                            <?php endif;?>

                            <?php if($datos["incidente"] == "si"):?>
                            <li class="menu-item has-sub">
                                <a href="#" class='menu-link'>
                                    <span><i class="bi bi-prescription2"></i>Incidente</span>
                                </a>
                                <div class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">


                                        <ul class="submenu-group">

                                            <li class="submenu-item  ">
                                                <a href="catalogoIncendio.php" class='submenu-link'>Incendio</a>
                                            </li>

                                            <li class="submenu-item  ">
                                                <a href="catalogoTransito.php" class='submenu-link'>Transito</a>
                                            </li>

                                            <li class="submenu-item  ">
                                                <a href="catalogoAbejas.php" class='submenu-link'>Abejas</a>

                                            </li>

                                            <li class="submenu-item  ">
                                                <a href="catalogoTaviso.php" class='submenu-link'>Tipo de Aviso</a>
                                            </li>

                                            <li class="submenu-item  ">
                                                <a href="catalogoTincidente.php" class='submenu-link'>Tipo de Incidente</a>
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </li>
                            <?php endif;?>
                        </ul>
                    </div>
                </nav>

            </header>

            <div class="content-wrapper container">