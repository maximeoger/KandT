<?php
require_once 'includes/connect.php';
require_once 'includes/functions.php';?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    </head>
    <body>
<div class="container">
    <div class="navbar-header">
        <a href="index.php" class="navbar-brand">← Retour à l'index</a>
    </div>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1>Admin</h1>
            <p>Remplissez les champs çi-dessous pour ajouter une page</p>
            <form action="">
                <input type="text" placeholder="titre">
                <input type="text" placeholder="h1">
                <input type="text" placeholder="description">
                <input type="text" placeholder="span-class">
                <input type="text" placeholder="span-text">
                <input type="text" placeholder="img-alt">
                <input type="text" placeholder="img-src">
            </form>
            <button>Ajouter</button>
        </div>
    </div>
</div>
    </body>
<?php
displayPagesData($pdo);
