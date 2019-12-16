<?php
class EnlacesPaginas{
  
    public function enlacesPaginasModel($enlacesController){

      if($enlacesController == "nosotros" ||
         $enlacesController == "servicios" ||
         $enlacesController == "contactenos"  )  {
                 $modulo = "vistas/modulos/".$enlacesController.".php";
         }
      else if ($enlacesController == "index"){

                $modulo = "vistas/modulos/inicio.php";
            }
       else{ 
        $modulo = "vistas/modulos/inicio.php";
       }            

        return $modulo ;
    }
}

?>