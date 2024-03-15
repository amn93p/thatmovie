<?php
require_once(__DIR__ . '/../../src/Controllers/HomeController.php');
$title = 'Accueil';
require_once(__DIR__ . "/parts/head.php");
?>
<h1>Hello 👌</h1>
<?php
foreach ($myListUsers as $user) {
?>
    <p><?= $user->username ?></p>
    <p><?= $user->email ?></p>
    <p><?= $user->id ?></p>
<?php
}
require_once(__DIR__ . "/parts/footer.php");
?>