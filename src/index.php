<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>

<body>
    <div>
        <h1>Holy shit! This is running!</h1>
        <p>Look at this! This webpage is actually running. For testing purposes, a real time clock made with PHP (UTC):
            <?php
            header("refresh: 3");
            
            date_default_timezone_set('UTC');
            echo date('H:i:s');
            ?>
        </p>
    </div>
</body>

</html>