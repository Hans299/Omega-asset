<!--header-->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img src="<?= base_url('public/assets/images/page/logo-omega.png') ?>" alt="Omega Edu">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about-us') ?>"><?= lang("Navbar.MenuAbout") ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('/') ?>" onclick="return false;" id="navbarDropdownDestination" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= lang("Navbar.MenuDestination") ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownDestination">
                        <a class="dropdown-item" href="<?= base_url('destination/australia') ?>">Australia</a>
                        <a class="dropdown-item" href="<?= base_url('destination/canada') ?>">Canada</a>
                        <a class="dropdown-item" href="<?= base_url('destination/china') ?>">China</a>
                        <a class="dropdown-item" href="<?= base_url('destination/malaysia') ?>">Malaysia</a>
                        <a class="dropdown-item" href="<?= base_url('destination/new-zealand') ?>">New Zealand</a>
                        <a class="dropdown-item" href="<?= base_url('destination/singapore') ?>">Singapore</a>
                        <a class="dropdown-item" href="<?= base_url('destination/united-kingdom') ?>">United Kingdom</a>
                        <a class="dropdown-item" href="<?= base_url('destination/united-states') ?>">United States</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('team') ?>"><?= lang("Navbar.MenuTeam") ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://omegaedu.co.id/blog/"><?= lang("Navbar.MenuBlog") ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact-us') ?>">
                    <?= lang("Navbar.MenuContact") ?>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="<?= base_url('/') ?>" onclick="return false;" id="navbarDropdownLang" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= lang("Navbar.MenuLanguage") ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownLang">
                        <a class="dropdown-item" href="<?= base_url('id') ?>">Bahasa</a>
                        <a class="dropdown-item" href="<?= base_url('en') ?>">English</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav text-md-right text-left">
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
