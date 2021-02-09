<?php include_once(__DIR__.'/comuns/header.php'); ?>
    <main role="main" class="container">

        <div class="starter-template">
            <?php include_once(__DIR__.'/comuns/mensagens.php'); ?>
            <h1>Bootstrap starter template</h1>
            <p class="lead">Seus dados bancários.</p>
            <p><pre>
                <?php print_r(Authenticate::getUser()); ?>
            </pre></p>
        </div>

    </main><!-- /.container -->
<?php include_once(__DIR__.'/comuns/footer.php'); ?> 