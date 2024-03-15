<?php
$title = 'Inscription';
require_once(__DIR__ . "/../parts/head.php");
?>
<h1>Inscription</h1>

<form action="" method='POST'>
    <div>
        <label for="pseudo">Pseudo</label>
        <input type="text" name='pseudo'>
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="text" name='email'>
        <?php if (isset($error)) {
            echo "<p class='text-danger'>" . $error . "</p>";
        } ?>
    </div>
    <div>
        <label for="password">password</label>
        <input type="password" name='password'>
    </div>
    <button type="submit">Inscription</button>
</form>
<?php if (isset($error)) {
    echo "<p class='text-danger'>" . $error . "<p>";
}
require_once(__DIR__ . "/../parts/footer.php");
?>