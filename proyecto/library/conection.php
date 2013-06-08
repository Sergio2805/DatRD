<?php


//$conn = odbc_connect("190.122.104.107", "UserOpenData", "L$@n11@50");
$database="OPEN_DATA";
$conn = odbc_connect("DRIVER={SQL Server};Server=190.122.104.107;
	Database=$database;", "UserOpenData", "L$@n11@50");


if( $conn )
{
    $query = "select top 10 [dbo].[Centros].Nombre, [dbo].[Centros].Telefono, [dbo].[DistritosEducativos].Nombre as Distrito  
from [dbo].[Centros] left join [dbo].[DistritosEducativos] on 
[dbo].[Centros].IdDistritoEd =[dbo].[DistritosEducativos].IdDistritoEd where [dbo].[Centros].IdSector = 1";



# perform the query
$result = odbc_exec($conn, $query);



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
    echo"<tr>";
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
 



     echo "Connection established.\n";
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


<html>
<head>
	
</head>
	<body>
	</body>

</html>




