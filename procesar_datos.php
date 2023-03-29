<?php
//if ($_POST['cuartil'] > 0){
$a = $_POST["a"];

$b = $_POST["b"];
$c = $_POST["c"];
$d = $_POST["d"];
$e = $_POST["e"];
$f = $_POST["f"];
$g = $_POST["g"];
$h = $_POST["h"];
$i = $_POST["i"];
$j = $_POST["j"];
$k = $_POST["k"];
$l = $_POST["l"];
$m = $_POST["m"];
$n = $_POST["n"];
$o = $_POST["o"];
$p = $_POST["p"];
$q = $_POST["q"];
$r = $_POST["r"];
$s = $_POST["s"];
$t = $_POST["t"];
$cuartil = $_POST["cuartil"];
$decil = $_POST["decil"];
$percentil = $_POST["percentil"];

###
$list = array($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $q, $r, $s, $t);
$muestra = 20;
$max = max($list);
$min = min($list);
$rango = $max - $min;
$intervalo = ceil(1 + 3.322 * log($muestra, 10));
$amplitud = ceil($rango / $intervalo);

### intervalos
$lim_inf1 = $min;
$lim_sup1 = $lim_inf1 + $amplitud;

$lim_inf2 = $lim_sup1;
$lim_sup2 = $lim_sup1 + $amplitud;

$lim_inf3 = $lim_sup2;
$lim_sup3 = $lim_sup2 + $amplitud;

$lim_inf4 = $lim_sup3;
$lim_sup4 = $lim_sup3 + $amplitud;

$lim_inf5 = $lim_sup4;
$lim_sup5 = $lim_sup4 + $amplitud;

$lim_inf6 = $lim_sup5;
$lim_sup6 = $lim_sup5 + $amplitud;

### marca de clase 
$marca_clase1 =  ($lim_inf1 + $lim_sup1) / 2;

$marca_clase2 =  ($lim_inf2 + $lim_sup2) / 2;

$marca_clase3 =  ($lim_inf3 + $lim_sup3) / 2;

$marca_clase4 =  ($lim_inf4 + $lim_sup4) / 2;

$marca_clase5 =  ($lim_inf5 + $lim_sup5) / 2;

$marca_clase6 =  ($lim_inf6 + $lim_sup6) / 2;

### frecunecia Absoluta

// Inicializar el contador
$frec_abs1 = 0;
$frec_abs2 = 0;
$frec_abs3 = 0;
$frec_abs4 = 0;
$frec_abs5 = 0;
$frec_abs6 = 0;

// Recorrer la lista desde el punto de inicio hasta el punto de finalización
foreach ($list as $valor) {
    if ($valor >= $lim_inf1 && $valor < $lim_sup1) {
        // Si el valor está en el rango, aumentar el contador
        $frec_abs1++;
    }
    if ($valor >= $lim_inf2 && $valor < $lim_sup2) {
        // Si el valor está en el rango, aumentar el contador
        $frec_abs2++;
    }
    if ($valor >= $lim_inf3 && $valor < $lim_sup3) {
        // Si el valor está en el rango, aumentar el contador
        $frec_abs3++;
    }
    if ($valor >= $lim_inf4 && $valor < $lim_sup4) {
        // Si el valor está en el rango, aumentar el contador
        $frec_abs4++;
    }
    if ($valor >= $lim_inf5 && $valor < $lim_sup5) {
        // Si el valor está en el rango, aumentar el contador
        $frec_abs5++;
    }
    if ($valor >= $lim_inf6 &&  $valor < $lim_sup6) {
        // Si el valor está en el rango, aumentar el contador
        $frec_abs6++;
    }
}
$frec_abs_total = $frec_abs1 + $frec_abs2 + $frec_abs3 + $frec_abs4 + $frec_abs5 + $frec_abs6;

