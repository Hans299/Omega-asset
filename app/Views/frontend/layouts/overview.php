<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?= $this->include('frontend/layouts/head') ?>
    <body>
        <?= $this->include('frontend/layouts/navbar') ?>
        <div class="content">
            <?= $this->renderSection('content') ?>
        </div>
        <?= $this->include('frontend/layouts/footer') ?>
        <?= $this->include('frontend/layouts/script') ?>
    </body>
</html>
