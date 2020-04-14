<?php

    // configuration
    require("../includes/config.php"); 
    
    /*if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    }
    else
    {*/
        $tournee = query("SELECT * FROM posts WHERE type_id = 3 ");
        $galerie_smal = query("SELECT * FROM galerie_smal");
        render("apropos_form.php", ["title" => "Apropos de  Pac mesrimes","tournee" => $tournee,"galerie_smal"=>$galerie_smal]);
	//}

?>