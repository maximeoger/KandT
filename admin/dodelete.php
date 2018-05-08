<?php
if (!isset($_POST['id'])) {
    header("Location: admin.php?error=noidtodelete");
    exit;
}
require_once ("../includes/connect.php");
$sql = "DELETE FROM
  `pages`
WHERE
  `id` = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
handlePDOError($stmt);
header("Location : admin.php");