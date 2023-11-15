<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name = "Ivan"; 
$text = nl2br("Bonjour,c’est moi.\n T’es le bien venu sur mon site.");
$text = str_replace("moi", $name, $text);
echo "<p>$text</p>";
?>

</body>
</html>