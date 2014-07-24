<?
/* your definition here */
$lockString = "..!";
$username = "myUser";
$password = "myPass";
$errorMessage = "You have to enter proper credentials to see the content!";
/* end of your definition */

if (strpos( $_SERVER[REQUEST_URI],$lockString) !== false) {

	if (isset($_SERVER['PHP_AUTH_USER']) 
			&& isset($_SERVER['PHP_AUTH_PW']) 
			&& $_SERVER['PHP_AUTH_USER'] == $username
			&& $_SERVER['PHP_AUTH_PW'] == $password) 
	{ 
		// all fine
		
	} else { // wrong credentials
	  header('HTTP/1.0 401 Unauthorized');
	  header('WWW-Authenticate: Basic realm="Login"');
	  echo $errorMessage;
	  exit;
	}
}
?>
