<?php

    // configuration
    require("../includes/config.php"); 
    
    /*if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    }
    else
    {*/
        $type = query("SELECT * FROM type_photo WHERE  1 ");
        $photo = query("SELECT * FROM galerie_smal,type_photo WHERE galerie_smal.type_id = type_photo.id ");

        render("photo_form.php", ["title" => "Photos de  Pac mesrimes","photo" => $photo, "type" => $type]);
	//}

?>