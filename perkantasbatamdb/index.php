<?php

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://docs.google.com/spreadsheets/d/e/2PACX-1vTkUquiZ24FquwBiGhuQ6nvkGbQi6U0C4iw7m0igqY_TRMNyv97voc7fFQN3ez8yzUsJQ85a3vjsQYd/pub?gid=1096604120&single=true&output=csv");

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

     $response = curl_exec($ch);


	curl_close($ch);

	var_dump( explode( ',', $response ) );

    
