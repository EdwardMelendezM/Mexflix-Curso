<?php
$template = '
<div class="item">
    <h2 class="p1">Hola %s, bienvenid@ a Mexflix</h2>
    <h3 class="p1">Tus peliculas y series favoritas</h3>
    <p class="p1 f1_25">Tu nombre es <b>%s</b></p>
    <p class="p1 f1_25">Tu email es <b>%s</b></p>
    <p class="p1 f1_25">Tu cumpleaños es  es <b>%s</b></p>
    <p class="p1 f1_25">Tu perfil de usuario tiene un nivel de <b>%s</b></p>
    <input type="text">
    <table>
        <tr>
            <td>Status_id</td>
            <td>Status</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Cooming Soon</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Realease</td>
        </tr>
        <tr>
            <td>3</td>
            <td>In Issue</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Finish</td>
        </tr>
    </table>

    <input type="button" class="button" value="Enviar">
    <input type="button" class="button add" value="Agregar">
    <input type="button" class="button edit" value="Editar">
    <input type="button" class="button delete" value="Eliminar">

    </div>
    ';
printf($template,
        $_SESSION['user'],
        $_SESSION['name'],
        $_SESSION['email'],
        $_SESSION['birthday'],
        $_SESSION['role']);

        
?>