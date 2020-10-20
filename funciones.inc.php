<?php
/*
 * Esta función recibe una serie de parámetros y crea una historia con ellos
 */
function mostrar_historia($nombre, $mail, $telefono, $web, $fec_nac, $lug_nac, $sexo, $modulos, $html, $mysql, $ingles, $php, $js, $exp, $sueldo, $resp_dinero, $so) {

    //Imprime una hostoria mezclando texto fijo con los datos de los parametros
    print $nombre . " es la típica persona nacida en " . $lug_nac . " con " . calcular_edad($fec_nac) .
            " años, que cuando se le pregunta por su sexo te dice: " . $sexo . ".<br/>"
            . "Cuando no esta mirando la web " . $web . " en su sistema operativo favorito que es "
            . $so . ", está estudiando. ";

    //Depende de si recibe datos por el parametro $modulos, escribe una cosa u otra
    if ($modulos !== null) {

        print 'Ya tiene aprobados los módulos de ';

        foreach ($modulos as $modulo) {

            print $modulo;

            if ($modulo != end($modulos)) {
                print ', ';
            } else {
                print '. ';
            }
        }
    } else {
        print 'Todavia no tiene ningún módulo aprobado. ';
    }

    //Si recibe un "No" en el parametro $exp escribe una cosa y si recibe otra cosa, escribe esos datos
    if ($exp === 'No') {
        print 'Aunque no tenga experiencia';
    } else {
        print 'Aunque su experienca sea: ' . $exp;
    }

    //Depende de los datos recibidos, escribe un nivel de conocimiento acorde a esos datos
    print ', y sus conocimientos de html sean ';
    print nivel_conocimientos($html);
    print ', los de MySQL sean ';
    print nivel_conocimientos($mysql);
    print', los de ingles sean ';
    print nivel_conocimientos($ingles);
    print ', los de PHP sean ';
    print nivel_conocimientos($php);
    print ' y los de JavaScript sean ';
    print nivel_conocimientos($js);

    //Depende de los datros recibidos por $resp_dinero, escribe si es lo que cobra o lo que espera cobrar
    if ($resp_dinero === 'cobro') {
        print ', cobra ';
    } else {
        print ', espera cobrar ';
    }

    //Se usa una función para formatear el sueldo recibido con dos decimales 
    print number_format($sueldo, $decimals = 2) . '€ al mes. <br/> Si quieres ponerte en contacto '
            . 'con esta persona, puedes hacerlo a través del teléfono ' . $telefono
            . ' o en el e-mail: ' . $mail;
}

/*
 * Esta función recibe un valor numérico y escribe un texto acorde a ese valor
 * Si es 0 : nulo. Entre 1 y 4: nulo. Entre 5 y 7: bueno. Mayor que 7: notable.
 */
function nivel_conocimientos($conocimientos) {

    if ($conocimientos == 0) {
        print 'nulos';
    } elseif ($conocimientos > 0 && $conocimientos < 5) {
        print 'malos';
    } elseif ($conocimientos >= 5 && $conocimientos < 8) {
        print 'buenos';
    } else {
        print 'notables';
    }
}

/*
 * Escribe la estructura html de las opciones a elegir de los conocimeintos html
 * Recibe como parametro el valor mandado por el usuario para que se quede marcado en caso de que no es esté vacio
 */
function opc_html($html) {

    print'HTML :

        <input type="radio" name="html" value="O" ';
    if ($html === "O") {
        echo "checked='checked'";
    }
    print' required/> 0

        <input type="radio" name="html" value="1"';
    if ($html === "1") {
        echo "checked='checked'";
    }
    print'/> 1 <input type="radio" name="html" value="2"';
    if ($html === "2") {
        echo "checked='checked'";
    }
    print'/> 2 <input type="radio" name="html" value="3"';
    if ($html === "3") {
        echo "checked='checked'";
    }
    print'/> 3 <input type="radio" name="html" value="4"';
    if ($html === "4") {
        echo "checked='checked'";
    }
    print'/> 4 <input type="radio" name="html" value="5"';
    if ($html === "5") {
        echo "checked='checked'";
    }
    print'/> 5 <input type="radio" name="html" value="6"';
    if ($html === "6") {
        echo "checked='checked'";
    }
    print'/> 6 <input type="radio" name="html" value="7"';
    if ($html === "7") {
        echo "checked='checked'";
    }
    print'/> 7 <input type="radio" name="html" value="8"';
    if ($html === "8") {
        echo "checked='checked'";
    }
    print'/> 8 <input type="radio" name="html" value="9"';
    if ($html === "9") {
        echo "checked='checked'";
    }
    print'/> 9 <input type="radio" name="html" value="10"';
    if ($html === "10") {
        echo "checked='checked'";
    }
    print '/> 10 <br/>';
}

