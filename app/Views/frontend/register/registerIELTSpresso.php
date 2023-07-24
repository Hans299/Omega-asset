<?= view('layouts/header'); ?>

<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg stroke">
            <a href="#"><img src="<?= base_url('public/assets/images/partner/logo-ieltspresso.png') ?>" class="logo-collaboration"></a>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-lg-auto">
                   <li class="nav-item active">
                       <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="<?= base_url('about-us') ?>">About Us</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Destination <span class="fa fa-angle-down"></span>
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="<?= base_url('destination/australia') ?>">Australia</a>
                           <a class="dropdown-item" href="<?= base_url('destination/canada') ?>">Canada</a>
                           <a class="dropdown-item" href="<?= base_url('destination/china') ?>">China</a>
                           <a class="dropdown-item" href="<?= base_url('destination/malaysia') ?>">Malaysia</a>
                           <a class="dropdown-item" href="<?= base_url('destination/new-zealand') ?>">New Zealand</a>
                           <a class="dropdown-item" href="<?= base_url('destination/singapore') ?>">Singapore</a>
                           <a class="dropdown-item" href="<?= base_url('destination/united-kingdom') ?>">United Kingdom</a>
                           <a class="dropdown-item" href="<?= base_url('destination/united-states') ?>">United State</a>
                       </div>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="<?= base_url('consult') ?>">Consult</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="<?= base_url('blog') ?>">Blog</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Login <span class="fa fa-angle-down"></span>
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="<?= base_url('/auth') ?>">Log In as Student</a>
                       </div>
                   </li>
                </ul>
           </div>
        </nav>
    </div>
</header>
<!--//header-->

<!-- consults -->
<section class="py-md-5 pt-md-0 py-1 pt-5" style="padding-top: 125px !important;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 left-collaboration">
                <h6 class="text-collaboration">In collaboration with</h6>
                <img src="<?= base_url('public/assets/images/logo-omega.png') ?>" class="img-collaboration">
                <img src="<?= base_url('public/assets/images/layer-regis.png') ?>" class="img-regiscollaboration">
            </div>
            <div class="col-md-4 right-collaboration">
                <div class="form-collaboration">
                    <h3 class="h3-collaboration">Register Now</h3>
                    <form action="<?= base_url('post-register-ieltspresso') ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="firstName">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastName">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control" name="phoneNumber">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Birth Date</label>
                                <input type="date" class="form-control" name="birthDate">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Birth Place</label>
                                <input type="text" class="form-control" name="birthPlace">
                            </div>
                            <div class="form-group col-md-12">
                                <label>School Name</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                            <div class="form-group col-md-12">
                                <lead>By filling all the informations, you agree to be contacted by our expert consultant.</lead>
                            </div>
                            <button class="button-collaboration">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //consults -->

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

<?= view('layouts/footer'); ?>
<?= view('layouts/script'); ?>

<script>
    <?php if (session()->getFlashdata('success')) { ?>
        $('#success').modal('show');
    <?php } else if (session()->getFlashdata('error')) {  ?>
        $('#error').modal('show');
    <?php } ?>
</script>
