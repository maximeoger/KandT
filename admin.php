<?php
require_once 'includes/connect.php';
require_once 'includes/functions.php';?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1>Admin</h1>
            <p>Interface d'administration des pages</p>
            <a href="index.php">retour à l'index</a>
        </div>
    </div>
<?php
displayPagesData($pdo);
