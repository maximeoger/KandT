<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top" style="opacity: 0.5 ;">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php displayNav(getNavData($pdo), $pageKey)?>
                <li><a href="<?php printf("%s%s=%s", APP_URL_BASE, APP_PAGE_PARAM, 'admin')?>">admin</a></li>
            </ul>
        </div>

    </div>
</nav>
