<?php 
 if (isset($_GET["mehet_x"]) ) {
    $kidobando = $_GET["dobas"] ;   
    switch ($kidobando) {
            case "papír" || "teljes_dobóz":
                echo "kék gyűjtő";
                break;
            case "konzerv":
                echo "Sárga gyűjtő";
                break;
            default:
                echo "Nem szeletív";
                break;
            }

    }
   else{
        echo "Nem lett kiválásta";
    }

?>