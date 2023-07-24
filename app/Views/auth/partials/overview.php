<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <?= $this->include('auth/partials/head') ?>
  <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
  	<main class="d-flex w-100 h-100">
        <?= $this->renderSection('content') ?>
  	</main>
    <?= $this->include('auth/partials/script') ?>
  </body>
</html>
