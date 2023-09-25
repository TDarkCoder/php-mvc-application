<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Library</a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/register">Sign up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Sign in</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="container my-4">
        <?php if (app()->session->get('success')): ?>
            <div class="alert alert-success">
                <?= app()->session->get('success') ?>
            </div>
        <?php endif ?>

        <?php if (app()->session->get('error')): ?>
            <div class="alert alert-danger">
                <?= app()->session->get('error') ?>
            </div>
        <?php endif ?>
        {{content}}
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
</script>
</body>
</html>