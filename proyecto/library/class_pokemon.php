<?php

class pokemon {
           public $id;
           public $nombre;
           public $tipo;
           public $descripcion;
          
         
                 function __construct($id=0){
	     							
		     $this-> id=$id;	
                     $this-> nombre="";	
	             $this-> tipo="";	
                     $this-> descripcion="";
                     
	 
	        } 
              
               static function getArticulo(){
                         
                        $sql="select M.*, (select count(*) from images where images.pokemon=M.codigo) As fotos from pokemon M";
                        $final=array();
                        $rs= mysql_query($sql);
                     while($fila=mysql_fetch_assoc($rs)){
 
                                 $final[]=$fila;
                      }
                          
                      return $final;
              } 
       
              function guardar(){
                       
                      if($this->id){
                               
                          $sql="update pokemon set 
                          nombre='{$this->nombre}',	
	                  tipo='{$this->tipo}',	
                          descripcion='{$this->costo}''";
                          
                              mysql_query($sql);
                                      echo mysql_error();
                    
                       }
                     else{
                 
                        $sql="insert into pokemon (nombre,tipo,descripcion)
                                                     values
                                                      ('{$this->nombre}',	
	                                              '{$this->tipo}',
                                                      '{$this->descripcion}')";
                             mysql_query($sql);    

                          
                          $this->id=mysql_insert_id();
                       }          

         }    
        
           function cargar(){

            $sql="select * from pokemon where id='{$this->id}'";
            $rs=mysql_query($sql);
            
            if(mysql_num_rows($rs)>0){
                    $registro=mysql_fetch_assoc($rs);	
                     $this-> nombre=$registro['nombre'];	
	             $this-> tipo=$registro['tipo'];	
                     $this-> descripcion=$registro['descripcion'];
                  
                       


             }
     
        
          }

         function agregarFoto($foto){
        
        $sql="insert into images (nombre,tipo,pokemon) values ('{$foto['name']}','{$foto['type']}','{$this->codigo}')";
        mysql_query($sql);
      
        $img=mysql_insert_id();
        return $img;
        

       }

     function obtenerFotos(){
       $datos=array();
      $sql="select * from images where pokemon'{$this->id}'";
      $rs=mysql_query($sql);
    while($fila = mysql_fetch_assoc($rs)){

      $datos[]=$fila['id'];

        }
    return $datos;



     }
   function quitarfoto($foto){
    $sql="delete from images where id={$foto}";
   mysql_query($sql);


   }

  static function eliminar($id){
    $sql="delete from pokemon where codigo={$id}";
   mysql_query($sql);


   }




}







?>
