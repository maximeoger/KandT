<?php

// generation automatique des LIs en fonction
// du nom de la page appellée via 'title' dans $data
function li($linkText, $page, $activePage)
{
    $active = "";
    // si le contenu de la variable $page est strictement égal
    // a la dernière composante de l'url (donc le nom de la page)
    if ($page === $activePage) {
        $active = ' class="active" ';
    }

    // Select slug from
    ?>
    <li<?= $active ?>><a href="?page=<?= $page ?>"><?= $linkText ?></a></li>
    <?php
}