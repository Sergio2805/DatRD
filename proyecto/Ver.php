<?php
include('library/engine.php');
$database="SGC-2010";
$conn = odbc_connect("DRIVER={SQL Server};Server=190.122.104.107;
  Database=$database;", "UserOpenData", "L$@n11@50");
if(count($_POST)>0){
   
  $a ="'".substr($_POST['txtsrc'],0,3);
  $b="%'";
  $a.=$b;
 
}



?>

<html>

<head>
<title>DATARD</title>
<link href="estilo.css" type='text/css' rel="stylesheet"/>
<head/>


<body>
      <div id="divPagina">
         <div id="divPortada">


         </div> 
         <div id="Menu">
           <form action="Ver.php" method ="post"> 
  <div id="barra">
     <table class ="centrado">
          <tr>
            <br>
          </tr>
     </table>
    
    <input type="text" size="100"  name="txtsrc"/><br><br>
   
   <select>
    <option value="Regionales">Regionales</option>";
   </select>       
   
   <select>
    <option value="Distrito">Distrito</option>";
   </select>
 <select>
    <option value="Escuela">Escuela</option>";
   </select><br>
    <button  type="submit" name="Guardar" >        Buscar        </button>
  </div>
</form>
         </div>
 <br><br>
         <div id="divCuerpo">
            <fieldset>
               <legend class="legend">Escuelas</legend>
               
<?php


//$conn = odbc_connect("190.122.104.107", "UserOpenData", "L$@n11@50");



if( $conn  )
{

  if(count($_POST)>0){
   
 




    $query = "select  [dbo].[Centros].Nombre, [dbo].[Centros].Telefono, [dbo].[DistritosEducativos].Nombre as Distrito  
from [dbo].[Centros] left join [dbo].[DistritosEducativos] on 
[dbo].[Centros].IdDistritoEd =[dbo].[DistritosEducativos].IdDistritoEd where [dbo].[Centros].Nombre like {$a}";



# perform the query
$result = odbc_exec($conn, $query);


}
else{  $query = "select top 10 [dbo].[Centros].Nombre, [dbo].[Centros].Telefono, [dbo].[DistritosEducativos].Nombre as Distrito  
from [dbo].[Centros] left join [dbo].[DistritosEducativos] on 
[dbo].[Centros].IdDistritoEd =[dbo].[DistritosEducativos].IdDistritoEd where [dbo].[Centros].Nombre like 'a%'";



# perform the query
$result = odbc_exec($conn, $query);   }

# fetch the data from the database

echo"<table class='listado'>";

echo "<thead>
                  <tr>
               
                  <th>Nombre</th>
                 
                  <th>Telefono</th>
                 
                  <th>Distrito</th>

                  
                  <td></td>
                  </tr>
                </thead>";
                echo "<tbody>";
$color=false;
while(odbc_fetch_row($result)){
  $clase=($color)?'interlineado':'';
  $Escuela = odbc_result($result, 1);
  $Tele = odbc_result($result, 2);
  $Distrito = odbc_result($result, 3);
    echo"<tr class=$clase>";
    echo "<td> {$Escuela}</td>";
    echo "<td> {$Tele}</td>";
    echo "<td> {$Distrito}</td>";
    echo"</tr>";
     $color=!$color;
}
echo "</tbody>";
echo "</table>";


# close the connection
odbc_close($conn);
 



}
else
{
     echo "Connection could not be established.\n";
   
}

//-----------------------------------------------
// Perform operations with connection.
//-----------------------------------------------

/* Close the connection. */

?>
                </tbody>
             </table>
          </fieldset> 
       
       </div>

</div>
</body>
</html>
