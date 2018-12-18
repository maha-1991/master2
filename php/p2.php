<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>nouveau releve</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
    include 'conx.php';
    $sql = $cnx->prepare("select identifiant,nom,prenom,ancienReleve,dernierReleve,idcontroleur from client where idcontroleur ='" .$_GET['contr']."'"); 
    $sql->execute();
    
</body>
</html>