<?php
require_once '../includes/connect.php';
require_once '../includes/functions.php';

$sql = "INSERT INTO
  `pages`
  (`id`, `title`, `h1`, `p`, `span-text`, `span-class`, `img-src`, `img-alt`, `nav-title`, `slug`)
  VALUES
  (NULL, :title, :h1, :p, :span_text, :span_class, :img_src, :img_alt, :nav_title, :slug)
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':h1', $_POST['h1']);
$stmt->bindValue(':p', $_POST['p']);
$stmt->bindValue(':span_text', $_POST['span-text']);
$stmt->bindValue(':span_class', $_POST['span-class']);
$stmt->bindValue(':img_src', $_POST['img-src']);
$stmt->bindValue(':img_alt', $_POST['img-alt']);
$stmt->bindValue(':nav_title', $_POST['nav-title']);
$stmt->bindValue(':slug', $_POST['slug']);
$stmt->execute();
handlePDOError($stmt);
header("Location: admin.php");