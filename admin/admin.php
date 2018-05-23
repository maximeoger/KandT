<?php
require_once '../includes/connect.php';
require_once '../includes/functions.php';?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    </head>
    <body>
<div class="container">
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <a href="../index.php">← Retour à l'index</a>
            <h1>Admin</h1>
            <p>Remplissez les champs çi-dessous pour ajouter une page</p>
            <form action="doadd.php" method="post">
                <input type="text" placeholder="titre" name="title">
                <input type="text" placeholder="h1" name="h1">
                <input type="text" placeholder="description" name="p">
                <input type="text" placeholder="span-text" name="span-text">
                <select name="span-class">
                    <option value="label-success">label-success</option>
                    <option value="label-info">label-info</option>
                    <option value="label-warning">label-warning</option>
                    <option value="label-danger">label-danger</option>
                </select>
                <input type="text" placeholder="img-src" name="img-src">
                <input type="text" placeholder="img-alt" name="img-alt">
                <input type="text" placeholder="nav-title" name="nav-title">
                <input type="text" placeholder="slug" name="slug">
                <input type="submit" value="ajouter">
            </form>
            
        </div>
    </div>
</div>
    </body>
<?php
displayPagesData($pdo);