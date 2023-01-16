<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="<?= base_url() ?>/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/dist/css/style.css" rel="stylesheet">

    <!-- Titulos e Outros -->
    <title>TOPz Burguer Artesanal - Hamburgueria</title>
</head>

<body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">Capa</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Contatos</a>
                </nav>
            </div>
        </header>

        <?= $this->renderSection('content') ?>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Template de capa usando <a href="https://getbootstrap.com/">Bootstrap</a>, feito pelo <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
        </footer>
    </div>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url() ?>/dist/js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/dist/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/dist/js/main.js"></script>
    <script type="text/javascript" src="https://www.fbgcdn.com/embedder/js/ewm2.js" defer async></script>

</body>

</html>