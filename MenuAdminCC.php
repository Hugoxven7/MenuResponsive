{source}
<?php

    /* _______________________________________________________________________________________________
       |_______________________________ LINEA DE SEGURIDAD __________________________________________|
    */
    defined('_JEXEC') or die;

    /* ______________________________________________________________________________________________
       |___________________________ DEFINICION DE RUTAS DE RECURSOS _________________________________|
    */
    $ruta_cz=JURI::base();
    $ruta_c=JURI::base()."templates/";
    $ruta_art=JURI::base()."index.php/"
?>

<!DOCTYPE html>

<!-- ETIQUETA HTML REPLAZA LAS TERMINACIONES no-js POR js -->

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]> <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <!--  ____________________________________________________________________________________
        |__________________________ ETIQUETAS META Y VIEWPORT ______________________________|
    -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- ___________________________________________________________________________________
        |________________________ RUTAS DE ESTILOS Y RECURSOS ______________________________|
    -->
    <link rel="stylesheet" href="<?php echo $ruta_c;?>costanzo001/css/MenuResCSS.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $ruta_c;?>costanzo001/css/FontsMenuRCSS.css" type="text/css">

    <!-- _____________________________________________________________________________________________
        |________________________ RUTAS FUNCIONES Y RECURSOS JAVASCRIPT ______________________________|
    -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo $ruta_c;?>costanzo001/js/MenuResJS.js"></script>

</head>

<body>

    <header>
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-list2"></span>MENÚ</a>
        </div>

        <nav>
            <ul>
                <li><a href="#"><span class="icon-home"></span> INICIO </a></li>
                <li class="submenu"><a href="#"><span class="icon-cart"></span> OPCIÓN #1 </a>
                    <ul class="children">
                        <li><a href="#"> OPCIÓN #1A <span></span></a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><span class="icon-barcode"></span> OPCIÓN #2 <span
                            class="caret icon-arrow-down6"></span></a>
                    <ul class="children">
                        <li><a href="#"> OPCIÓN #2A <span class="icon-dot"></span></a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><span class="icon-clipboard"></span> OPCIÓN #3 </a>
                    <ul class="children">
                        <li><a href="#"> OPCIÓN #3A </a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><span class="icon-coin-dollar"></span> OPCIÓN #4 </a>
                    <ul class="children">
                        <li><a href="#"> OPCIÓN #4A </a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><span class="icon-truck"></span> OPCIÓN #5 </a>
                    <ul class="children">
                        <li><a href="#"> OPCIÓN #5A </a></li>
                        <li><a href="#"> OPCIÓN #5B </a></li>
                        <li><a href="#"> OPCIÓN #5C </a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><span class="icon-attachment"></span> OPCIÓN #6 </a>
                    <ul class="children">
                        <li><a href="#"> OPCIÓN #6A </a></li>
                        <li><a href="#"> OPCIÓN #6B </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

</body>
{/source}