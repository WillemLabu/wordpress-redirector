<?php

	// Always redirect to the administrative front-end
	// Unless we're accessing the API: ~/wp-json/

	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$api = get_site_url() . "/wp-json/";

	if ($url == $api) {
		header('Access-Control-Allow-Origin: *');
	} else {
		header ("Location: " . get_site_url() . "/wp-admin");
	}