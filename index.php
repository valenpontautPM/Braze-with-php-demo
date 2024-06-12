<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# Variables start with "$"
$var1="Hello";
$var2="Minder! :)";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Braze with Php</title>
    </head>
    <body>
        <!-- If you want to print backend values you can put the '< ?= ?>' tags. The "=" will act as an "echo"/"print" -->
        <h1><?= $var1." ".$var2 ?></h1>
    </body>
</html>