/*
 * Escribe la estructura html de las opciones a elegir de los conocimeintos mysql
 * Recibe como parametro el valor mandado por el usuario para que se quede marcado en caso de que no es esté vacio
 */
function opc_mysql($mysql) {

    print'MySQL :
        
        <input type="radio" name="mysql" value="O" ';
    if ($mysql === "O") {
        echo "checked='checked'";
    }
    print' required/> 0

        <input type="radio" name="mysql" value="1"';
    if ($mysql === "1") {
        echo "checked='checked'";
    }
    print'/> 1 <input type="radio" name="mysql" value="2"';
    if ($mysql === "2") {
        echo "checked='checked'";
    }
    print'/> 2 <input type="radio" name="mysql" value="3"';
    if ($mysql === "3") {
        echo "checked='checked'";
    }
    print'/> 3 <input type="radio" name="mysql" value="4"';
    if ($mysql === "4") {
        echo "checked='checked'";
    }
    print'/> 4 <input type="radio" name="mysql" value="5"';
    if ($mysql === "5") {
        echo "checked='checked'";
    }
    print'/> 5 <input type="radio" name="mysql" value="6"';
    if ($mysql === "6") {
        echo "checked='checked'";
    }
    print'/> 6 <input type="radio" name="mysql" value="7"';
    if ($mysql === "7") {
        echo "checked='checked'";
    }
    print'/> 7 <input type="radio" name="mysql" value="8"';
    if ($mysql === "8") {
        echo "checked='checked'";
    }
    print'/> 8 <input type="radio" name="mysql" value="9"';
    if ($mysql === "9") {
        echo "checked='checked'";
    }
    print'/> 9 <input type="radio" name="mysql" value="10"';
    if ($mysql === "10") {
        echo "checked='checked'";
    }
    print '/> 10 <br/>';
}

/*
 * Escribe la estructura html de las opciones a elegir de los conocimeintos de ingles
 * Recibe como parametro el valor mandado por el usuario para que se quede marcado en caso de que no es esté vacio
 */
function opc_ingles($ingles) {

    print'Ingles :
        
        <input type="radio" name="ingles" value="O" ';
    if ($ingles === "O") {
        echo "checked='checked'";
    }
    print' required/> 0

        <input type="radio" name="ingles" value="1"';
    if ($ingles === "1") {
        echo "checked='checked'";
    }
    print'/> 1 <input type="radio" name="ingles" value="2"';
    if ($ingles === "2") {
        echo "checked='checked'";
    }
    print'/> 2 <input type="radio" name="ingles" value="3"';
    if ($ingles === "3") {
        echo "checked='checked'";
    }
    print'/> 3 <input type="radio" name="ingles" value="4"';
    if ($ingles === "4") {
        echo "checked='checked'";
    }
    print'/> 4 <input type="radio" name="ingles" value="5"';
    if ($ingles === "5") {
        echo "checked='checked'";
    }
    print'/> 5 <input type="radio" name="ingles" value="6"';
    if ($ingles === "6") {
        echo "checked='checked'";
    }
    print'/> 6 <input type="radio" name="ingles" value="7"';
    if ($ingles === "7") {
        echo "checked='checked'";
    }
    print'/> 7 <input type="radio" name="ingles" value="8"';
    if ($ingles === "8") {
        echo "checked='checked'";
    }
    print'/> 8 <input type="radio" name="ingles" value="9"';
    if ($ingles === "9") {
        echo "checked='checked'";
    }
    print'/> 9 <input type="radio" name="ingles" value="10"';
    if ($ingles === "10") {
        echo "checked='checked'";
    }
    print '/> 10 <br/>';
}

/*
 * Escribe la estructura html de las opciones a elegir de los conocimeintos php
 * Recibe como parametro el valor mandado por el usuario para que se quede marcado en caso de que no es esté vacio
 */
