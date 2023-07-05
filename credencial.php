<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans|Questrial|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Credencial</title>
</head>
<?php
    
$host='localhost';
$bd='esta';
$user='root';
$password='';
$conexion=new mysqli($host,$user,$password,$bd);// conexion con el servdor y la base de datos 

$credencial=$conexion->query("select * from alumno order by id_a desc limit 1;");

?>

<body>
    <tr>

    </tr>
    <main class="creden">
        <h1>Credencial</h1><br>
        <div class="tablaC">
            <table>
                <?php
			while ($mostrar= $credencial->fetch_array(MYSQLI_BOTH)) { // arreglo de la tabla platillos 
				echo '
				<tr>
					<td>Codigo Escolar:
                    '.$mostrar['codigoes'].'</td>
                    <tr>
					<td>Nombre:
                    '.$mostrar['nombre'].'</td>
                    <tr>
 					<td>Apellidos: '.$mostrar['apellido'].'</td>
                    </tr>
                    <tr>
					<td>Celular: '.$mostrar['celular'].'</td>
                    </tr>
                    <tr>
					<td>Placa Vehicular: '.$mostrar['placa'].'</td>
                    </tr>
                    <tr>
                    <td>Ciclo Escolar: '.$mostrar['cicloes'].'</td>
                    </tr>
                    <tr>
                    <td>Carrera: '.$mostrar['carrera'].'</td>
                    </tr>
				</tr>';
			}

			?>
                </tbody>

            </table>
        </div>
        <br><br>
        <a href="index.php"><input type="button" value="SALIR" class="btncre"></a>
    </main>
</body>

</html>
