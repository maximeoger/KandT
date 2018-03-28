<?php
require_once "includes/functions.php";
require_once "includes/connect.php";
/* requette */

$get_nav_infos = "SELECT
  `slug`,
  `nav-title`
FROM
  `pages`
  ;";
$nav = $kandt_db->prepare($get_nav_infos);
$nav->execute();
$currentPage = $_GET['page'];
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
                /*
                    foreach( $data as $pageSlug => $pageData) {
                        // nav-title - slug - ??
                        createLi($pageData['nav-title'], $pageSlug, $page);
                    }
                */
                while ($navRow = $nav->fetch(PDO::FETCH_ASSOC)):
                    createLi($navRow['nav-title'], $navRow['slug'], $currentPage);
                endwhile;
                ?>
            </ul>
        </div>
    </div>
</nav>
