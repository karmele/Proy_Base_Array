<?php
include "cabecera.php";

?>
<form id="form" action="index.php?" method="post">
    <div id="datos">
        <label>Etiqueta 1</label>
        <input type="text" name="nom1"  value="<?php echo "Pepe" ?>"/> <!-- value="Pepe" -->
        <br />
    
        <label>Etiqueta 2</label> 
        <select name="nom2" >
            <?php
            $array = array("valor1", "valor2", "valor3");
            foreach ($array as $m)
            {

                echo "<option value='" . $m . "'";
                echo " >$m</option>\n";
            }
            ?>
        </select><br />
        
        <label>Etiqueta 3</label> 
    
        <input type="radio" name="nom3" value ="valor1" />valor1
        <input type="radio" name="nom3" value ="valor2" /> valor2
        <br /> 
        <label>&nbsp;</label>
        <input type="submit" name="oper"  value=""/>
    </div>

</form>
<?php
include "pie.php";
?>
