<?= view('layouts/header'); ?>
<?= view('layouts/navbar'); ?>

<!-- consults -->
<section class="py-md-5 pt-md-0 py-1 pt-5" style="padding-top: 125px !important;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 left-collaboration">
                <img src="<?= base_url('public/assets/images/partner/logo-abkinsby.png') ?>" class="img-collaboration" style="width:100px;display:block">
                <img src="<?= base_url('public/assets/images/layer-regis.png') ?>" class="img-regiscollaboration">
            </div>
            <div class="col-md-4 right-collaboration">
                <div class="form-collaboration">
                    <h3 class="h3-collaboration">Register Now</h3>
                    <form action="<?= base_url('post-register-abkinsurabaya') ?>" method="post">
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
                                <label>City</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                            <div class="form-group col-md-12">
                                <label>School</label>
                                <select class="form-control" name="school">
                                    <option value="">-- Select School Origin --</option>
                                    <option value="288">SMAN 17 Surabaya</option>
                                    <option value="289">SMAN 3 Jombang</option>
                                    <option value="290">SMAN 10 Surabaya</option>
                                    <option value="291">MAN Kota Surabaya</option>
                                    <option value="292">SMAN Gema 45 Surabaya</option>
                                    <option value="293">SMA Kristen Petra 4</option>
                                    <option value="294">SMK Negeri 3 Surabaya</option>
                                    <option value="164">SMA Kristen Masa Depan Cerah</option>
                                    <option value="295">SMA 17 Agustus 1945 Surabaya</option>
                                    <option value="296">SMAN 15 Surabaya</option>
                                    <option value="297">SMA Kristen Dharma Mulya Surabaya</option>
                                    <option value="298">SMA Alam Insan Mulia Surabaya</option>
                                    <option value="299">SMA Nation Star Academy</option>
                                    <option value="300">SMA Darul Ulum 2 Unggulan BPPT CIS ID 113 Jombang</option>
                                    <option value="301">SMA Santa Maria Surabaya</option>
                                    <option value="302">SMA Katolik St Louis 1 Surabaya</option>
                                    <option value="303">SMAN 1 Gresik</option>
                                    <option value="304">SMA Katolik St Hendrikus Surabaya</option>
                                    <option value="305">SMA Trimurti Surabaya</option>
                                    <option value="306">SMAN 6 Surabaya</option>
                                </select>
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