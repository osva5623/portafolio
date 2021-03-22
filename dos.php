<?php 

    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="action.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <style>
        td{
            text-align: center;
        }

        td:hover{
            background-color: lightcoral;
        }

        th:hover{
            background-color: lightblue;
        }

        h1{
            text-align:center;
        }

    </style>

</head>
<body>
<h1>Calendario</h1>
    <div  id="body">
        
        
            <table width="100%" border="1">
                <tr>
                    <th>
                        Lunes
                    </th>
                    <th>
                        Martes
                    </th>
                        <th>
                            Miercoles
                        </th>
                    <th>
                        Jueves
                    </th>
                    <th>
                        Viernes
                    </th>
                    <th>
                        Sabado
                    </th>
                    <th>
                        Domingo
                    </th>    
                </tr>

                <tr>
                <?php 
                    include "meses.php";
                  
                    $Mes = array($Enero, $Febrero, $Marzo, $Abril, $Mayo, $Junio, $Julio, $Agosto, $Septiembre, $Octubre, $Noviembre, $Diciembre);    
                    
                    $Dias = $Mes[0];

                    for ($x = 1; $x <= $Dias; $x++) {

                        echo "<td>$x</td> ";
                        if (!($x % 7)) {
                            echo "</tr>";
                            
                        }
                    }
                    
                ?>
                
            </table>
        </div>
        <br>   
        <a href="index.html">
            <button>
                Regresar
            </button>
        </a>
        <button id="mes" value="0">Siguiente</button>



</body>
</html>