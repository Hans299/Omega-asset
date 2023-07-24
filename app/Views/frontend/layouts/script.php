<!-- Jquery Plugin -->
<script src="<?= base_url('public/assets/js/jquery-3.3.1.min.js') ?>"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!--Bootstrap-->
<script src="<?= base_url('public/assets/js/bootstrap.min.js') ?>"></script>

<!-- Whatsapp -->
<button onclick="whatsapp()" id="whatsapp">
    <span class="fa-brands fa-whatsapp" aria-hidden="true" style="font-size: 27px !important"></span>
</button>
<!-- Movetop -->
<button id="movetop" title="Go to top">
    <span class="fa fa-chevron-up" aria-hidden="true"></span>
</button>

<script>
    function whatsapp() {
        window.open('https://api.whatsapp.com/send/?phone=6281290512261&text&app_absent=0', '_blank');
    }
    $(window).on("scroll", function() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    });
    $('#movetop').click(function(){
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });
</script>

<script type="text/javascript">
    $(document).on('ready',function(){
        if (!sessionStorage.getItem('shown-modal')){
            $('#modalPromo').modal('show');
            sessionStorage.setItem('shown-modal', 'true');
        }
    });
</script>

<!-- Preloader -->
<script>
    $('.preloader').fadeOut("slow",function(){
        $(this).hide();
    });
</script>
<!-- //Preloader -->

<!-- Hover Zoom In 1 -->
<script>
    $("figure").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );
</script>
<!-- //Hover Zoom In 1 -->

<!-- Disable Body Scroll if Navbar in Active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //Disable Body Scroll if Navbar in Active -->

<!-- Rotate Earth Animation -->
<script>
    function rotatePrev(){
        var angle = ($('#omg-img-destination').data('angle') + 45) || 0;
        $('#omg-img-destination').css({'transform': 'rotate(' + angle + 'deg)'});
        $('#omg-img-destination').data('angle', angle);
        return false;
    }

    function rotateNext(){
        var angle = ($('#omg-img-destination').data('angle') - 45) || 0;
        $('#omg-img-destination').css({'transform': 'rotate(' + angle + 'deg)'});
        $('#omg-img-destination').data('angle', angle);
        return false;
    }
</script>
<!-- //Rotate Earth Animation -->

<!-- Sweet Alert -->
<script src="<?= base_url('public/assets/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('public/assets/js/plugin/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- AOS JS -->
<script src="<?= base_url('public/assets/js/aos/aos.js') ?>"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        aos_init();
    });

    function aos_init() {
        AOS.init({
            duration: 1000,
            once: true
        });
    }
</script>
<!-- //AOS JS -->

<!-- Owl Carousel JS -->
<script src="<?= base_url('public/assets/js/owl.carousel.min.js') ?>"></script>
<script type="text/javascript">
    var whyus    = $('.whyus');
    var branch    = $('.branch');
    var featured  = $('.featured');
    var testimony  = $('.testimony');

    whyus.owlCarousel({
        nav             : false,
        dots            : false,
        autoplay        : false,
        margin 			: 40,
		stagePadding 	: 15,
        responsive 		: {
            0:{
                items : 1,
                loop : false
            },
            775:{
                items : 1,
                loop : false
            },
            1200:{
                items : 1.4,
                loop : true
            }
        }
    });
    $('.my-next-button').click(function() {
        whyus.trigger('next.owl.carousel');
    });
    $('.my-prev-button').click(function() {
        whyus.trigger('prev.owl.carousel');
    });

	branch.owlCarousel({
		loop 			: false,
        nav             : true,
        navText         : ["<div class='owl-prev'><span><i class='fa fa-chevron-left'></i></span></div>", "<div class='owl-next'><span><i class='fa fa-chevron-right'></i></span></div>"],
        dots            : false,
		lazyload 		: true,
		margin 			: 40,
		stagePadding 	: 15,
		responsive 		: {
			0:{
                items:1,
                loop:false
            },
            775:{
                items:2,
                loop:false
            },
            1200:{
                items:3,
                loop:false
            }
		}
	});

    featured.owlCarousel({
		loop 		    : true,
		nav 			: false,
        dots            : false,
		lazyload 		: true,
		margin 			: 40,
		stagePadding 	: 15,
        autoplay        : true,
        rewind          : true,
        autoplayTimeout : 4000,
        smartSpeed      : 800,
		responsive 		: {
			0:{
                items : 2,
                dots : true
            },
            775:{
                items : 2,
                dots : true
            },
            1200:{
                items : 4,
                autoplay : true,
                loop : true
            }
		}
	});

    branch.owlCarousel({
        loop 			: false,
        nav             : true,
        navText         : ["<div class='owl-prev'><span><i class='fa fa-chevron-left'></i></span></div>", "<div class='owl-next'><span><i class='fa fa-chevron-right'></i></span></div>"],
        dots            : false,
        lazyload 		: true,
        margin 			: 40,
        stagePadding 	: 15,
        responsive 		: {
            0:{
                items:1,
                loop:true
            },
            775:{
                items:1,
                loop:true
            },
            1200:{
                items:1,
                loop:true
            }
        }
    });
</script>
<!-- //Owl Carousel JS -->



