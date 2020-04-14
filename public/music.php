<?php

    // configuration
    require("../includes/config.php"); 
    
    /*if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    }
    else
    {*/
        $audio = query("SELECT * FROM posts WHERE type_id = 1 ");

        render("music_form.php", ["title" => "Audio de  Pac mesrimes","audio" => $audio]);
	//}

?>