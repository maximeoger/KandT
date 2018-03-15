<?php
require_once "includes/functions.php";
require_once "data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                if (isset($data))
                {
                    foreach( $data as $pageSlug => )
                    {
                        li( $key['nav-title'].'.php', $pageSlug['nav-title']);
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
