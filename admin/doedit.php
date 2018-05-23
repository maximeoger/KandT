<?php
if (!isset($_POST['title']) || !isset($_POST['h1']) || !isset($_POST['p']) || !isset($_POST['span-text']) || !isset($_POST['span-class']) || !isset($_POST['img-src']) || !isset($_POST['img-alt']) || !isset($_POST['nav-title'])) {
    header("Location: index.php?error=noeditdataposted");
}
require_once '../includes/connect.php';
require_once '../includes/functions.php';
$sql = "UPDATE
    `pages`
  SET
    `title` = :title,
    `h1` = :h1,
    `p` = :p,
    `span-text` = :span_text,
    `span-class` = :span_class,
    `img-src` = :img_src,
    `img-alt` = :img_alt,
    `nav-title` = :nav_title
  WHERE
    `id` = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':h1', $_POST['h1']);
$stmt->bindValue(':p', $_POST['p']);
$stmt->bindValue(':span_text', $_POST['span-text']);
$stmt->bindValue(':span_class', $_POST['span-class']);
$stmt->bindValue(':img_src', $_POST['img-src']);
$stmt->bindValue(':img_alt', $_POST['img-alt']);
$stmt->bindValue(':nav_title', $_POST['nav-title']);
$stmt->execute();
handlePDOError($stmt);
header("Location : admin.php");