function opc_php($php) {

    print'PHP :
        
        <input type="radio" name="php" value="O" ';
    if ($php === "O") {
        echo "checked='checked'";
    }
    print' required/> 0

        <input type="radio" name="php" value="1"';
    if ($php === "1") {
        echo "checked='checked'";
    }
    print'/> 1 <input type="radio" name="php" value="2"';
    if ($php === "2") {
        echo "checked='checked'";
    }
    print'/> 2 <input type="radio" name="php" value="3"';
    if ($php === "3") {
        echo "checked='checked'";
    }
    print'/> 3 <input type="radio" name="php" value="4"';
    if ($php === "4") {
        echo "checked='checked'";
    }
    print'/> 4 <input type="radio" name="php" value="5"';
    if ($php === "5") {
        echo "checked='checked'";
    }
    print'/> 5 <input type="radio" name="php" value="6"';
    if ($php === "6") {
        echo "checked='checked'";
    }
    print'/> 6 <input type="radio" name="php" value="7"';
    if ($php === "7") {
        echo "checked='checked'";
    }
    print'/> 7 <input type="radio" name="php" value="8"';
    if ($php === "8") {
        echo "checked='checked'";
    }
    print'/> 8 <input type="radio" name="php" value="9"';
    if ($php === "9") {
        echo "checked='checked'";
    }
    print'/> 9 <input type="radio" name="php" value="10"';
    if ($php === "10") {
        echo "checked='checked'";
    }
    print '/> 10 <br/>';
}

/*
 * Escribe la estructura html de las opciones a elegir de los conocimeintos js
 * Recibe como parametro el valor mandado por el usuario para que se quede marcado en caso de que no es esté vacio
 */
function opc_js($js) {

    print'JavaScript :
        
        <input type="radio" name="js" value="O" ';
    if ($js === "O") {
        echo "checked='checked'";
    }
    print' required/> 0

        <input type="radio" name="js" value="1"';
    if ($js === "1") {
        echo "checked='checked'";
    }
    print'/> 1 <input type="radio" name="js" value="2"';
    if ($js === "2") {
        echo "checked='checked'";
    }
    print'/> 2 <input type="radio" name="js" value="3"';
    if ($js === "3") {
        echo "checked='checked'";
    }
    print'/> 3 <input type="radio" name="js" value="4"';
    if ($js === "4") {
        echo "checked='checked'";
    }
    print'/> 4 <input type="radio" name="js" value="5"';
    if ($js === "5") {
        echo "checked='checked'";
    }
    print'/> 5 <input type="radio" name="js" value="6"';
    if ($js === "6") {
        echo "checked='checked'";
    }
    print'/> 6 <input type="radio" name="js" value="7"';
    if ($js === "7") {
        echo "checked='checked'";
    }
    print'/> 7 <input type="radio" name="js" value="8"';
    if ($js === "8") {
        echo "checked='checked'";
    }
    print'/> 8 <input type="radio" name="js" value="9"';
    if ($js === "9") {
        echo "checked='checked'";
    }
    print'/> 9 <input type="radio" name="js" value="10"';
    if ($js === "10") {
        echo "checked='checked'";
    }
    print '/> 10 <br/>';
}

/*
 * Escribe la estructura html de las opciones a elegir de los modulos aprobados
 * Recibe como parametro el valor mandado por el usuario para que se queden marcado en caso de que no es esté vacio
 */
function opc_modulos($modulos) {

    print '<table>
                <tr>
                    <td><input type="checkbox" name="modulos[]" value="PROG"';
    if (isset($modulos) && in_array("PROG", $modulos)) {
        echo 'checked="checked"';
    }
    print '/>PROG</td>
                    <td><input type="checkbox" name="modulos[]" value="SI"';
    if (isset($modulos) && in_array("SI", $modulos)) {
        echo 'checked="checked"';
    }
    print '/>SI</td>
                    <td><input type="checkbox" name="modulos[]" value="BBDD"';
    if (isset($modulos) && in_array("BBDD", $modulos)) {
        echo 'checked="checked"';
    }
    print '/>BBDD</td>
                    <td><input type="checkbox" name="modulos[]" value="LMSGI"';
    if (isset($modulos) && in_array("LMSGI", $modulos)) {
        echo 'checked="checked"';
    }
    print '/>LMSGI</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="modulos[]" value="ED"';
    if (isset($modulos) && in_array("ED", $modulos)) {
        echo 'checked="checked"';
    }
    print '/>ED</td>
                    <td><input type="checkbox" name="modulos[]" value="DWEC"';
    if (isset($modulos) && in_array("DWEC", $modulos)) {
        echo 'checked="checked"';
    }
    print '/>DWEC</td>
                    <td><input type="checkbox" name="modulos[]" value="DWES"';
    if (isset($modulos) && in_array("DWES", $modulos)) {
        echo 'checked="checked"';
    }
    print '/>DWES</td>
                    <td><input type="checkbox" name="modulos[]" value="DAW"';
    if (isset($modulos) && in_array("DAW", $modulos)) {
        echo 'checked="checked"';
    }
    print '/>DAW</td>
                    <td><input type="checkbox" name="modulos[]" value="DIW"';
    if (isset($modulos) && in_array("DIW", $modulos)) {
        echo 'checked="checked"';
    }
    print '/>DIW</td>
                </tr>
            </table>';
}