<script type="text/javascript">
    $(document).ready(function(){
        $('#btnSave').attr('disabled',true);
        $('form input[type=checkbox]').on('click', function() {
            if ($(this).is(':checked')) {
                $('#btnSave').prop("disabled", false);
            } else {
                $('#btnSave').prop("disabled", true);
            }
        });

        $('form_contact #btnSave').click(function(evt) {
            $.ajax({
                url : '<?= base_url('contact-us/sendmail'); ?>',
                type: 'POST',
                data: $('#form_contact').serialize(),
                dataType: 'JSON',
                beforeSend: function() {
                    $('#btnSave').prop('disabled', true);
                },
                complete: function() {
                    $('#btnSave').removeAttr('disabled');
                },
                success: function(result) {
                    if (result.success) {
                        Swal.fire({
                            type: 'success',
                            title: result.message,
                            text: 'We will respond as soon as possible.',
                            showConfirmButton: true,
                        });
                        document.getElementById("form_contact").reset();
                    } else if (result.error) {
                        Swal.fire({
                            type: 'error',
                            title: result.message,
                            text: 'Failed to send message.',
                            showConfirmButton: true,
                        });
                    } else {
                        Swal.fire({
                            type: 'info',
                            title: result.message,
                            showConfirmButton: true,
                        });
                    }
                    
                },
                error: function(jqXHR, exception) {
                    console.log(jqXHR, exception)
                }
            });
        });
    });
</script>


<script>
$(document).ready(function(){
    $('#form-registration #btnSave').click(function() {
        $.ajax({
            type 	    : 'POST',
            dataType	: 'JSON',
            data        : $('#form-registration').serialize(),
            url			: '<?= site_url('/register')?>',
            beforeSend: function(){
                if($('input[name="firstName"]').val().length == 0 || $('input[name="email"]').val().length == 0 || $('input[name="phoneNumber"]').val().length == 0) {
                    Swal.fire({
                        type    : 'error',
                        title   : 'Error',
                        text    : 'You must complete all required fields.',
                        showConfirmButton: true,
                        timer   : 1500
                    });
                    return false;
                };
            },
            success     : function (response) {
                if(response.success) {
                    Swal.fire({
                        type    : 'success',
                        title   : response.msg,
                        text    : 'We will respond as soon as possible.',
                        showConfirmButton: true,
                    });
                    document.getElementById("form-registration").reset();
                } else {
                    Swal.fire({
                        type    : 'error',
                        title   : response.msg,
                        text    : 'Something went wrong please try again.',
                        showConfirmButton: true,
                    });
                }
            },
            error       : function (jqXHR, exception) {
                showError(jqXHR, exception);
            }
        });
        return false;
    });

    function showError(xhr, exception) {
        let msg = '';

        if (xhr.status === 0)
            msg = 'Not connect.\n Verify Network.';
        else if (xhr.status == 404)
            msg = 'Requested page not found. [404]';
        else if (xhr.status == 500)
            msg = 'Internal Server Error [500].';
        else if (exception === 'parsererror')
            msg = 'Requested JSON parse failed.';
        else if (exception === 'timeout')
            msg = 'Time out error.';
        else if (exception === 'abort')
            msg = 'Ajax request aborted.';
        else
            msg = 'Uncaught Error.\n' + xhr.responseText;

        Swal.fire({
            type: 'error',
            title: msg
        });
    }
});
</script>

<script>
$(document).ready(function(){
    $('#form-event #btnSave').click(function() {
        $.ajax({
            type 	    : 'POST',
            dataType	: 'JSON',
            data        : $('#form-event').serialize(),
            url			: '<?= site_url('/event')?>',
            beforeSend  : function(){
                if($('input').val().length == 0) {
                    Swal.fire({
                        type    : 'error',
                        title   : 'Error',
                        text    : 'You must complete all required fields.',
                        showConfirmButton: true
                    });
                    return false;
                };
            },
            success     : function (response) {
                if(response.success) {
                    Swal.fire({
                        type    : 'success',
                        title   : response.msg,
                        text    : 'We will respond as soon as possible.',
                        showConfirmButton: true,
                    });
                    document.getElementById("form-event").reset();
                } else {
                    Swal.fire({
                        type    : 'error',
                        title   : response.msg,
                        text    : 'Something went wrong please try again.',
                        showConfirmButton: true,
                    });
                }
            },
            error       : function (jqXHR, exception) {
                showError(jqXHR, exception);
            }
        });
        return false;
    });

    function showError(xhr, exception) {
        let msg = '';

        if (xhr.status === 0)
            msg = 'Not connect.\n Verify Network.';
        else if (xhr.status == 404)
            msg = 'Requested page not found. [404]';
        else if (xhr.status == 500)
            msg = 'Internal Server Error [500].';
        else if (exception === 'parsererror')
            msg = 'Requested JSON parse failed.';
        else if (exception === 'timeout')
            msg = 'Time out error.';
        else if (exception === 'abort')
            msg = 'Ajax request aborted.';
        else
            msg = 'Uncaught Error.\n' + xhr.responseText;

        Swal.fire({
            type: 'error',
            title: msg
        });
    }
});
</script>

<script>
    $(function(){
        $(window).scroll(function(){
            if($(window).scrollTop()<=75){
                $(".navbar").removeClass('shadow-sm').removeClass('bg-white')
            } else {
                $(".navbar").addClass('shadow-sm').addClass('bg-white')
            }
        })
    })
</script>