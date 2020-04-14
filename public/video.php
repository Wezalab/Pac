<?php

    // configuration
    require("../includes/config.php"); 
    
    /*if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    }
    else
    {*/
        $video = query("SELECT * FROM posts WHERE type_id = 2 ");

        render("video_form.php", ["title" => "Videos de  Pac mesrimes","video" => $video]);
	//}

?>