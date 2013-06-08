<!DOCTYPE html>
<html>
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="4.1.8.183"/>
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3896285136"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?400200416"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?3861966997" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = 'js';
</script>
   </head>
 <body class="museBGSize">
     

  <div class="rgba-background clearfix" id="page"><!-- group -->
 
   
    
   <div class="clearfix grpelem" id="pu95"><!-- group -->
   
    <div class="grpelem" id="u95"><!-- simple frame --></div>
    
    <a href="estudiante.html"><div class="grpelem" id="u110"><!-- state-based BG images --></div></a>
    <a href="graficas.html"><div class="grpelem" id="u109"><!-- state-based BG images --></div></a>
    <a href="ver.php"><div class="grpelem" id="u108"><!-- state-based BG images --></div></a>
    <a href="index.html"><div class="grpelem" id="u111"><!-- state-based BG images --></div></a>
   </div>
     <div id ="entrada">
    		<form method = "post" action= "">
            <br>
            	<b>Buscar Estudiante: </b><input type "text" name = "buscarEstudiante" >
                <br>
           
   
    <br>
    <b>
    <div id ="seleccion">
    		<b>Centros Educativos:</b> <select name = "Centros" id = "centros">
            <option value = "Centro Educativo 1">Centro Educativo 1</option>
            <option value = "Centro Educativo 2">Centro Educativo 2</option>
            <option value = "Centro Educativo 3">Centro Educativo 1</option>
            <option value = "Centro Educativo 4">Centro Educativo 4</option>
            <option value = "Centro Educativo 5">Centro Educativo 5</option>
            <option value = "Centro Educativo 6">Centro Educativo 6</option>
            <option value = "Centro Educativo 7">Centro Educativo 7</option>
		</select>	
            
    </div>
	
	<div>
		<?php


//$conn = odbc_connect("190.122.104.107", "UserOpenData", "L$@n11@50");
$database="SGC-2010";
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

echo"<table border='2'>";

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
    echo "<td border='2'> {$Escuela}</td>";
    echo "<td border='2'> {$Tele}</td>";
    echo "<td border='2'> {$Distrito}</td>";
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

	
	</div>
      </form>
 </div>
   <div class="verticalspacer"></div>
   <div class="shadow gradient browser_width grpelem" id="u80"><!-- group -->
    <div class="clearfix" id="u80_align_to_page">
     <div class="clearfix grpelem" id="u114-3"><!-- group -->
      <div class="grpelem" id="pu114-2"><!-- content -->
      
       <p>&nbsp;</p>
      </div>
      <div class="clearfix grpelem" id="u139-6"><!-- content -->
       <p>FUERZA DE BATALLA</p>
       <p><span id="u139-3">Version: 1.0</span></p>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/2_menu-u110-r.png" alt=""/>
   <img class="preload" src="images/2_menu-u110-m.png" alt=""/>
   <img class="preload" src="images/3_menu-u109-r.png" alt=""/>
   <img class="preload" src="images/3_menu-u109-m.png" alt=""/>
   <img class="preload" src="images/1_menu-u108-r.png" alt=""/>
   <img class="preload" src="images/1_menu-u108-m.png" alt=""/>
   <img class="preload" src="images/home-u111-r.png" alt=""/>
   <img class="preload" src="images/home-u111-m.png" alt=""/>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/1.1/jquery-1.7.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/1.1/jquery-1.7.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/1.1/museutils.js?410024474" type="text/javascript"></script>
  <script src="scripts/1.1/jquery.musepolyfill.bgsize.js?432088147" type="text/javascript"></script>
  <script src="scripts/1.1/jquery.tobrowserwidth.js?3930036094" type="text/javascript"></script>
  <script src="scripts/1.1/jquery.watch.js?3882405427" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   Muse.Utils.addSelectorFn('body', Muse.Utils.transformMarkupToFixBrowserProblemsPreInit);/* body */
$(document).ready(function() { $('.browser_width').toBrowserWidth(); });/* browser width elements */
Muse.Utils.addSelectorFn('body', Muse.Utils.prepHyperlinks); /* body */
Muse.Utils.fullPage('#page'); /* 100% height page */
Muse.Utils.addSelectorFn('body', Muse.Utils.showWidgetsWhenReady);/* body */
Muse.Utils.addSelectorFn('body', Muse.Utils.transformMarkupToFixBrowserProblems);/* body */

</script>

   </body>
</html>
