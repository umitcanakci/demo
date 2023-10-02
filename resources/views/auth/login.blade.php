@extends('layouts.loginapp')


@section('content')

<style>

#anywhere-home{
	padding-top: 5%;
}
    
    
body{
	margin:0;
	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:690px;
	position:relative;
	background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}

    
</style>

<div class="login-wrap" >

	<div class="login-html">
	    <img class="logo" src="{{ asset('xx/assets/images/logo/eduglobal-logo-white.png') }}" alt="EduGlobal" style="max-width:300px;top:-57px;position: relative;">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">GİRİŞ YAP</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">KAYIT OL</label>
		
		<div class="login-form">
			<div class="sign-in-htm">
				<form method="POST" action="{{ route('login') }}">
                        @csrf
					<div class="group">
						<label for="user" class="label">E-posta Adresi</label>
						<input id="user" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label">Şifre</label>
						<input id="pass" type="password" class="input @error('password') is-invalid @enderror" name="password" required class="input" data-type="password">
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span>Beni Hatırla</label>
					</div>
					<div class="group">
						<button type="submit" class="button">Giriş Yap</button>
					</div>
				</form>
				<div class="foot-lnk">
					<a href="#forgot">Şifremi Unuttum</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<br>
			<div id="errors-list" style="color:red;"></div><br>

			<form method="POST" id="handleAjax" action="{{ route('register.post') }}">
				@csrf
				<div class="group">
					<label for="name" class="label">Ad Soyad</label>
					<div class="col-md-6">
						<input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
            	</div>
                
				<div class="group">
					<label for="email" class="label">E-posta Adresi</label>

					<div class="group">
						<input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="row mb-3">
					<label for="phone" class="label">Telefon</label>

					<div class="group">
						<input id="phone" type="index" class="input" name="phone" required autocomplete="phone">
					</div>
				</div>
                        
				<div class="group">
					<label for="password" class="label">Parola</label>

					<div class="group">
						<input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>
				<div class="row mb-3">
					<label for="confirm_password" class="label">Parola Onayı</label>

					<div class="group">
						<input id="confirm_password" type="password" class="input" name="confirm_password" required autocomplete="confirm_password">
					</div>
				</div>

				<div class="row mb-0">
					<div class="col-md-6 offset-md-4">
						<button type="button" class="btn btn-primary">
						</button>
					</div>
				</div>
				<div class="group">
					<input type="button" class="button" id="registerButton" value="Kayıt Ol">
				</div>
				<div class="foot-lnk">
					<label for="tab-1">Bir Hesabın Varmı?</a>
				</div>
			</div>
												
									
				
				
				</div>
			</div>
		</div>
	</div>
</div> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript">// <![CDATA[
   $("#phone").mask("(999) 999 9999");
// ]]&gt;</script>


<script>

  $(function() {
        
      /*------------------------------------------
      --------------------------------------------
      Submit Event
      --------------------------------------------
      --------------------------------------------*/
      $('body').on("click", "#registerButton", function() {
          var e = $('#handleAjax');
  
          $('#registerButton').html("Kaydınız gerçekleştiriliyor...");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  
          $.ajax({
              url: $('#handleAjax').attr('action'),
              data: $('#handleAjax').serialize(),
              type: "POST",
              dataType: 'json',
              success: function (data) {
  
                $('#registerButton').html("Kayıt Ol");
                  
                if (data.status) {
                    
                    $('#popup1').remove().slideUp(400).delay(1000).fadeIn(600);
                    swal("Başarılı!", "Kaydınız oluşturuldu.",  "success");
                }else{
                    $("#errors-list").empty();
                    swal("Hata!", "Bir Hata Oluştu. Lütfen bilgileriniz kontrol ediniz.",  "error");
                    $.each(data.errors, function (key, val) {
                        $("#errors-list").append("<div class='alert alert-danger'>" + val + "</div>");
                    });
                    
                }
             
              }
          });
  
      });
  
    });
  
</script>
         
<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
    
</script>


@endsection


