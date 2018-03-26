<?php
require_once "includes/functions.php";
//require_once "data.php";
require_once "includes/connect.php";
/* requette */
$request = "SELECT
    `id`,
    `title`,
    `h1`,
    `p`,
    `span-text`,
    `span-class`,
    `img-src`,
    `img-alt`,
    `nav-title`,
    `slug`
FROM
    `pages`
WHERE
    slug = :slug
;";
$stmt = $conn->prepare($request);
$stmt->execute();
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
                    foreach( $data as $pageSlug => $pageData) {
                        // nav-title - slug - ??
                        li($pageData['nav-title'], $pageSlug, $page);
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
