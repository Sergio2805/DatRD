<?php
include('library/engine.php');
$articulo= new articulos();

if(isset($_GET['codigo'])&&$_GET['codigo']>0){

      $articulo->codigo=$_GET['codigo'];
      $articulo->cargar();
}

?>

<html>

<head>
<title>Soperte De Articulos</title>
<link href="estilo.css" type='text/css' rel="stylesheet"/>
<head/>
<body>
      <div id="divPagina"  class="inicio">  
         <div id="divPortada">
                <th  ><font size="20%" color="white" face="arial"><b>STORE ON LINE</font><br><font color= "gold" size="5"><i><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEXPRESS</font ></th>
         </div> 
<div id="Menu">
             <ul class="menu">
               
               <li class="inicio">   
               <a href="index.php">Inicio</a>
               </li> 
                
                 
              <li>   
               <a href="Ver.php">Articulos agregados</a>
             </li>  
               
               <li>   
                 <a href="Agregararticulos.php">Agregar articulos</a>
                 
                    
               </li>
              
         </ul>
         </div>

<br><br>

<div id="divcuerpos">
<table class="listado">
<thead>
<tr>
<th>Codigo</th>
<th>Nombre</th>
<th>Color</th>
<th>Costo</th>
<th>Precio</th>
<th>Categoria</th>
<th>Peso</th> 
 <td></td>
                  </tr>
                </thead>
<tbody>
<tr>
<td><h3><?php echo $articulo->codigo;?></h3></td>
<td><h3><?php echo $articulo->nombre;?></h3></td>
<td><h3><?php echo $articulo->color;?></h3></td>
<td><h3><?php echo $articulo->costo;?></h4></td>
<td><h3><?php echo $articulo->precio;?></h3></td>
<td><h3><?php echo $articulo->categoria;?></h3></td>
<td><h3><?php echo $articulo->peso;?></h3></td>
</tr>


</tbody>
  


</tr>
</table>
<th backgruond="red">Comentario</th>
<p>
<?php echo $articulo->comentario;?>
</p>
<?php
                          $fotos=$articulo->obtenerFotos();
                          foreach($fotos as $foto){
                                    echo"<img class='images' src='img.php?src=fotos/{$foto}.jpg&h=150'/>"; 
                              }

 ?>

</div>


</div>
</body>
</html>
