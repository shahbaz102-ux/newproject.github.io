
<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('245124572452-qj261og4c759u420qji7nuo7jj1ic9ug.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('eGo9QSu7poOkRUJfd1JsAnd3');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://localhost/www/login_google/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>