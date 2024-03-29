<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="/style.css" type="text/css" />
<link rel="stylesheet" href="/css/dark.css" type="text/css" />
<link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="/css/animate.css" type="text/css" />
<link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="/css/responsive.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />


<title>Login - Trading | Grupo 360</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<section id="content">
	<div class="content-wrap nopadding">
		<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: #444;"></div>
		<div class="section nobg full-screen nopadding nomargin">
			<div class="container-fluid vertical-middle divcenter clearfix">
				<div class="center">
					<a href="#"><img src="/images/logog80x80.png" alt="Canvas Logo"></a>
				</div>
				<div class="card divcenter noradius noborder" style="max-width: 400px;">
					<div class="card-body" style="padding: 40px;">
						
							<h3>Confirmação de senha.<br><span>Adicione aqui a sua nova senha:</span></h3>
							<div class="col_full">
								<label for="login-form-password">Senha:</label>
								<input type="password" name="password"  id="password" class="form-control not-dark" />
							</div>
							<div class="col_full nobottommargin">
								<button class="button button-3d button-black nomargin"  name="setar" value="setar" id="setar_senha">Salvar</button>
							</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>

<div id="gotoTop" class="icon-angle-up"></div>
<script type="text/javascript">
	$("#setar_senha").click(function(){
	if ($("#password").val() !="") {

		$.post("/matricula/setar",
		{
			senha: $("#password").val(),
			user_token: "<?php echo $user_token;?>"
		},
		function(data, status){
		// alert("Data: " + data.status + "\nStatus: " + status);
			if (data.status ) {
				window.location.href = "/aluno/pagina/"+data.user_token;
			}
		});
	}else{
		alert("Preencha sua senha");
	}

	});
</script>

<script src="/js/jquery.js"></script>
<script src="/js/plugins.js"></script>

<script src="/js/functions.js"></script>
</body>
</html>