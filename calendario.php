
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
                    $n_mes=$_POST['mes'];
                    if(empty($n_mes)){
                        $n_mes=0;
                    }
                    else{}
                    echo $n_mes;       
                $Mes = array($Enero, $Febrero, $Marzo, $Abril, $Mayo, $Junio, $Julio, $Agosto, $Septiembre, $Octubre, $Noviembre, $Diciembre);    
                
                $Dias = $Mes[$n_mes];

                for ($x = 1; $x <= $Dias; $x++) {

                    echo "<td>$x</td> ";
                    if (!($x % 7)) {
                        echo "</tr>";
                        
                    }
                  }
                
            ?>
            
        </table>
