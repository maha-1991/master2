<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>tous les clients </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <form method="POST" action="index.php">
   <input type="submit" name="home" value="home" >
   </form>
</head>
<body>
    <?php
    include 'conx.php';
    $sql = $cnx->prepare("select identifiant,nom,prenom,ancienReleve,dernierReleve,idcontroleur from client where idcontroleur ='" .$_GET['contr']."'"); 
    $sql->execute();
    echo ' liste des clients du controleur!!';
    echo "\n\n";

    echo"<table border='1'>";
    foreach ($sql->fetchAll (PDO::FETCH_ASSOC)  as $ligne){
        echo"<tr>";
        echo"<td>".$ligne['nom']."</td>";
        echo"<td>".$ligne['prenom']."</td>";
        echo"<td>".$ligne['ancienReleve']."</td>";
        echo"<td>".$ligne['dernierReleve']."</td>";
        echo"<td><a href= 'p2.php?clt= ".$ligne['identifiant']."'> Nouveau releve  </a></td>"; 
        echo"</tr>";
    }
    echo"</table>";
    
 ?>
</body>
</html>