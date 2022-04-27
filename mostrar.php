<?php // mostrar.php
session_start();
session_destroy();
?>

<!DOCTYPE html> 
<html>
    <head>
        <title>Mostrar</title>
        <meta http-equiv="Content-Type"; charset="utf-8"  />
        <meta name="viewpoint" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
        <script type="text/javascript" src="js/script.js"></script>
    </head>   
    <!---------------------------------------------------------------------------------------------->
        <header>
            <section id="espacio"></section>
            <section id="banner"><img src="img/fiart.jpg" /></section>
            <section id="fecha">
                <div id="calendar">
                    <p id="calendar-day"></p>
                    <p id="calendar-date"></p>
                    <p id="calendar-month-year"></p>
                </div>  
            </section>
        </header><br>    
    <!--------------------------------------------------------------------------------------------->
            <body>
                <center>
                    <tr>Catalogo de productos</tr><br><br>
                 <table border=0>
                    <thead>
                        
                        <tr>
                            <th >Id</th>
                            <th >Num</th>
                            <th >Nombre</th>
                            <th >Descripcion</th>
                            <th >Color</th>
                            <th >Precio</th>
                            <th >Material</th>
                            <th >Tama&ntilde;o</th>
                            <th >Fabricante</th>
                            <th >Imagen</th>
                            <th >Muestra</th>
                        </tr>
                    </thead>
                 <tbody>
                    <?php
                            include ("php/abre.php");
                            $consulta = "SELECT * FROM oaxaca";
                            $resultado= $conexion->query($consulta);
                            $a=1;
                            while($row=$resultado->fetch_assoc()){
                        ?>      
                    <tr>
                        <td><?php  echo $row['id'];           ?></td>
                        <td><?php  echo $a++;                 ?></td>
                        <td><?php  echo $row['nombre'];       ?></td>               
                        <td><?php  echo $row['descri'];       ?></td>
                        <td><?php  echo $row['color'];        ?></td>
                        <td><?php  echo $row['precio'];       ?></td>        
                        <td><?php  echo $row['materi'];       ?></td>
                        <td><?php  echo $row['tamano'];       ?></td>
                        <td><?php  echo $row['fabric'];       ?></td>

                        <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"></td>

                        <!---Modificar--->
                        <th><a href="php/modificar.php?id=<?php echo $row['id']; ?>"><img height="35px" src="img/cam.png"></a></th>

                
                        <!---Eliminar--->
                        <th><a href="php/eliminar.php?id=<?php echo $row['id']; ?>"><img height="30px" src="img/borr.png"></a></th>
                    </tr>
                 </tbody>
            
                    <?php
                    }
                    ?>
                 </table>
                        <tr>
                            <th colspan="11"><a href="php/agregar.php">Agregar Productos</th>
                        </tr>
                </center>
            </body><br><br>
        
        <footer?>
            <center>
                <p>desarrolladores it / contacto: desarrollajuarez@gmail.com</p>
                <p>Ciudad Ju&aacute;rez, Chih. Agosto - 2021</p>
            </center>
        </footer>
</hmtl>            