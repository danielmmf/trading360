
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Capriatti</title>
    <meta name="google-site-verification" content="" />
    <meta name='yandex-verification' content='' />
    <meta name="msvalidate.01" content="" />
    <meta property="og:site_name" content="Marketplace App">
    <meta property="og:title" content="Marketplace App">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href="/img/favicon.png" rel="shortcut icon" type="image/x-icon">

    <script type="text/javascript" src="/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript" src="/js/jquery.cookie.js"></script>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

            <link rel="stylesheet" href="/css/my.css?x=68" type="text/css" media="screen">
    </head>
<body>


        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container">
                <a href="/" class="brand-logo">Capriatti</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/admin">Log In</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="/admin">Log In</a></li>
                </ul>
            </div>
        </nav>

        
<div class="section no-pad-bot" id="index-banner">
    <div class="container">

        <div class="row">
            <div class="col s12 m6" style="margin: 0 auto; float: none; margin-top: 100px;">

                <input autocomplete="off" type="hidden" name="authenticity_token" value="e2662571441657511f5c0c4febd36c81">

                <div class="card ">
                    <div class="card-content black-text">
                        <span class="card-title">Log In</span>
                        <p style="display: none"></p>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" type="text" class="validate valid" name="user_username" value="">
                                <label for="username" class="active">email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate valid" name="user_password" value="">
                                <label for="password" class="active">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="waves-effect waves-light btn" id="btnEnviarDados">Log In</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="/js/init.js"></script>
<script type="text/javascript">

$(document).on('click', "#btnEnviarDados", function () { 

    $.post( "/login", { email: "John", senha: "2pm" })
      .done(function( data ) {
        console.log(data);
        console.log(data.response);
        if(data.response ===1)
          window.location.replace("admin");
      });
});



</script>
</body>
</html>