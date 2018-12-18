<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>la liste de tous les contrôleurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    include'conx.php';
    $sql=$cnx->prepare("select id,nom,prenom from controleur");
    $sql->execute();
    echo"<table border='1'>";
    foreach ($sql->fetchAll (PDO::FETCH_ASSOC)  as $ligne){
        echo"<tr>";
        echo"<td>".$ligne['nom']."</td>";
        echo"<td>".$ligne['prenom']."</td>";
        echo"<td><a href= 'p1.php?contr= ".$ligne['id']."'> Tous les clients </a></td>"; 
        echo"</tr>";
    }
    echo"</table>";
    ?>

</body>
</html>