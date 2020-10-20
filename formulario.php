<?php
//Llamo a la cabecera
require_once 'cabecera.php';
require_once 'funciones.inc.php';
?>

<form name="input" action="formulario.php" method="get"> <!--Creo el formulario -->

    <!-- Aquí se recoge y guarda el nombre y apellidos en formato text-->
    Nombre y apellidos: <input type="text" name="nombre" autofocus="autofocus" value="<?php
    //Si recibe datos del formulario, lo escribe como valor
    if (isset($_GET['nombre']))
        echo $_GET['nombre'];
    ?>" placeholder="Tu nombre y apellidos" id="nombre"/>
    <?php
    //Si recibe la variable, pero está vacia, te avisa
    if (isset($_GET['nombre']) && empty($_GET['nombre']))
        echo "<span style='color:red'> Debe introducir un nombre!!</span>";
    //Filtro la variable para que si recibe otra cosa que no sean letras, avise
    if (isset($_GET['nombre']) && !preg_match("/^[A-z\sñáéíóúäëïöü]*$/", $_GET['nombre']))
        echo "<span style='color:red'> Solo se admiten letras!!</span>";
    ?><br/>

    <!-- Aquí el e-mail en formato email -->
    e-mail: <input type="email" name="mail" value="<?php
    //Si recibe datos del formulario, lo escribe como valor
    if (isset($_GET['mail']))
        echo $_GET['mail'];
    ?>" placeholder="Tu e-mail"/>
    <?php
    //Si recibe la variable, pero está vacia, te avisa
    if (isset($_GET['mail']) && empty($_GET['mail']))
        echo "<span style='color:red'> Debe introducir un e-mail!!</span>";
    //Filtro la variable para que si recibe otra cosa que no sea un email valido, avise
    if (isset($_GET['mail']) && !filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL))
        echo "<span style='color:red'> Solo se admite el formato xxx@xxx.xx</span>";
    ?><br/>

    <!-- Aquí el telefono en formato tel-->
    Teléfono: <input type="tel" name="telefono" pattern="[0-9]{9}" value="<?php
    //Si recibe datos del formulario, lo escribe como valor
    if (isset($_GET['telefono']))
        echo $_GET['telefono'];
    ?>" placeholder="Tu telefono con 9 dígitos"/>
    <?php
    //Si recibe la variable, pero está vacia, te avisa
    if (isset($_GET['telefono']) && empty($_GET['telefono']))
        echo "<span style='color:red'> Debe introducir un telefono!!</span>";
    //Filtro la variable para que si recibe otra cosa que no sean números, avise
    if (isset($_GET['telefono']) && !preg_match("/^[0-9]*$/", $_GET['telefono']))
        echo "<span style='color:red'> Solo se admiten números!!</span>";
    ?><br/>

    <!--Aquí la web preferida en formato url-->
    Web preferida: <input type="url" name="web" value="<?php
    //Si recibe datos del formulario, lo escribe como valor
    if (isset($_GET['web']))
        echo $_GET['web'];
    ?>" placeholder="Tu web preferida"/>
    <?php
    //Si recibe la variable, pero está vacia, te avisa
    if (isset($_GET['web']) && empty($_GET['web']))
        echo "<span style='color:red'> Debe introducir una web!!</span>";
    //Filtro la variable para que si recibe otra cosa que no sea un url valido, avise
    if (isset($_GET['web']) && !filter_var($_GET['web'], FILTER_VALIDATE_URL))
        echo "<span style='color:red'> Solo se admite el formato web</span>";
    ?><br/>

    <!-- Aquí la fecha de nacimiento en formato date-->
    Fecha nacimiento: <input type="date" name="fec_nac" value="<?php
    //Si recibe datos del formulario, lo escribe como valor
    if (isset($_GET['fec_nac']))
        echo $_GET['fec_nac'];
    ?>" placeholder="Tu fecha de nacimiento"/>
    <?php
    //Si recibe la variable, pero está vacia, te avisa
    if (isset($_GET['fec_nac']) && empty($_GET['fec_nac']))
        echo "<span style='color:red'> Debe introducir una fecha de nacimiento!!</span>";
    ?><br/>

    <!-- Aquí el lugar de nacimiento en formato text-->
    Lugar de nacimiento: <input type="text" name="lug_nac" value="<?php
    //Si recibe datos del formulario, lo escribe como valor
    if (isset($_GET['lug_nac']))
        echo $_GET['lug_nac'];
    ?>" placeholder="Tu lugar de nacimiento"/>
    <?php
    //Si recibe la variable, pero está vacia, te avisa
    if (isset($_GET['lug_nac']) && empty($_GET['lug_nac']))
        echo "<span style='color:red'> Debe introducir un lugar de nacimiento!!</span>";
    ?><br/>

    <!-- Aquí el sexo en un menú desplegable-->
    Sexo: <select name="sexo">
        <option value="hombre"
        <?php
        //Si recibe este dato del formulario, deja esta opcion seleccionada
        if (isset($_GET['sexo']) && $_GET['sexo'] === 'hombre')
            echo 'selected';
        ?>>Hombre</option>
        <option value="mujer"
        <?php
        //Si recibe este dato del formulario, deja esta opcion seleccionada
        if (isset($_GET['sexo']) && $_GET['sexo'] === 'mujer')
            echo 'selected';
        ?>>Mujer</option>
        <option value="Es irrelevante"
        <?php
        //Si recibe este dato del formulario, deja esta opcion seleccionada
        if (isset($_GET['sexo']) && $_GET['sexo'] === 'Es irrelevante')
            echo 'selected';
        ?>>Es irrelevante</option>
        <option value="Si, por favor"
        <?php
        //Si recibe este dato del formulario, deja esta opcion seleccionada
        if (isset($_GET['sexo']) && $_GET['sexo'] === 'Si, por favor')
            echo 'selected';
        ?>>Si, por favor</option>
    </select><br/>

    <!--Aquí los modulos en formato checkbox -->
    <br/> Módulos aprobados de DAW: <br/>

    <?php
    // Creo una variable que no esté inicializada
    $vacio = null;

    //Si recibe datos del formulario llama a la función con dichos datos, y si no, la llama con la variable $vacio
    if (isset($_GET['modulos'])) {
        opc_modulos($_GET['modulos']);
    } else {
        opc_modulos($vacio);
    }
    ?>

    <!-- Aquí los conocimientos previos en formato radio-->
    <br/> Conocimientos previos: <br/>

    <?php

    // Usa el mismo sistema que para la función opc_modulos
    if (isset($_GET['html'])) {
        opc_html($_GET['html']);
    } else {
        opc_html($vacio);
    }

    if (isset($_GET['mysql'])) {
        opc_mysql($_GET['mysql']);
    } else {
        opc_mysql($vacio);
    }

    if (isset($_GET['ingles'])) {
        opc_ingles($_GET['ingles']);
    } else {
        opc_ingles($vacio);
    }

    if (isset($_GET['php'])) {
        opc_php($_GET['php']);
    } else {
        opc_php($vacio);
    }

    if (isset($_GET['js'])) {
        opc_js($_GET['js']);
    } else {
        opc_js($vacio);
    }
    ?>

    <!--Aquí la experiencia laboral en formato text -->
    <br/> Experiencia laboral relacionada con la programación:
    <input type="text" name="exp" value="<?php
    //Si recibe datos del formulario, lo escribe como valor
    if (isset($_GET['exp']))
        echo $_GET['exp'];
    ?>" placeholder="Tu experiencia laboral anterior"/>
    <?php
    //Si recibe la variable, pero está vacia, te avisa
    if (isset($_GET['exp']) && empty($_GET['exp']))
        echo "<span style='color:red'> Debe introducir alguna experiencia!! (Si no tienes, pon 'No')</span>";
    ?><br/>

    <!-- Aquí el sueldo en formato text-->
    Sueldo neto al mes que cobras o esperas cobrar:
    <input type="text" name="sueldo" value="<?php
    //Si recibe datos del formulario, lo escribe como valor
    if (isset($_GET['sueldo']))
        echo $_GET['sueldo'];
    ?>" placeholder="Sueldo que cobras o quieres cobrar"/>
           <?php
           //Si recibe la variable, pero está vacia, te avisa
           if (isset($_GET['sueldo']) && empty($_GET['sueldo']))
               echo "<span style='color:red'> Debe introducir un sueldo!!</span>";
           //Filtro la variable para que si recibe otra cosa que no sean números, avise
           if (isset($_GET['sueldo']) && !preg_match("/^[0-9]*[.]?[0-9]*$/", $_GET['sueldo']))
               echo "<span style='color:red'> Solo se admiten números!!</span>";
           ?><br/>

    <!-- Aquí la respuesta al dinero en formato radio-->
    <!-- Al ponerle el atributo required, obligo al usuario a marcar alguna opción-->
    ¿A que se corresponde la cifra anterior?: <br/>
    <input type="radio" name="resp_dinero" value="cobro"
    <?php
    //Si recibe este dato del formulario, lo marca
    if (isset($_GET['resp_dinero']) && $_GET['resp_dinero'] === 'cobro')
        echo 'checked="checked"';
    ?> required/> Lo que cobro

    <input type="radio" name="resp_dinero" value="espero_cobrar"
    <?php
     //Si recibe este dato del formulario, lo marca
    if (isset($_GET['resp_dinero']) && $_GET['resp_dinero'] === 'espero_cobrar')
        echo 'checked="checked"';
    ?>/> Espero cobrar

    <!-- Aquí al sistema operativo favorito en formato radio-->
    <!-- Al ponerle el atributo required, obligo al usuario a marcar alguna opción-->
    <br/><br/> Sistema operativo preferido: <br/>
    <input type="radio" name="so" value="Windows"
    <?php
     //Si recibe este dato del formulario, lo marca
    if (isset($_GET['so']) && $_GET['so'] === 'Windows')
        echo 'checked="checked"';
    ?> required/> Windows

    <input type="radio" name="so" value="GNU/Linux"
    <?php
     //Si recibe este dato del formulario, lo marca
    if (isset($_GET['so']) && $_GET['so'] === 'GNU/Linux')
        echo 'checked="checked"';
    ?>/> GNU/Linux

    <input type="radio" name="so" value="Mac"
    <?php
     //Si recibe este dato del formulario, lo marca
    if (isset($_GET['so']) && $_GET['so'] === 'Mac')
        echo 'checked="checked"';
    ?>/> Mac

    <input type="radio" name="so" value="Otro"
    <?php
     //Si recibe este dato del formulario, lo marca
    if (isset($_GET['so']) && $_GET['so'] === 'Otro')
        echo 'checked="checked"';
    ?>/> Otro

    <br/>

    <input type="submit" value="Enviar"/> <!--Botón de enviar -->

