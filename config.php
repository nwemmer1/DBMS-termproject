<?php // DBMS config
ini_set( "display_errors", true );
date_default_timezone_set( "America/New_York" );  // http://www.php.net/manual/en/timezones.php
define( "SERVER", "127.0.0.1:3306" );
define('DB_NAME', 'demo');
define( "DB_USERNAME", "dbms-staff" );
define( "DB_PASSWORD", "admin" );
define( "SCRIPTS_PATH", "scripts" );
define( "TEMPLATE_PATH", "templates" );

require( SCRIPTS_PATH . "/basicFeatures.php" );
require( SCRIPTS_PATH . "/advancedFeatures.php" );
// require( SCRIPTS_PATH . "/isset.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>