### frecuencia absoluta acomulada
$frec_abs_acu1 = $frec_abs1;
$frec_abs_acu2 = $frec_abs_acu1 + $frec_abs2;
$frec_abs_acu3 = $frec_abs_acu2 + $frec_abs3;
$frec_abs_acu4 = $frec_abs_acu3 + $frec_abs4;
$frec_abs_acu5 = $frec_abs_acu4 + $frec_abs5;
$frec_abs_acu6 = $frec_abs_acu5 + $frec_abs6;

### frecuencia relativa
$frec_relat1 = $frec_abs1 / $muestra;
$frec_relat2 = $frec_abs2 / $muestra;
$frec_relat3 = $frec_abs3 / $muestra;
$frec_relat4 = $frec_abs4 / $muestra;
$frec_relat5 = $frec_abs5 / $muestra;
$frec_relat6 = $frec_abs6 / $muestra;
$frec_relat_total = $frec_relat1 + $frec_relat2 + $frec_relat3 + $frec_relat4 + $frec_relat5 + $frec_relat6;

### frecuencia relativa acumulada
$frec_relat_acum1 = $frec_relat1;
$frec_relat_acum2 = $frec_relat_acum1 + $frec_relat2;
$frec_relat_acum3 = $frec_relat_acum2 + $frec_relat3;
$frec_relat_acum4 = $frec_relat_acum3 + $frec_relat4;
$frec_relat_acum5 = $frec_relat_acum4 + $frec_relat5;
$frec_relat_acum6 = $frec_relat_acum5 + $frec_relat6;

### frecuencia relativa porcentual
$frec_relat_porc1 = $frec_relat1 * 100;
$frec_relat_porc2 = $frec_relat2 * 100;
$frec_relat_porc3 = $frec_relat3 * 100;
$frec_relat_porc4 = $frec_relat4 * 100;
$frec_relat_porc5 = $frec_relat5 * 100;
$frec_relat_porc6 = $frec_relat6 * 100;
$frec_relat_porc_total = $frec_relat_porc1 + $frec_relat_porc2 + $frec_relat_porc3 + $frec_relat_porc4 + $frec_relat_porc5 + $frec_relat_porc6;

### frecuencia relativa porcentual acomulada
$frec_relat_porc_acum1 = $frec_relat_porc1;
$frec_relat_porc_acum2 = $frec_relat_porc_acum1 + $frec_relat_porc2;
$frec_relat_porc_acum3 = $frec_relat_porc_acum2 + $frec_relat_porc3;
$frec_relat_porc_acum4 = $frec_relat_porc_acum3 + $frec_relat_porc4;
$frec_relat_porc_acum5 = $frec_relat_porc_acum4 + $frec_relat_porc5;
$frec_relat_porc_acum6 = $frec_relat_porc_acum5 + $frec_relat_porc6;

### media:
$media = ($marca_clase1 * $frec_abs1 + $marca_clase2 * $frec_abs2 + $marca_clase3 * $frec_abs3 + $marca_clase4 * $frec_abs4 + $marca_clase5 * $frec_abs5 + $marca_clase6 * $frec_abs6) / $muestra;

### mediana:
$dato_medio_N2 = 10; ### el el dato medio que sale de dividir la muestra sobre 2 en nuestro caso 20/2 que daria 10 
$lista_lim_inf = array($lim_inf1, $lim_inf2, $lim_inf3, $lim_inf4, $lim_inf5, $lim_inf6);
$lista_lim_sup = array($lim_sup1, $lim_sup2, $lim_sup3, $lim_sup4, $lim_sup5, $lim_sup6);
$lista_frec_abs = array($frec_abs1, $frec_abs2, $frec_abs3, $frec_abs4, $frec_abs5, $frec_abs6);
$lista_frec_abs_acum = array($frec_abs_acu1, $frec_abs_acu2, $frec_abs_acu3, $frec_abs_acu5, $frec_abs_acu6);


