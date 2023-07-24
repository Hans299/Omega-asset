<?= view('layouts/header'); ?>
<?= view('layouts/navbar'); ?>

<!-- consults -->
<section class="py-md-5 pt-md-0 py-1 pt-5" style="padding-top: 125px !important;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 d-md-block d-none">
                <img src="<?= base_url('public/assets/images/layer-regis.png') ?>" class="img-regiscollaboration">
            </div>
            <div class="col-lg-6 mx-auto">
                <div class="section-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 mx-auto">
                                <div class="row mb-5">
                                    <div class="col-md-6 text-md-left text-center">
                                        <h1 class="font-weight-bold text-darkblue">Register</h1>
                                        <p>Fill out the form for a free consultation!</p>
                                    </div>
                                    <div class="col-md-6 text-md-right text-center">
                                        <p>In collaboration with</p>
                                        <img src="<?= base_url('public/assets/images/partner/logo-bimafoundation.png') ?>" style="width: 200px;">
                                    </div>
                                </div>
                                <form action="<?= base_url('post-register-bimawebinar') ?>" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="firstName" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Surname</label>
                                            <input type="text" class="form-control" name="lastName">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name="phoneNumber" required>
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
                                            <label>School</label>
                                            <select class="form-control" name="school">
                                                <option value="">Others</option>
                                                <?php foreach ($schools as $school) : ?>
                                                    <option value="<?= $school['id'] ?>"> <?= $school['name'] ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" required>
                                                    <large>By filling all the informations, you agree to be contacted by our expert consultant.</large>
                                                </label>
                                            </div>
                                        </div>
                                        <button class="btn-xs-block btn-yellow">Submit</button>
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

<?= view('layouts/footer'); ?>
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