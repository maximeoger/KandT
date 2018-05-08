<?php
if (!isset($_GET['id'])) {
    header("Location: admin.php?error=noidtoedit");
    exit;
}
require_once '../includes/connect.php';
$sql = "SELECT 
  `id`,
  `title`
FROM
  `pages`
WHERE
  `id` = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row === false){
    header("Location : admin.php?error=nodatatodelete");
    exit;
}
?>
<form action="dodelete.php" method="post">
    <p>Confirmez-vous la suppression de la page <strong><?=$row['title']?></strong> ?</p>
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <input type="submit" value="oui">
    <a href="admin.php">non</a>
</form>
