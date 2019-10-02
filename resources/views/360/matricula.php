<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />

<link href="/https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="/style.css" type="text/css" />
<link rel="stylesheet" href="/css/dark.css" type="text/css" />
<link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="/css/animate.css" type="text/css" />
<link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />

<link rel="stylesheet" href="/css/components/ion.rangeslider.css" type="text/css" />
<link rel="stylesheet" href="/css/responsive.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="/css/custom.css" type="text/css" />

<title>Faça sua matrícula - Grupo 360</title>
<style>
		.form-group > label.error {
			display: block !important;
			text-transform: none;
		}

		.form-group input.valid ~ label.error,
		.form-group input[type="text"] ~ label.error,
		.form-group input[type="email"] ~ label.error,
		.form-group input[type="number"] ~ label.error,
		.form-group select ~ label.error { display: none !important; }

		.calories-wrap {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		#fitness-form .btn-outline-dark:not(.disabled):not(.active):not(:hover) {
			color: #444;
			background-color: #FFF;
			border-color: #CED4DA;
		}

	</style>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<section id="page-title">
	<div class="container clearfix">
		<h1>Faça sua matrícula</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/land">Home</a></li>
			<li class="breadcrumb-item"><a href="/land">Área do Aluno</a></li>
			<li class="breadcrumb-item active" aria-current="page">Matrícula</li>
		</ol>
	</div>
</section>

<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="form-widget">
				<div class="form-result"></div>
				<div class="row shadow bg-light border">
					<div class="col-lg-4 dark" style="background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.2)), url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80') center center / cover; min-height: 400px;">
						<h3 class="center mt-5">Trading 360</h3>
						<div class="calories-wrap center w-100 px-2">
							<img src="images/services/logo2.png" style="position: relative; top: 0; left: 0; display: block; margin-left: auto; margin-right: auto;" data-animate="fadeInUp" data-delay="100" alt="Logo">
						</div>
					</div>
					<div class="col-lg-8 p-5">
						<form class="row mb-0" action="/api/360/v1/user/add" method="post" enctype="multipart/form-data">
							<div class="form-process"></div>
							<div class="col-12 form-group">
								<div class="row">
									<div class="col-sm-2 col-form-label">
										<label for="fitness-form-name">Nome :</label>
									</div>
									<div class="col-sm-10">
										<input type="text" name="name" id="fitness-form-name" class="form-control required" value="" placeholder="Nome completo">
									</div>
								</div>
							</div>
							<div class="col-12 form-group">
								<div class="row">
									<div class="col-sm-2 col-form-label">
										<label for="fitness-form-email">Email:</label>
									</div>
									<div class="col-sm-10">
										<input type="email" name="email" id="fitness-form-email" class="form-control required" value="" placeholder="Seu Email">
									</div>
								</div>
							</div>
							<div class="col-12 form-group">
								<div class="row">
									<div class="col-sm-2 col-form-label">
										<label for="fitness-form-phone">Telefone:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" name="telefone" id="fitness-form-phone" class="form-control required" value="" placeholder="Seu telefone">
									</div>
								</div>
							</div>
							<div class="col-12 form-group">
								<div class="row">
									<div class="col-sm-2 col-form-label">
										<label for="fitness-form-sex">Genero:</label>
									</div>
									<div class="col-sm-6">
										<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
											<label class="btn btn-outline-dark font-body ls0 nott">
												<input type="radio" class="required form-control" name="genero" id="fitness-form-male" value="Male">Masculino
											</label>
											<label class="btn btn-outline-dark font-body ls0 nott">
												<input type="radio" class="required form-control" name="genero" id="fitness-form-male" value="Female">Feminino
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 form-group">
								<div class="row">
									<div class="col-sm-2 col-form-label">
										<label>Data de Nascimento:</label>
									</div>
									<div class="col-sm-6">
										<input type="text" class="form-control dobpicker required valid" name="data_nascimento" id="jobs-application-date-of-birth" value="" placeholder="MM/DD/YYYY" data-date-end-date="-18y">
									</div>
								</div>
							</div>
							<div class="col-12 form-group">
								<div class="row">
									<div class="col-sm-2 col-form-label">
										<label>RG:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" name="rg" id="fitness-form-phone" class="form-control required" value="" placeholder="Seu RG">
									</div>
								</div>
							</div>
							<div class="col-12 form-group">
								<div class="row">
									<div class="col-sm-2 col-form-label">
										<label>CPF:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" name="cpf" id="fitness-form-phone" class="form-control required" value="" placeholder="CPF apenas números">
									</div>
								</div>
							</div>
							<div class="col-12 form-group">
								<div class="row">
									<div class="col-sm-2 col-form-label">
										<label>Escolaridade:</label>
									</div>
									<div class="col-sm-10">
										<select class="form-control required" name="escolaridade" id="jobs-application-experience">
											<option value="">-- Selecione --</option>
											<option value="Fundamental Completo">Fundamental Completo</option>
											<option value="Ensino Médio">Ensino Médio</option>
											<option value="Superior Completo">Superior Completo</option>
											<option value="Pós-graduação / Doutorado / Mestrado">Pós-graduação / Doutorado / Mestrado</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-12 hidden">
								<input type="text" id="fitness-form-botcheck" name="fitness-form-botcheck" value="" />
								<input type="hidden" name="group_id" value="3" />
								<input type="hidden" name="logado" value="0" />
							</div>
							<div class="col-12 d-flex justify-content-end align-items-center">
								<button type="submit" name="fitness-form-submit" class="btn btn-success ml-2">Salvar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer id="footer" class="dark">
	<div class="container">
		<div class="footer-widgets-wrap clearfix">
			<div class="col_two_third">
				<div class="col_one_third">
					<div class="widget clearfix">
						<img src="images/logo120x120.png" alt="" class="footer-logo">
						<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
							<address>
							<strong>VISITE-NOS:</strong><br>
							Avenida Paulista 1009 5º Andar<br>
							</address>
							<abbr title="Phone Number"><strong>CONTATO:</strong></abbr> (11) 3266-2986<br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="//cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d54535b527d5e5c534b5c4e135e5250">cursodetrading@gr360.com.br</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col_one_third col_last">
				<!-- div class="widget clearfix" style="margin-bottom: -20px;">
					<div class="row">
						<div class="col-lg-6 bottommargin-sm">
							<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
							<h5 class="nobottommargin">Total de Inscritos</h5>
						</div>
						<div class="col-lg-6 bottommargin-sm">
							<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
							<h5 class="nobottommargin">Total de Aulas</h5>
						</div>
					</div>
				</div -->
				<!--div class="widget clearfix" style="margin-bottom: -20px;">
					<div class="row">
						<div class="col-lg-6 clearfix bottommargin-sm">
							<a href="/#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a href="/#"><small style="display: block; margin-top: 3px;"><strong>Nos curta</strong><br>no Facebook</small></a>
						</div>
						<div class="col-lg-6 clearfix">
							<a href="/#" class="social-icon si-dark si-colored si-linkedin nobottommargin" style="margin-right: 10px;">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
							<a href="/#"><small style="display: block; margin-top: 3px;"><strong>Nos encontre</strong><br>no Linkedin</small></a>
						</div>
					</div>
				</div -->
			</div>
		</div>
	</div>
