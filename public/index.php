<?php

    // configuration
    require("../includes/config.php"); 
    
    /*if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    }
    else
    {*/
        
        $slider = query("SELECT * FROM slider  limit 3");
        $tournee = query("SELECT * FROM posts WHERE type_id = 3 ");
        $actualite = query("SELECT * FROM posts WHERE type_id = 1 OR type_id = 2 ");
        $galerie_smal = query("SELECT * FROM galerie_smal");
        render("index_form.php", ["title" => "Page d'acceuil de Pac mesrimes","slider" => $slider,"tournee" => $tournee,
            "actualite" => $actualite,"galerie_smal"=>$galerie_smal]);
	//}

?>