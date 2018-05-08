<?php
require_once '../includes/connect.php';
require_once '../includes/functions.php';
if (!isset($_GET['id'])){
    header("Location : admin.php?error=noidtoedit");
    exit;
}
$sql = "SELECT
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
            `id` = :id
        ;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
handlePDOError($stmt);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    header("Location : admin.php?error=noidtoedit");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="container theme-showcase">
            <div class="jumbotron">
                <h1>Page <?=$row['title']?></h1>
            </div>
            <div>
                <form action="doedit.php" method="post">
                    <input type="hidden" value="<?=$row['id']?>">
                    <label for="">Titre</label><input type="text" name="title" value="<?=$row['title']?>">
                    <label for="">h1</label><input type="text" name="h1" value="<?=$row['h1']?>">
                    <label for="">p</label><input type="text" name="p" value="<?=$row['p']?>">
                    <label for="">span-text</label><input type="text" name="span-text" value="<?=$row['span-text']?>">
                    <label for="">span-class</label><input type="text" name="span-class" value="<?=$row['span-text']?>">
                    <label for="">img-src</label><input type="text" name="img-src" value="<?=$row['img-src']?>">
                    <label for="">img-alt</label><input type="text" name="img-alt" value="<?=$row['img-alt']?>">
                    <label for="">titre navigation</label><input type="text" name="nav-title" value="<?=$row['span-text']?>">
                    <input type="submit" value="valider les changements">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
