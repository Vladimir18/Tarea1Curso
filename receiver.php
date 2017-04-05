<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tarea 1</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>

<div id="divContainer">
    <table id="tableDetalle">
        <tr>
            <!--class="colTableDetalle"-->
            <th colspan="5" id="lblHeaderDetalle">
                Detalle de empleado
                <!--            <label id="lblHeaderDetalle">Detalle de empleado</label>-->
                <!--            <span id="lblHeaderDetalle">Detalle de empleado</span>-->
            </th>
        </tr>
        <tr>
            <td class="colTblDetalle_1" colspan="2">Código</td>
            <td class="colTblDetalle_2" colspan="2"><?php echo $_POST['codigo']; ?></td>
        </tr>

        <tr>
            <td class="colTblDetalle_1" colspan="2">Nombre</td>
            <td class="colTblDetalle_2" colspan="2"><?php echo $_POST['nombre']; ?></td>
        </tr>

        <tr>
            <td class="colTblDetalle_1" colspan="2">Apellidos</td>
            <td class="colTblDetalle_2" colspan="2"><?php echo $_POST['apellidos']; ?></td>
        </tr>

        <tr>
            <td class="colTblDetalle_1" colspan="2">Departamento</td>
            <td class="colTblDetalle_2" colspan="2"><?php echo $_POST['departamento']; ?></td>
        </tr>

        <tr>
            <td class="colTblDetalle_1" colspan="2">Estado</td>
            <td class="colTblDetalle_2" colspan="2"><?php echo $_POST['checboxEstado']; ?></td>
        </tr>
    </table>

</div>
</body>
</html>
   