</footer>
</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>

<script src="js/components/rangeslider.min.js"></script>

<script src="js/functions.js"></script>
<script>
		jQuery(document).ready( function(){
			var totalAge = '',
				totalWeight = '',
				totalHeight = '',
				totalActivity = '',
				elementAge = $("#fitness-form-age"),
				elementWeight = $("#fitness-form-weight"),
				elementHeight = $("#fitness-form-height"),
				elementActivity = $("#fitness-form-activity"),
				elementCalories = $("#fitness-form-calories"),
				caloriesCount = $("#calories-count");

			elementAge.on( 'change', function(){
				totalAge = $(this).prop('value');
				calculateCalories( totalAge, totalWeight, totalHeight, totalActivity );
			});

			elementWeight.on( 'change', function(){
				totalWeight = $(this).prop('value');
				calculateCalories( totalAge, totalWeight, totalHeight, totalActivity );
			});

			elementHeight.on( 'change', function(){
				totalHeight = $(this).prop('value');
				calculateCalories( totalAge, totalWeight, totalHeight, totalActivity );
			});

			elementActivity.ionRangeSlider({
				min: 0,
				max: 7,
				from: 0,
				step: 1,
				postfix: " days/Week",
				onStart: function(data){
					totalActivity = data.from;
				}
			});

			elementActivity.on( 'change', function(){
				totalActivity = $(this).prop('value');
				calculateCalories( totalAge, totalWeight, totalHeight, totalActivity );
			});

			calculateCalories( totalAge, totalWeight, totalHeight, totalActivity );

			function calculateCalories( age, weight, height, activity ) {
				var caloriesValue = 66 + ( 13.75 * Number(weight) ) + ( 5 * Number(height) ) - ( 6.75 * Number(age) ) + ( 200 * Number(activity) );
				if( caloriesCount.is(':empty') ) {
					caloriesCount.html( '0.0' );
				}
				jQuery("#calories-trigger").on( 'click', function(e){
					caloriesCount.html( caloriesValue );
					elementCalories.val( caloriesValue ).change();
					alert("chegamos aqui");
					e.preventDefault();
				});
			}
		});
	</script>
</body>
</html>