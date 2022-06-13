<? 

header('Access-Control-Allow-Origin: http://localhost:9500');

$name = 'John Smith';
$email = 'john@email.com';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-React</title>
</head>
<body>
    <h1>
        Welcome <?echo $name . " You are now logged in!"?> 
    </h1>
    <h3>Don't get bored too fast.</h3>
    <div id="root"></div>
    <script src="./public/main.js"></script>
    <script src="./index.js"></script>
</body>
</html>