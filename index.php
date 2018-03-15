<?php
require_once 'includes/data.php';
include 'includes/header.php';
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
?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?=$page['title']?></h1>
            <p><?=$page['txt']?></p>
            <span class="label <?=$page['label_type']?>"><?=$page['label_content']?></span>
        </div>
        <img class="img-thumbnail" alt="<?=$page['img_alt']?>" src="<?=$page['img_link']?>" data-holder-rendered="true">
    </div>
<?php include "includes/footer.php" ?>
