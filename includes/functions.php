<?php
function li($page, $linkText)
{
    $active = "";
    // si le contenu de la variable $page est strictement égal a la dernière composante de l'url (donc le nom de la page)
    if($page === basename($_SERVER['PHP_SELF'])){
        $active = ' class="active" ';
    }
?>
    <li<?=$active?>><a href="<?=$page?>"><?=$linkText?></a></li>
<?php
}