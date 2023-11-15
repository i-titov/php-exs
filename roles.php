<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $users = ['admin', 'gestionnaire', 'membre'];
        foreach($users as $user){
            check($user);
        }
    ?>
    
</body>
</html>
<?php
    function check(string $str){
        $str = strtolower($str);
        switch($str){
            case "admin":
                echo "Admin : Vous êtes l’administrateur du site \n";
                break;
            case "member":
                echo "Membre : Vous êtes membre du site \n";
                break;
            case "gestionnaire":
                echo "Gestionnaire : Vous êtes gestionnaire du site \n";
                break;
            default: 
                echo "Autre : Bienvenue invité \n";
                break;
        }
    }        
?>