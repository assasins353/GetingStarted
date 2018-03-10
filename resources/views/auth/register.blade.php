
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="fr"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>ProTournoi</title>
<meta name="description" content="">
<meta name="author" content="ProTournoi">
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta property="fb:page_id" content="645959818772006">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
<link rel="shortcut icon" href="/img/favicon.png">
<link rel="apple-touch-icon" href="/img/icon57.png" sizes="57x57">
<link rel="apple-touch-icon" href="/img/icon72.png" sizes="72x72">
<link rel="apple-touch-icon" href="/img/icon76.png" sizes="76x76">
<link rel="apple-touch-icon" href="/img/icon114.png" sizes="114x114">
<link rel="apple-touch-icon" href="/img/icon120.png" sizes="120x120">
<link rel="apple-touch-icon" href="/img/icon144.png" sizes="144x144">
<link rel="apple-touch-icon" href="/img/icon152.png" sizes="152x152">
<link rel="apple-touch-icon" href="/img/icon180.png" sizes="180x180">
<meta name="theme-color" content="#ea503d">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<link rel="stylesheet" href="css/register.css" />

</head>
<body>


<img src="img/jo_algerie.png" alt="Login Full Background" class="full-bg animation-pulseSlow">

<div id="login-container" class="animation-fadeIn">

<div class="login-title text-center">
<h1>
<a href="/" title="ProTournoi"><img src="img/olympia2.png" style="height:50px ; " alt="ProTournoi logo"></a>
<br>
<small>
Créer un nouveau compte
</small>
</h1>
</div>


<div class="block push-bit">
<form action="{{ route('register') }}" method="POST" class="form-horizontal form-bordered form-control-borderless">
     @csrf
<div class="form-group">
<div class="col-xs-6">
<div class="input-group">
    
<span class="input-group-addon"><i class="fas fa-users"></i></span>
<input type="text" id="fos_user_registration_form_firstName" name="name" required="required" maxlength="255" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nom" class="form-control" value="{{ old('name') }}" required autofocus />
@if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
</div>
</div>
<div class="col-xs-6">
<input type="text" id="fos_user_registration_form_lastName" name="prenom" required="required" maxlength="255" class="form-control" placeholder="Prenom" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus />
</div>
</div>
<div class="form-group ">
<div class="col-xs-12">
<div class="input-group">
<span class="input-group-addon"><i class="fas fa-envelope"></i></span>
<input type="email" id="fos_user_registration_form_email" name="email" required="required" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Adresse e-mail" class="form-control" value="{{ old('email') }}" required />
 @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
</div>
</div>
</div>
<div class="form-group ">
<div class="col-xs-12">
<div class="input-group">
<span class="input-group-addon"><i class="fas fa-asterisk"></i></span>
<input type="password" id="fos_user_registration_form_plainPassword_first" name="password" required="required" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Mot de passe" class="form-control" required/>
 @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
</div>
</div>
</div>
<div class="form-group ">
<div class="col-xs-12">
<div class="input-group">
<span class="input-group-addon"><i class="fas fa-asterisk"></i></span>
<input type="password" id="fos_user_registration_form_plainPassword_second" name="password_confirmation" required="required" class="form-control" placeholder="Confirmer le mot de passe" class="form-control" required />

</div>
</div>
</div>
<div class="form-group  ">
<div class="row">
<div class="col-xs-11 col-xs-offset-1">
<input type="checkbox" id="fos_user_registration_form_acceptCGU" name="fos_user_registration_form[acceptCGU]" required="required" class="check" {{ old('remember') ? 'checked' : '' }}>
<label for="fos_user_registration_form_acceptCGU">J'accepte les <a href='/cgu' target='_blank'>conditions générales d'utilisation</a></label>
</div>
</div>
</div>
<div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>

<input type="hidden" id="fos_user_registration_form__token" name="fos_user_registration_form[_token]" class="form-control" value="MymalgzFClHCOMzuHKvg9lBpt2wGo7YYf1-YnJi2PVg" />
<div class="form-group form-actions">
<div class="col-xs-12">
<button type="submit" class="btn btn-block btn-primary">Créer mon compte</button>
<a href="/connect/facebook" class="btn btn-block btn-social btn-facebook" style="background-color:none"><i class="fab fa-facebook-square"></i> Créer mon compte avec Facebook</a>
</div>

<div class="col-xs-12">
   
<a href="/connect/facebook" class="btn btn-block btn-social btn-google" style="background-color:none"><i class="fab fa-google-plus-square" ></i> Créer mon compte avec Google</a>
</div>

</div>
<div class="form-group">
<div class="col-xs-12 text-center">
<a href="/login"><small>J&#039;ai déjà un compte, me connecter</small></a>
</div>
</div>
</form>
</div>
</div>
</body>
<script src="/js/compiled/all.js"></script>
<script>
            $('#edit-profile-button').click(function()
            {
                var editProfilePath = '/profile/edit';
                $.get(editProfilePath, function(data)
                {
                    $("#edit-profile-container").html(data);
                    $('#modal-user-settings').modal('show');
                    $('[data-toggle="tabs"] a, .enable-tabs a').click(function(e){ e.preventDefault(); $(this).tab('show'); });
                });
            });
        </script>
<script>
            function submitEditProfile (e, dom)
            {
                var postData = new FormData(dom[0]);
                var formURL = dom.attr("action");
                $.ajax(
                {
                    url : formURL,
                    type: "POST",
                    data : postData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(data, textStatus, jqXHR) 
                    {
                        $('#modal-user-settings').modal('hide');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                
                        if (data.url)
                        {
                            window.location.assign(data.url);
                        }
                        else
                        {
                            $('#modal-user-settings').replaceWith(data);
                            $('[data-toggle="tabs"] a, .enable-tabs a').click(function(e){ e.preventDefault(); $(this).tab('show'); });
                            $('.nav-tabs a[href=#'+dom.attr('form_name')+']').tab('show');
                            $('#modal-user-settings').modal('show');
                        }
                    },
                });
                e.preventDefault(); //STOP default action
                return false;
            }
            $("body").on("submit", ".edit_profile_form", function(e) { submitEditProfile(e, $(this)); });
        </script>
<script>
            $("#search-form").submit(function(event) {
                event.preventDefault();
                request = $("#top-search").val();
                baseURL = "/app/recherche/TOREPLACE";
                window.location.href = baseURL.replace("TOREPLACE", request);
            });
        </script>
</html>