foreach ($lista_frec_abs_acum  as $valor) {
    if ($valor >= $dato_medio_N2) {
        $indice = $valor;
        $indice_calculado = array_search($indice, $lista_frec_abs_acum);
        break;
    }
}

$valor_lim_inf = $lista_lim_inf[$indice_calculado];
$valor_lim_sup = $lista_lim_sup[$indice_calculado];
$valor_frec_abs = $lista_frec_abs[$indice_calculado];
$indice_calculado_anterior = $indice_calculado - 1;
$valor_frec_abs_acum_anterior = $lista_frec_abs_acum[$indice_calculado_anterior];

$mediana = $valor_lim_inf + (($dato_medio_N2 - $valor_frec_abs_acum_anterior) / $valor_frec_abs) * $amplitud;

### moda:
$max_frec_abs = max($lista_frec_abs);
$indice_valor_max_frec_abs =  array_search($max_frec_abs, $lista_frec_abs);
$valor_lim_inf_moda = $lista_lim_inf[$indice_valor_max_frec_abs];

$indice_anterior_valor_max_frec_abs = $indice_valor_max_frec_abs - 1;
$valor_anterior_valor_max_frec_abs = $lista_frec_abs[$indice_anterior_valor_max_frec_abs];

$indice_superior_valor_max_frec_abs = $indice_valor_max_frec_abs + 1;
$valor_superior_valor_max_frec_abs = $lista_frec_abs[$indice_superior_valor_max_frec_abs];


$moda = $valor_lim_inf_moda + (($max_frec_abs - $valor_anterior_valor_max_frec_abs) / (($max_frec_abs - $valor_anterior_valor_max_frec_abs) + ($max_frec_abs - $valor_superior_valor_max_frec_abs)) * $amplitud);

### cuartil         el 2 seria la k de la formula, el dato que ingresa el usuario
$posicion_cuartil = ($cuartil * $muestra) / 4;
foreach ($lista_frec_abs_acum  as $dato) {
    if ($dato >= $posicion_cuartil) {
        $valor_frec_abs_cuartil = $dato;
        $indice_cuartil = array_search($dato, $lista_frec_abs_acum);
        break;
    }
}
$valor_lim_inf_cuartil = $lista_lim_inf[$indice_cuartil];
$valor_frec_abs_acum_anterior_cuartil = $lista_frec_abs_acum[$indice_cuartil - 1];

$cuartil_calculado = $valor_lim_inf_cuartil + $amplitud * (($posicion_cuartil - $valor_frec_abs_acum_anterior_cuartil) / ($valor_frec_abs_cuartil - $valor_frec_abs_acum_anterior_cuartil));

#decil             el 5 seria la k de la formula, el dato que ingresa el usuario
$posicion_decil = ($decil * $muestra) / 10;
foreach ($lista_frec_abs_acum  as $dato) {
    if ($dato >= $posicion_decil) {
        $valor_frec_abs_decil = $dato;
        $indice_decil = array_search($dato, $lista_frec_abs_acum);
        break;
    }
}
$valor_lim_inf_decil = $lista_lim_inf[$indice_decil];
$valor_frec_abs_acum_anterior_decil = $lista_frec_abs_acum[$indice_decil - 1];

$decil_calculado = $valor_lim_inf_decil + $amplitud * (($posicion_decil - $valor_frec_abs_acum_anterior_decil) / ($valor_frec_abs_decil - $valor_frec_abs_acum_anterior_decil));

#percentil             el 50 seria la k de la formula, el dato que ingresa el usuario
$posicion_percentil = ($percentil * $muestra) / 100;
foreach ($lista_frec_abs_acum  as $dato) {
    if ($dato >= $posicion_percentil) {
        $valor_frec_abs_percentil = $dato;
        $indice_percentil = array_search($dato, $lista_frec_abs_acum);
        break;
    }
}
$valor_lim_inf_percentil = $lista_lim_inf[$indice_percentil];
$valor_frec_abs_acum_anterior_percentil = $lista_frec_abs_acum[$indice_percentil - 1];

