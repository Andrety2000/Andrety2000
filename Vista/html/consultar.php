<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Gestión Odontológica</title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>
        <script type="text/javascript" src="Vista/jquery/jquery-3.5.1.min.js"></script>
        <script src="Vista/jquery/jquery-ui.js" type="text/javascript"></script>
        <link href="Vista/jquery/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="Vista/js/script.js"></script>
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
                <br>
                <h1>Sistema de Gestión Odontológica</h1>
            </div>
            <ul id="menu">
                <li><a href="index.php">inicio</a> </li>
                <li><a href="index.php?accion=asignar">Asignar</a> </li>
                <li class="activa"><a href="index.php?accion=consultar">Consultar Cita</
                        a> </li>
                <li><a href="index.php?accion=cancelar">Cancelar Cita</a> </li>
            </ul>
            <div id="contenido">
                <h2>Consultar Cita</h2>
                <p>Para consultar una cita es necesario ingresar el documento del paciente. Por lo tanto en
                este momento ese es el único campo que se requiere dentro del formulario. Con base
                en el resultado obtenido se mostrará el contenido dinámico que informará acerca de las citas del usuario.</p>
                <form action="index.php?accion=consultarCita" method="post" id="frmconsultar">                
                    <table>
                        <tr>
                            <td>Documento del Paciente</td>
                            <td><input type="text" name="consultarDocumento" id="consultarDocumento"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="button" name="consultarConsultar"
                                                   value="Consultar" id="consultarConsultar" onclick="consultarCita()"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><div id="paciente2"></div></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>