<?php

$con =mysqli_connect("localhost", "safetyguard_safe", "!7X)8)seT-Zr", "safetyguard");

function check_input($data) 

	{

            $data = trim(htmlentities(strip_tags($data)));

			$data = stripslashes($data);

			$data = htmlspecialchars($data);

            if (get_magic_quotes_gpc())

            $data = stripslashes($data);

			$data = addslashes($data);

			//@mysqli_real_escape_string(stripslashes($con,$data));

			return $data;

     }

?>









