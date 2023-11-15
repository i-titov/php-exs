<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo "Hello world"?></p>
    <p><?php countImg(9) ?></p>
</body>
</html>
<?php 
function countImg(int $lines){
    echo $lines%$lines == 1 ? 'il y aura 2 images' : 'il y aura 3 images';
}
?>