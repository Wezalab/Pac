<?php

    // configuration
    require("../includes/config.php"); 
    
    /*if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    }
    else
    {*/
        $post = query("SELECT * FROM posts WHERE type_id <> 4 order by date_s desc");

        render("post_form.php", ["title" => "Actualite de  Pac mesrimes","post" => $post]);
	//}

?>