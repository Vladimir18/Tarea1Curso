<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Tarea 1 </title>
    <link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>
<?php
// put your code here
?>
<div id="container">
    <div id="divHead">
        <label id="lblHead">Empleados</label>
    </div>

    <div id="divForm">
        <form method="post" action="receiver.php">
            <table>
                <tr>
                    <td class="colTable">
                        Código
                    </td>
                    <td class="colTable">
                        <input type="text" name="codigo"/>
                    </td>
                </tr>

                <tr>
                    <td class="colTable">
                        Nombre
                    </td>
                    <td class="colTable">
                        <input type="text" name="nombre" />
                    </td>

                    <td class="colTable">
                        Apellidos
                    </td>
                    <td class="colTable">
                        <input type="text" name="apellidos"/>
                    </td>
                </tr>

                <tr>
                    <td class="colTable">
                        Departamento
                    </td>

                    <td class="colTable">
                        <select name="departamento">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="colTable">
                        <input type="checkbox" name="checboxEstado" value="Activo" />Activo
                    </td>
                </tr>

                <tr>
                    <td class="colTable">
                        <input type="submit" value="Aceptar" />
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>
</body>
</html>