$percentil_calculado = $valor_lim_inf_percentil + $amplitud * (($posicion_percentil - $valor_frec_abs_acum_anterior_percentil) / ($valor_frec_abs_percentil - $valor_frec_abs_acum_anterior_percentil));

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .contenedor {
            display: flex;
        }

        .contenedor {
            display: flex;
            gap: 20px;
            /* Ajustar el valor según prefieras */
        }

        .invisible {
            width: 0;
            height: 0;
            border: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-dark" data-bs-theme="dark">
        <div class="container-md">
            <a class="navbar-brand" href="#">App Estadistica y Probabilidad-Medidas De Tendencia Central</a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="contenedor">
            <table class="table table-bordered">
                <thead class="table-warning">
                    <tr>
                        <th scope="col" colspan="4">Datos recolectados:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $a ?></td>
                        <td><?php echo $b ?></td>
                        <td><?php echo $c ?></td>
                        <td><?php echo $d ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $e ?></td>
                        <td><?php echo $f ?></td>
                        <td><?php echo $g ?></td>
                        <td><?php echo $h ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $j ?></td>
                        <td><?php echo $k ?></td>
                        <td><?php echo $l ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $m ?></td>
                        <td><?php echo $n ?></td>
                        <td><?php echo $o ?></td>
                        <td><?php echo $p ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $q ?></td>
                        <td><?php echo $r ?></td>
                        <td><?php echo $s ?></td>
                        <td><?php echo $t ?></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped">
                <tr>
                    <th>Descripción</th>
                    <th>Variable</th>
                </tr>
                <tr>
                    <td>Número de datos</td>
                    <td><?php echo $muestra; ?></td>
                </tr>
                <tr>
                    <td>Valor máximo</td>
                    <td><?php echo $max; ?></td>
                </tr>
                <tr>
                    <td>Valor mínimo</td>
                    <td><?php echo $min; ?></td>
                </tr>
                <tr>
                    <td>Rango (R)</td>
                    <td><?php echo $rango; ?></td>
                </tr>
                <tr>
                    <td>Número de intervalos (k)</td>
                    <td><?php echo $intervalo; ?></td>
                </tr>
                <tr>
                    <td>Amplitud (a)</td>
                    <td><?php echo $amplitud; ?></td>
                </tr>
            </table>
        </div>
        <div class="container mt-5">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" colspan="2">Intervalos</th>
                        <th>Marca de Clase</th>
                        <th>Frecuencia Absoluta</th>
                        <th>Frecuencia Absoluta Acumulada</th>
                        <th>Frecuencia Relativa</th>
                        <th>Frecuencia Relativa Acumulada</th>
                        <th>Frecuencia Relativa Porcentual</th>
                        <th>Frecuencia Relativa Porcentual Acumulada</th>

                    </tr>

                </thead>
                <tbody class="table-striped-columns">
                    <tr>
                        <td>Li</td>
                        <td>Ls</td>
                        <td>xi</td>
                        <td>fi</td>
                        <td>Fi</td>
                        <td>hi</td>
                        <td>Hi</td>
                        <td>pi</td>
                        <td>Pi</td>
                    </tr>
                    <tr>
                        <td><?php echo $lim_inf1; ?></td>
                        <td><?php echo $lim_sup1; ?></td>
                        <td><?php echo $marca_clase1; ?></td>
                        <td><?php echo $frec_abs1; ?></td>
                        <td><?php echo $frec_abs_acu1; ?></td>
                        <td><?php echo $frec_relat1; ?></td>
                        <td><?php echo $frec_relat_acum1; ?></td>
                        <td><?php echo $frec_relat_porc1, "%";  ?></td>
                        <td><?php echo $frec_relat_porc_acum1, "%"; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $lim_inf2; ?></td>
                        <td><?php echo $lim_sup2; ?></td>
                        <td><?php echo $marca_clase2; ?></td>
                        <td><?php echo $frec_abs2; ?></td>
                        <td><?php echo $frec_abs_acu2; ?></td>
                        <td><?php echo $frec_relat2; ?></td>
                        <td><?php echo $frec_relat_acum2; ?></td>
                        <td><?php echo $frec_relat_porc2, "%"; ?></td>
                        <td><?php echo $frec_relat_porc_acum2, "%"; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $lim_inf3; ?></td>
                        <td><?php echo $lim_sup3; ?></td>
                        <td><?php echo $marca_clase3; ?></td>
                        <td><?php echo $frec_abs3; ?></td>
                        <td><?php echo $frec_abs_acu3; ?></td>
                        <td><?php echo $frec_relat3; ?></td>
                        <td><?php echo $frec_relat_acum3; ?></td>
                        <td><?php echo $frec_relat_porc3, "%"; ?></td>
                        <td><?php echo $frec_relat_porc_acum3, "%"; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $lim_inf4; ?></td>
                        <td><?php echo $lim_sup4; ?></td>
                        <td><?php echo $marca_clase4; ?></td>
                        <td><?php echo $frec_abs4; ?></td>
                        <td><?php echo $frec_abs_acu4; ?></td>
                        <td><?php echo $frec_relat4; ?></td>
                        <td><?php echo $frec_relat_acum4; ?></td>
                        <td><?php echo $frec_relat_porc4, "%"; ?></td>
                        <td><?php echo $frec_relat_porc_acum4, "%"; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $lim_inf5; ?></td>
                        <td><?php echo $lim_sup5; ?></td>
                        <td><?php echo $marca_clase5; ?></td>
                        <td><?php echo $frec_abs5; ?></td>
                        <td><?php echo $frec_abs_acu5; ?></td>
                        <td><?php echo $frec_relat5; ?></td>
                        <td><?php echo $frec_relat_acum5; ?></td>
                        <td><?php echo $frec_relat_porc5, "%"; ?></td>
                        <td><?php echo $frec_relat_porc_acum5, "%"; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $lim_inf6; ?></td>
                        <td><?php echo $lim_sup6; ?></td>
                        <td><?php echo $marca_clase6; ?></td>
                        <td><?php echo $frec_abs6; ?></td>
                        <td><?php echo $frec_abs_acu6; ?></td>
                        <td><?php echo $frec_relat6; ?></td>
                        <td><?php echo $frec_relat_acum6; ?></td>
                        <td><?php echo $frec_relat_porc6, "%"; ?></td>
                        <td><?php echo $frec_relat_porc_acum6, "%"; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3">Total:</td>
                        <td><?php echo $frec_abs_total; ?></td>
                        <td class="invisible"></td>
                        <td><?php echo $frec_relat_total; ?></td>
                        <td class="invisible"></td>
                        <td><?php echo $frec_relat_porc_total; ?></td>
                        <td class="invisible"></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <br><br>
        <div class="contenedor">
            <table class="table table-bordered">
                <tr>
                    <td style="    background: #65cdce; font-weight: 800;">Media</td>
                    <td><?php echo $media; ?></td>
                </tr>
                <tr>
                    <td style="    background: #65cdce; font-weight: 800;">Mediana</td>
                    <td><?php echo $mediana; ?></td>
                </tr>
                <tr>
                    <td style="    background: #65cdce; font-weight: 800;">Moda</td>
                    <td><?php echo $moda; ?></td>
                </tr>
            </table>
            <table class="table table-bordered">
                <tr>
                    <td style="    background: #65cdce; font-weight: 800;">Cuartil</td>
                    <td><?php echo $cuartil_calculado; ?></td>
                </tr>
                <tr>
                    <td style="    background: #65cdce; font-weight: 800;">Decil</td>
                    <td><?php echo $decil_calculado; ?></td>
                </tr>
                <tr>
                    <td style="    background: #65cdce; font-weight: 800;">Percentil</td>
                    <td><?php echo $percentil_calculado; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>