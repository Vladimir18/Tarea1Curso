<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tarea 1</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    
    <body> 
        
        <table id="tableDetalle">
            <tr>
                <!--class="colTableDetalle"-->
                <td  colspan="3">  
                    <span id="lblHeaderDetalle">Detalle de empleado</span>
                </td>
            </tr>
            <tr>
                <td class="colTableDetalle" colspan="2">Código</td>
                <td class="colTableDetalle"><?php echo $_POST['codigo']; ?></td>
            </tr>
            
            <tr>
                <td class="colTableDetalle" colspan="2">Nombre</td>
                <td class="colTableDetalle"><?php echo $_POST['nombre']; ?></td>
            </tr>
            
            <tr>
                <td class="colTableDetalle">Apellidos</td>
                <td class="colTableDetalle"><?php echo $_POST['apellidos']; ?></td>
            </tr>
            
            <tr>
                <td class="colTableDetalle">Departamento</td>
                <td class="colTableDetalle"><?php echo $_POST['departamento']; ?></td>
            </tr>
            
            <tr>
                <td class="colTableDetalle">Estado</td>
                <td class="colTableDetalle"><?php echo $_POST['checboxEstado']; ?></td>
            </tr>
        </table>
    </body>
</html>
   
