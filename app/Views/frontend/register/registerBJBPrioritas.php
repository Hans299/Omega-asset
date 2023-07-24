<?= view('layouts/header'); ?>

<!--header-->
<nav class="navbar navbar-expand-lg navbar-bniemerald">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img src="<?= base_url('public/assets/images/page/logo-omega_wy.png') ?>" alt="Omega Edu">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about-us') ?>">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('/') ?>" onclick="return false;" id="navbarDropdownDestination" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Destination
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
                    <a class="nav-link" href="<?= base_url('consult') ?>">Consult</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('blog') ?>" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth') ?>">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--//header-->

<!-- consults -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-left-register bg-bjbprioritas">
                
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto">
                <div class="section-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 mx-auto">
                                <div class="row mb-5">
                                    <div class="col-md-6 text-md-left text-center">
                                        <h1 class="font-weight-bold text-darkblue">Registration</h1>
                                        <p>Fill out the form for a free consultation!</p>
                                    </div>
                                </div>
                                <form action="<?= base_url('post-register-bjbprioritas') ?>" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="firstName">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Surname</label>
                                            <input type="text" class="form-control" name="lastName">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name="phoneNumber">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Current Location</label>
                                            <input type="text" class="form-control" name="city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" name="birthDate">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" required>
                                                    <large>By filling all the informations, you agree to be contacted by our expert consultant.</large>
                                                </label>
                                            </div>
                                        </div>
                                        <button class="btn-xs-block btn-brown">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //consults -->

<?= view('register/layouts/footer'); ?>
<?= view('layouts/script'); ?>

<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <center>
                    <div>
                        <img src="<?= base_url('public/assets/images/confirm.png') ?>" alt="image" style="width: 180px; height:180px;">
                    </div>
                    <div>
                        <h2 style="font-weight: 600;">Thank You !</h2>
                    </div>
                    <div style="padding-top: 20px;">
                        <h6 style="font-size: 15px;">Your submission has been submitted and our team will contact you soon. </h6>
                    </div>
                    <div style="padding-top: 20px; padding-bottom: 30px;">
                        <button class="button-regis" style="border-radius: 18px !important;width:100px !important;" data-dismiss="modal">OK</button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <center>
                    <div style="padding-top: 30px;">
                        <img src="<?= base_url('public/assets/images/cancel.png') ?>" alt="image" style="width: 110px; height:110px;">
                    </div>
                    <div style="padding-top: 20px;">
                        <h2 style="font-weight: 600;">Error !</h2>
                    </div>
                    <div style="padding-top: 20px;">
                        <h6 style="font-size: 15px;">Something went wrong please try again. </h6>
                    </div>
                    <div style="padding-top: 20px; padding-bottom: 30px;">
                        <button class="button-regis" style="border-radius: 18px !important;width:100px !important;" data-dismiss="modal">OK</button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<script>
    <?php if (session()->getFlashdata('success')) { ?>
        $('#success').modal('show');
    <?php } else if (session()->getFlashdata('error')) {  ?>
        $('#error').modal('show');
    <?php } ?>
</script>