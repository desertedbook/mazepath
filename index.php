<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans|Questrial|Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="img/200px-Escudo_UdeG.svg.png" type="image/x-icon">
    <title>Maze Path</title>


</head>
<!--CONEXION A LA BASE DE DATOS: CONSULTA INSERT-->


<body class="all">

     
    <div class="contenedor">
        <!--TITULO DE LA PAGINA: ENCABEZADO-->
        <header role="banner">

            <h1 class="Encabezado"> <img src="img/200px-Escudo_UdeG.svg.png" alt="UDG" width="75"><br>
                Maze Path</h1>
            <h2 class="Sub">SUBIR MAPA</h2>

        </header>
        <!--CONTENIDO PRINCIPAL DE LA PAGINA: REGISTRO-->
        <!--
        <main class="contP" role="main">
            <div class="formularios">

                <form method="post" name="registro">

                    <img src="img/user-3.png" alt="nombre" width="55"><br>
                    
                    <label for="codigoes">Codigo Estudiante</label>
                    <input type="text" name="codigoes" id="codigoes" placeholder="Escriba su codigo..." required>
                    
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Escriba su nombre..." required>

                    <label for="apellido">Apellidos</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Escriba sus apellidos..." required>

                    <label for="numero">Celular</label>
                    <input type="text" name="celular" id="celular" placeholder="Escriba su numero..." required>
                    
                    <label for="placa">Placa Vehicular</label>
                    <input type="text" name="placa" id="placa" placeholder="Escriba su placa vehicular..." required>
                
                    <label for="cicloes">Ciclo Escolar</label>
                    <br>
                    <select class="cicloes" name="cicloes" required>
                        <option value="2018-A">2018-A</option>
                        <option value="2018-B">2018-B</option>
                        <option value="2019-A">2019-A</option>
                    </select>
                    <br>
                    <label for="carrera" id="carrera">Carrera</label>
                    <br>
                    <select class="carrera" name="carrera" required>
                        <option value="INNI">INNI</option>
                        <option value="INCO">INCO</option>
                    </select>
                    <br><br>
                    <input type="submit" class="botonEnv" onclick="pregunta()" value="Enviar" name="enviar"><br><br>
                   
                </form>

            </div>

        </main>-->

    </div> 
    
    

    <center>
    <img src="img/nada.jpg" />
    
    <form enctype="multipart/form-data" action="" method="post">
        <input name="uploadedfile" type="file" id="imagen"/>
        <input type="submit" value="Subir archivo" />
    </form>
    <div id = "imagePreview">
    <img src="output/0001.jpg" />        
    
    
    

    </div>

    </center>

    <!--  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        (function() {
            function filepreview(input) {
                if(input.files && input.files[01] ) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').html("<img src='" + e.target.result + "' />");
                    }

                    reader.readAsDataURL(input.files[1]);
                }
            }

            $('#imagen').change( function() {
                filepreview(this);
            });
        })();

    </script>
    
    <?php

        $target_path = 'C:/xampp/htdocs/caminos-cortos/prueba/in/';
        $target_path = $target_path . basename( $_FILES['uploadedfile']['name'] = "0002.jpg"); 
        $file_name = $_FILES['uploadedfile']['name'];
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
            echo "El archivo ".  basename( $_FILES['uploadedfile']['name']). 
            " ha sido subido";
            copy('C:\xampp\htdocs\caminos-cortos\prueba\in\0002.jpg', 'C:/xampp/htdocs/caminos-cortos/img/nada.jpg');
            echo  exec('python laberinto.py');
            rename('C:\xampp\htdocs\caminos-cortos\prueba\output\0001.jpg', 'C:/xampp/htdocs/caminos-cortos/img/nada.jpg');
            echo '<img src="prueba/0001.jpg" alt="Imagen resultante">';
        } else{
            echo "Ha ocurrido un error, trate de nuevo!";
        }

    ?>
    echo '<img src="output/0001.jpg" alt="Imagen resultante">';
    <div id = "imagePreview">   
</body>

</html>
