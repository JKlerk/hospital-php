<?php

// Database instellingen
define('DB_TYPE', 'mysql');		// Database type
define('DB_HOST', '127.0.0.1'); // IP Adress
define('DB_NAME', 'hospital'); // Database Name
define('DB_USER', 'root'); 		// Database Username
define('DB_PASS', 'password');	// Database Password
define('DB_CHARSET', 'utf8'); 	// CharSet

define('URL_PUBLIC_FOLDER', 'public');	// De public folder is de folder waar alle bestanden in staan die via de adresbalk direct aangevraagd kunnen worden, denk aan CSS, JS, afbeeldingen etc...
define('URL_PROTOCOL', '//');	// Het URL protocol bepaalt of een site via HTTP of HTTPS wordt opgevraagd. Bij '//' wordt de gebruikte methode gebruikt
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);	// Dit bepaald de URL van de website
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME']))); 	// Dit bepaalt de subfolder van de website. Bijvoorbeeld of jij de website op: 127.0.0.1/webapp hebt draaien.
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);		// Dit genereerd de standaard URL van de applicatie
define('DEFAULT_CONTROLLER', 'Hospital'); 	// Standard Controller