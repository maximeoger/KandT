<?php
require_once 'includes/data.php';
$page = &$data["les-teletubbies"];

define('APP_DEFAULT_PAGE', 'les-teletubbies');

if(!isset($data[APP_DEFAULT_PAGE])) {
    die('lol');
}
$pageKey = $_GET['page'] ?? APP_DEFAULT_PAGE;
if (!isset($data[$_GET['page']])) {
    $page = &$data[APP_DEFAULT_PAGE];

}else{
    $page = &$data[$pageKey] ?? null;
}
if (null === $page){
    http_response_code(404);
}
include "includes/header.php";
?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?=$page['title']?></h1>
            <p><?=$page['p']?></p>
            <span class="label <?=$page['span-class']?>"><?=$page['span-text']?></span>
        </div>
        <img class="img-thumbnail" alt="<?=$page['img-alt']?>" src="<?=$page['img-src']?>"data-holder-rendered="true">
    </div>
<?php include "includes/footer.php" ?>
