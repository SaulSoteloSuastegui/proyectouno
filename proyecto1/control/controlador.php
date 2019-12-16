<?php

class MvcController{
    
    
    #Llama a la plantilla
    public function plantilla(){
        include "vistas/template.php";
    }
    
    #Interacción del usuario
    public function enlacesPaginasControlador(){

        if(isset($_GET["action"])){

       
        $enlacesController = $_GET["action"];
          // echo $enlacesController;
          //mandando datos al modelo
        }
        else{
            $enlacesController = "index";
        }
     $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
    include $respuesta;

    }


}


?>