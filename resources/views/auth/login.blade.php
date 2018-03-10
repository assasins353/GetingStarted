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
<link rel="stylesheet" href="/css/login.css" />
</head>
<body>


<img src="/img/jo_algerie.png" alt="Login Full Background" class="full-bg animation-pulseSlow">

<div id="login-container" class="animation-fadeIn">

<div class="login-title text-center">
<h1>
<a href="/" title="ProTournoi"><img src="/img/olympia2.png" style="height:50px ; " alt="ProTournoi logo"></a>
<br>
<small>
User Login
</small>
</h1>
</div>

<div class="block push-bit">

<form action="{{ route('login') }}" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
    @csrf

<input type="hidden" name="_csrf_token" value="I7PJlEs6jKU8HvJTT7WC_a54hhD883ZxyvQqI0zkFHA" />
<div class="col-xs-12">
</div>
<div class="form-group">
<div class="col-xs-12">
<div class="input-group">
<span class="input-group-addon{{ $errors->has('email') ? ' is-invalid' : '' }}"><i class="fas fa-envelope"></i></span>
<input type="text" id="login-email" name="email" class="form-control input-lg" placeholder="Adresse e-mail" value="{{ old('email') }}" required autofocus>
@if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
</div>
</div>
</div>

                        <div class="form-group">
<div class="col-xs-12">
<div class="input-group">
<span class="input-group-addon"><i class="fas fa-asterisk"></i></span>
<input type="password" id="login-password" name="password" class="form-control input-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Mot de passe" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
</div>
</div>
</div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 text-right">
<button type="submit" class="btn btn-block btn-primary">Se connecter</button>
<a href="/connect/facebook" class="btn btn-block btn-social btn-facebook" style="background-color:none"><i class="fab fa-facebook-square"></i> Se connecter avec Facebook</a>
</div>

<a href="/connect/facebook" class="btn btn-block btn-social btn-google" style="background-color:none"><i class="fab fa-google-plus-square" ></i> Créer mon compte avec Google</a>



<div class="form-group">
<div class="col-xs-12 text-center">
<a href="{{ route('password.request') }}" id="link-reminder-login" class="forget" ><small>J&#039;ai oublié mon mot de passe</small></a> -
<a href="{{ route('register') }}" id="link-register-login " class="recuperer"><small>Créer un compte utilisateur</small></a>
</div>
</div>
</div>
</form>

</div>
</div>
</div>
</body>
<script src="/js/login.j"></script>
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