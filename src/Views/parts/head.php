<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThatMovie - <?php echo $title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/public/img/logo.png" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
                ThatMovie
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Déconnection</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Connection</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>