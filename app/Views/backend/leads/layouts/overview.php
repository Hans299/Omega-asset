<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?= $this->include('backend/leads/layouts/head') ?>
    <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    	<div class="wrapper">
        <?= $this->include('backend/leads/layouts/sidebar') ?>
    		<div class="main">
          <?= $this->include('backend/leads/layouts/navbar') ?>

          <main class="content">
            <?= $this->renderSection('content') ?>
          </main>
          <?= $this->include('backend/leads/layouts/footer') ?>
    		</div>
    	</div>
      <?= $this->include('backend/leads/layouts/script') ?>
    </body>
</html>
