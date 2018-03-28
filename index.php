<?php
require_once 'includes/connect.php';
define('APP_DEFAULT_PAGE', 'les-teletubbies');
include "includes/header.php";
$get_content = "
SELECT
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
  `slug` = :slug
;";
$stmt = $kandt_db->prepare($get_content);
$stmt->bindValue(':slug', $_GET['page']);
$stmt->execute();
$page = $stmt->fetch(PDO::FETCH_ASSOC);
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