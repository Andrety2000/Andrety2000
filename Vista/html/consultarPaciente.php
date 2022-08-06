<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>
        <script type="text/javascript" src="Vista/jquery/jquery-3.5.1.min.js"></script>
        <script src="Vista/jquery/jquery-ui.js" type="text/javascript"></script>
        <link href="Vista/jquery/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="Vista/js/script.js"></script>
    </head>
    <body>
        <?php
        if ($result->num_rows > 0) {
            ?>
            <table>
                <tr><th>Documento</th><th>Nombre Completo</th><th>Sexo</th></tr>
                <?php
                while ($fila = $result->fetch_object()) {
                    ?>
                    <tr>
                        <td><?php echo $fila->PacIdentificacion; ?></td>
                        <td><?php echo $fila->PacNombres . " " . $fila->PacApellidos; ?></td>
                        <td><?php echo $fila->PacSexo; ?></td>
                        <td>Ver</td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        } else {
            ?>
            <p>El paciente no existe en la base de datos.</p>
            <input type="button" name="ingPaciente" id="ingPaciente" value="Ingresar Paciente" onclick="mostrarFormulario()">
                   <?php
               }
               ?>
    </body>
</html>