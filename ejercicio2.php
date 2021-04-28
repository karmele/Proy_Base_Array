         <?php
            $tienda = array(     
                array(
                    "nombre" => "Apio verde",
                    "precio" => 1.42
                ),
                array(
                    "nombre" => "Ajo tierno",
                    "precio" => 1.69
                ),
                array(
                    "nombre" => "Coliflor",
                    "precio" => 2.29
            ));

            $otro= array(
                    "nombre" => "Acelga",
                    "precio" => 1.80);
					
            $tienda[]=$otro;
			
            $resultado = "";
			
            foreach ($tienda as $producto) {
                $resultado.= "Producto " . $producto['nombre'] . " -- Precio " . $producto['precio'] . "<br />";
            }

            asort($tienda);
			
            $resultado.="<hr />";
            foreach ($tienda as $producto) {
                $resultado.= "Producto " . $producto['nombre'] . " -- Precio " . $producto['precio'] . "<br />";
            }
            
            $resultado .=" <br /> Nº de verduras ". count($tienda);
            include 'vistas/vista_resultado.php';
