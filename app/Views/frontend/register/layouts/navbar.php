<!--header-->
<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img src="<?= base_url('public/assets/images/page/logo-omega.png') ?>" alt="Omega Edu">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-md-right text-left">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/register/ref/marketing') ?>">
                    <?= lang("Navbar.MenuRegister") ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-darkblue" href="<?= base_url('/auth/login') ?>" class="">
                    <?= lang("Navbar.MenuLogin") ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--//header-->