function crear_autoevaluacion() {
    //Si recibe datos en la  segunda fila de esa columna, se suman todas las filas de esa columna
    if (isset($_GET['22'])) {
        $total_alum = $_GET['22'] + $_GET['32'] + $_GET['42'] + $_GET['52'] + $_GET['62'] + $_GET['72'] + $_GET['82'] + $_GET['92'] + $_GET['102'] + $_GET['112'] + $_GET['122'] + $_GET['132'] + $_GET['142'] + $_GET['152'] + $_GET['162'];
    }
    //Si recibe datos en la  segunda fila de esa columna, se suman todas las filas de esa columna
    if (isset($_GET['23'])) {
        $total_prof = $_GET['23'] + $_GET['33'] + $_GET['43'] + $_GET['53'] + $_GET['63'] + $_GET['73'] + $_GET['83'] + $_GET['93'] + $_GET['103'] + $_GET['113'] + $_GET['123'] + $_GET['133'] + $_GET['143'] + $_GET['153'] + $_GET['163'];
    }
    $linea = 0;
    //Abrimos nuestro archivo
    $archivo = fopen("autoevaluacion.csv", "r");
    //Escribimos las etiquetas de formulario y tabla
    echo '<form action="autoevaluacion.php" method="get"><table border="1">';
    //Lo recorremos
    while (($datos = fgetcsv($archivo, ",")) == true) {
        $num = count($datos);
        $linea++;

        echo '<tr>';
        //Recorremos las columnas de esa linea
        for ($columna = 0; $columna < $num - 1; $columna++) {
            //Si es la primera columna se ejecuta este código
            if ($columna === 0) {
                //La primera fila solo se escribe los datos recibidos, en las otras cortamos la cadena a 20 caracteres
                // y mostramos el resto en un "Ver mas"
                if ($linea === 1) {
                    echo '<td>' . $datos[$columna] . "</td>";
                } else {
                    echo '<td>' . substr($datos[$columna], 0, 20) . " <a title ='" . $datos[$columna] . "'> Ver mas</a></td>";
                }
            }

            //Si es la segunda columna, se ejecuta este código
            if ($columna === 2) {
                //En la primera fila se escribe los datos. En las siguientes se crea un campo de formulario
                //y en la fila 17 se impime el total
                if ($linea === 1) {
                    echo '<td style="width:220px;">' . $datos[$columna] . "</td>";
                } elseif ($linea === 17) {
                    echo '<td><input type="text" name="' . $linea . '' . $columna . '" value="';
                    //Si recibe datos, se escribe el total
                    if (isset($_GET['22'])) {
                        echo $total_alum;
                    }
                    echo '"/></td>';
                } else {
                    echo '<td><input type="number"  step= "any" name="' . $linea . '' . $columna . '" value="';
                    //Si recibe datos en ese campo, se escriben. En caso contrario se usa 0 como defecto
                    if (isset($_GET[$linea . '' . $columna])) {
                        echo $_GET[$linea . '' . $columna];
                    } else {
                        echo '0';
                    }
                    echo '"/></td>';
                }
            }

            //Si es la tercera columna, se ejecuta este código
            if ($columna === 3) {
                //En la primera fila se escribe los datos. En las siguientes se crea un campo de formulario
                //y en la fila 17 se impime el total
                if ($linea === 1) {
                    echo '<td style="width:220px;">' . $datos[$columna] . "</td>";
                } elseif ($linea === 17) {
                    echo '<td><input type="text" name="' . $linea . '' . $columna . '" value="';
                    //Si recibe datos, se escribe el total
                    if (isset($_GET['23'])) {
                        echo $total_prof;
                    }
                    echo '"/></td>';
                } else {
                    //Se escribe los datos leido del archivo
                    echo '<td><input type="text" name="' . $linea . '' . $columna . '" value="' . $datos[$columna] . '"/></td>';
                }
            }
        }
        //Cierro etiquetas
        echo'</tr>';
    }
    echo '</table>'
    //Creo un area de texto para las observaciones, si recibe datos, los escribe en el campo
    . 'Observaciones <textarea rows="10" cols="40" name="observaciones">';
    if (isset($_GET['observaciones'])) {
        echo $_GET['observaciones'];
    }
    echo '</textarea><br/>'
    //boton de enviar
    . '<input type="submit" value="Enviar"/>'
    . '</form>';

//Cerramos el archivo
    fclose($archivo);
}

/*
 * Esta función recibe una fecha y calcula de diferencia de años con la recha actual
 * Devuelve los años de diferencias
 */
function calcular_edad($fecha){
    $naci = new DateTime($fecha);
    $hoy = new DateTime();
    $annos = $hoy->diff($naci);
    return $annos->y;
}