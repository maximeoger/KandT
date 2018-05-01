<?php
/**
 * generates nav LI element
 *
 * @param string $slug page name with .php at the end
 * @param string $linkText text that goes in the link (d'uhhhh)
 */
function li($slug, $linkText, $pageKey)
{
    $active = "";
    if($slug === $pageKey){
        $active = ' class="active" ';
    }
    ?>
    <li<?=$active?>><a href="<?php printf("%s%s=%s", APP_URL_BASE, APP_PAGE_PARAM, $slug)?>"><?=$linkText?></a></li>
    <?php
}

/**
 * display one page
 *
 * @param array $page
 */
function displayPage(array $page) : void
{

    if(isset($_GET['page']) && $_GET['page'] === 'admin'){
        ?>
        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <h1>Admin</h1>
                <p>Interface d'administration des pages</p>
            </div>
        </div>
        <?php

    }else{
        ?>
        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <h1><?=$page['h1']?></h1>
                <p><?=$page['p']?></p>
                <span class="label <?=$page['span-class']?>"><?=$page['span-text']?></span>
            </div>
            <img class="img-thumbnail" alt="<?=$page['img-alt']?>" src="img/<?=$page['img-src']?>" data-holder-rendered="true">
        </div>
        <?php
    }
}


/**
 * @param PDO $pdo database connection
 * @param string $slug page slug

 * @throws Exception SQL query Fed up

 * @return array|null
 */
function getPageContent(\PDO $pdo, string $slug): ?array
{
        $sql = "SELECT 
            `h1`, 
            `p`, 
            `span-class`, 
            `span-text`, 
            `img-alt`, 
            `img-src` 
        FROM 
          `pages` 
        WHERE 
          `slug` = :slug
        LIMIT 1
        ;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":slug", $slug, PDO::PARAM_STR);
        $stmt->execute();
        handlePDOError($stmt);
        if (false === $row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            return null;
        }
        return $row;
}
/**
 * description
 *
 * @param PDO $pdo
 *
 * @throws Exception
 *
 * @return array
 */
function getNavData(\PDO $pdo): array
{
    $sql = "SELECT 
              `slug`, 
              `nav-title` 
            FROM 
              `pages`
        ;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    handlePDOError($stmt);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param PDOStatement $stmt
 * @throws Exception
 */
function handlePDOError(PDOStatement $stmt): void
{
    if ($stmt->errorCode() != '00000') {
        throw new \Exception($stmt->errorInfo()[1]);
    }
}
/**
 * display navigation links
 * @param array $navData
 * @param string $pageKey
 */
function displayNav(array $navData, string $pageKey): void
{
    if (count($navData) === 0) {
        die("No pages, d'uh");
    }
    foreach ($navData as $onePage) {
        li($onePage['slug'], $onePage['nav-title'], $pageKey);
    }
}