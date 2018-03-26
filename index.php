<?php
require_once 'includes/data.php';


/*
 * définie une constante APP_DEFAULT_PAGE
 * dont la valeur est la chaine "les-teletubbies"
 * (le slug de la page par défaut)
 */
define('APP_DEFAULT_PAGE', 'les-teletubbies');

/*
 * Si APP_DEFAULT_PAGE n'existe pas (!isset), envoie une erreur
 */
if(!isset($data[APP_DEFAULT_PAGE])) {
    die('omfg');
}
/*
 * définie une variable $pageKey dont la valeur
 * sera égale à $_GET['page'] si celle-çi existe,
 * ou à APP_DEFAULT_PAGE sinon
 */
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