</form> <!-- Se cierra el formulario-->

<?php
//Si todas las variables del formulario menos "módulos" que no es obligatoria, no están vacias, se escribe la historia
if (!empty($_GET['nombre']) && !empty($_GET['mail']) && !empty($_GET['telefono']) && !empty($_GET['web']) && !empty($_GET['fec_nac']) && !empty($_GET['lug_nac']) && !empty($_GET['sexo']) && !empty($_GET['html']) && !empty($_GET['mysql']) && !empty($_GET['ingles']) && !empty($_GET['php']) && !empty($_GET['js']) && !empty($_GET['exp']) && !empty($_GET['sueldo']) && !empty($_GET['resp_dinero']) && !empty($_GET['so'])) {

    //Si la variable para los módulos si tiene datos, se le pasa como parémtro junto a todas las variables a la función mostrar_historia
    //Y si no tiene datos, se le pasa en su lugar una variable sin datos
    if (isset($_GET['modulos'])) {
        mostrar_historia($_GET['nombre'], $_GET['mail'], $_GET['telefono'], $_GET['web'], $_GET['fec_nac'], $_GET['lug_nac'], $_GET['sexo'], $_GET['modulos'], $_GET['html'], $_GET['mysql'], $_GET['ingles'], $_GET['php'], $_GET['js'], $_GET['exp'], $_GET['sueldo'], $_GET['resp_dinero'], $_GET['so']);
    } else {
        mostrar_historia($_GET['nombre'], $_GET['mail'], $_GET['telefono'], $_GET['web'], $_GET['fec_nac'], $_GET['lug_nac'], $_GET['sexo'], $vacio, $_GET['html'], $_GET['mysql'], $_GET['ingles'], $_GET['php'], $_GET['js'], $_GET['exp'], $_GET['sueldo'], $_GET['resp_dinero'], $_GET['so']);
    }
}

//Se llama al fichero pie.php
require_once 'pie.php';
?>