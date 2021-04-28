         <?php
            include "vistas/cabecera.php";
            ?>

         <form id="form" action="ejer1.php?" method="post">
             <div id="datos">
                 <label>Palabra 1</label>
                 <input type="text" name="pal1" value="<?php echo "Marta" ?>" /> <!-- value="María" -->
                 <br />

                 <label>palabra 2</label>
                 <input type="text" name="pal2" value="<?php echo "Pepe" ?>" /> <!-- value="Pepe" -->
                 <br />
                 <input type="submit" name="oper" value="Enviar" />

             </div>

         </form>

         <?php
            include "vistas/pie.php";
            ?>