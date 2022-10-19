<?php

require '../vendor/autoload.php';

use App\Hello;

$hello = new Hello;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge quest composer 2</title>
</head>
<body>
    <h1><?php echo $hello->talk() ?></h1>
</body>
</html>