<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="/style.css" type="text/css" />
<link rel="stylesheet" href="/css/dark.css" type="text/css" />
<link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="/css/animate.css" type="text/css" />
<link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="/css/responsive.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Area do Aluno | Trading 360</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<header id="header" class="full-header">
	<div id="header-wrap">
		<div class="container clearfix">
			<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

			<div id="logo">
				<a href="landing" class="standard-logo" data-dark-logo="/images/logog360.png"><img src="/images/logog360.png" alt="Canvas Logo"></a>
				<a href="landing" class="retina-logo" data-dark-logo="/images/logog80x80.png"><img src="/images/logog80x80.png" alt="Canvas Logo"></a>
			</div>
			<div id="top-account" class="dropdown">
				<a href="#" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i></a>
				<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
					<a class="dropdown-item tleft" href="#">Perfil</a>
					<a class="dropdown-item tleft" href="#">Notificações <span class="badge badge-pill badge-secondary fright" style="margin-top: 3px;">5</span></a>
					<a class="dropdown-item tleft" href="#">Configurações</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item tleft" href="#">SAIR <i class="icon-signout"></i></a>
				</ul>
			</div>

		<!-- sem nav-->

		</div>
	</div>
</header>

<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row clearfix">
				<div class="col-md-9">
					<img src="/images/icons/avatar.jpg" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">
					<div class="heading-block noborder">
						<h3><?php echo $usuario_name;?></h3>
						<span><!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
						<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
						Valor do Curso : R$ <span id="valor_atual">2000,00</span>&nbsp;<button class="btn btn-sm btn-secondary" id="desconto">Desconto</button>
						<form target="pagseguro" action="https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx" method="post">
						<input type="hidden" name="email_cobranca" value="cursodetrading@gr360.com.br">
						<input type="hidden" name="tipo" value="CP">
						<input type="hidden" name="moeda" value="BRL">
						<input type="hidden" name="item_id_1" value="12">
						<input type="hidden" name="item_descr_1" value="Curso de Trading">
						<input type="hidden" name="item_quant_1" value="1">
						<input type="hidden" name="item_valor_1" id="item_valor_1" value="200000">
						<input type="hidden" name="item_peso_1" value="0300">
						<input type="hidden" name="reference" value="<?php echo $user_token.time();?>">
						<input name="senderName" type="hidden" value="<?php echo $usuario_name;?>">  
				        <input name="senderPhone" type="hidden" value="<?php echo $usuario_telefone;?>">  
				        <input name="senderEmail" type="hidden" value="<?php echo $usuario_email;?>">  
						<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!">
						</form>
						<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
					</div>
					<div class="clear"></div>
					<div class="row clearfix">
						<div class="col-lg-12">
							<div class="tabs tabs-alt clearfix" id="tabs-profile">
								<ul class="tab-nav clearfix">
									<li><a href="#tab-feeds"><i class="icon-rss2"></i> Grade</a></li>
									<li><a href="#tab-posts"><i class="icon-pencil2"></i> Aulas</a></li>
									<li><a href="#tab-replies"><i class="icon-reply"></i> Perguntas</a></li>
								</ul>
								<div class="tab-container">
									<div class="tab-content clearfix" id="tab-feeds">
										<p class="">Aqui você consulta as datas, aulas e atividades que você tem disponível. <br> Bons estudos!</p>
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th>Data</th>
													<th>Atividade</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<code>14/10/2019</code>
													</td>
													<td>Aula presencial</td>
												</tr>
												<tr>
													<td>
														<code>15/10/19</code>
													</td>
													<td>Aula presencial</td>
												</tr>
												<tr>
													<td>
														<code>16/10/19</code>
													</td>
													<td>Online - TENDÊNCIA: breakout rettangolo/bandeiras/triângulo</td>
												</tr>
												<tr>
													<td>
														<code>17/10/19</code>
													</td>
													<td>Online - Padrão N.1, padrão N.2 + resumo padrão grafico2.</td>
												</tr>
												<tr>
													<td>
														<code>18/10/19</code>
													</td>
													<td>Online - FIBONACCI (2ª técnica de trabalho) </td>
												</tr>
												<tr>
													<td>
														<code>21/10/19</code>
													</td>
													<td>Online - Padrão Harmônico </td>
												</tr>
												<tr>
													<td>
														<code>22/10/19</code>
													</td>
													<td>Online - INDICADORES DE TENDÊNCIA </td>
												</tr>
												<tr>
													<td>
														<code>23/10/19</code>
													</td>
													<td>Online - Indicadores ichimoku, as ondas de Elliot e Wolfe.</td>
												</tr>
												<tr>
													<td>
														<code>24/10/19</code>
													</td>
													<td>Aula presencial.</td>
												</tr>
												<tr>
													<td>
														<code>25/10/19</code>
													</td>
													<td>Aula presencial.</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="tab-content clearfix" id="tab-posts">
										<div class="row topmargin-sm clearfix">
											<div class="col-12 bottommargin-sm">
												<div class="ipost clearfix">
													<div class="row clearfix">
														<div class="col-md-4">
															<div class="entry-image">
																<a href="/images/portfolio/full/17.jpg" data-lightbox="image"><img class="image_fade" src="/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
															</div>
														</div>
														<div class="col-md-8">
															<div class="entry-title">
																<h3><a href="blog-single.html">This is a Standard post with a Preview Image</a></h3>
															</div>
															<ul class="entry-meta clearfix">
																<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
																<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
																<li><a href="#"><i class="icon-camera-retro"></i></a></li>
															</ul>
															<div class="entry-content">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 bottommargin-sm">
												<div class="ipost clearfix">
													<div class="row clearfix">
														<div class="col-md-4">
															<div class="entry-image">
																<iframe src="http://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
															</div>
														</div>
														<div class="col-md-8">
															<div class="entry-title">
																<h3><a href="blog-single.html">This is a Standard post with a Embed Video</a></h3>
															</div>
															<ul class="entry-meta clearfix">
																<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
																<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
																<li><a href="#"><i class="icon-camera-retro"></i></a></li>
															</ul>
															<div class="entry-content">
															 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 bottommargin-sm">
												<div class="ipost clearfix">
													<div class="row clearfix">
														<div class="col-md-4">
															<div class="entry-image">
																<div class="fslider" data-arrows="false">
																	<div class="flexslider">
																		<div class="slider-wrap">
																			<div class="slide"><img class="image_fade" src="/images/blog/grid/10.jpg" alt="Standard Post with Gallery"></div>
																			<div class="slide"><img class="image_fade" src="/images/blog/grid/20.jpg" alt="Standard Post with Gallery"></div>
																			<div class="slide"><img class="image_fade" src="/images/blog/grid/21.jpg" alt="Standard Post with Gallery"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-8">
															<div class="entry-title">
																<h3><a href="blog-single.html">This is a Standard post with a Slider Gallery</a></h3>
															</div>
															<ul class="entry-meta clearfix">
																<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
																<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
																<li><a href="#"><i class="icon-camera-retro"></i></a></li>
															</ul>
															<div class="entry-content">
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-content clearfix" id="tab-replies">
										<div class="clear topmargin-sm"></div>
											<ol class="commentlist noborder nomargin nopadding clearfix">
												<li class="comment even thread-even depth-1" id="li-comment-1">
													<div id="comment-1" class="comment-wrap clearfix">
														<div class="comment-meta">
															<div class="comment-author vcard">
																<span class="comment-avatar clearfix">
																<img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
															</div>
														</div>
														<div class="comment-content clearfix">
															<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>
															<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
															<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
														</div>
															<div class="clear"></div>
													</div>
													<ul class='children'>
														<li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">
															<div id="comment-3" class="comment-wrap clearfix">
																<div class="comment-meta">
																	<div class="comment-author vcard">
																		<span class="comment-avatar clearfix">
																		<img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40' /></span>
																	</div>
																</div>
																<div class="comment-content clearfix">
																	<div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>
																	<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
																	<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
																</div>
																<div class="clear"></div>
															</div>
														</li>
													</ul>
												</li>
												<li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">
													<div class="comment-wrap clearfix">
														<div class="comment-meta">
															<div class="comment-author vcard">
																<span class="comment-avatar clearfix">
																<img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' /></span>
															</div>
														</div>
														<div class="comment-content clearfix">
															<div class="comment-author"><a href='http://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>
															<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
															<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
														</div>
														<div class="clear"></div>
													</div>
												</li>
											</ol>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="w-100 line d-block d-md-none"></div>
				<div class="col-md-3 clearfix">

					<div class="fancy-title topmargin title-border">
						<h4>Notas</h4>
					</div>
					<p>As aulas presenciais serão 19h dos respectivos dias marcados.</p>
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
						<img src="/images/logo120x120.png" alt="" class="footer-logo">
						<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
							<address>
							<strong>VISITE-NOS:</strong><br>
							Avenida Paulista 1009 5º Andar<br>
							</address>
							<abbr title="Phone Number"><strong>CONTATO:</strong></abbr> (11) 3266-2986<br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d54535b527d5e5c534b5c4e135e5250">cursodetrading@gr360.com.br</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col_one_third col_last">
				<div class="widget clearfix" style="margin-bottom: -20px;">
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
				</div>
				<div class="widget clearfix" style="margin-bottom: -20px;">
					<div class="row">
						<div class="col-lg-6 clearfix bottommargin-sm">
							<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a href="#"><small style="display: block; margin-top: 3px;"><strong>Nos curta</strong><br>no Facebook</small></a>
						</div>
						<div class="col-lg-6 clearfix">
							<a href="#" class="social-icon si-dark si-colored si-linkedin nobottommargin" style="margin-right: 10px;">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
							<a href="#"><small style="display: block; margin-top: 3px;"><strong>Nos encontre</strong><br>no Linkedin</small></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script src="/js/jquery.js"></script>
<script src="/js/plugins.js"></script>

<script src="/js/functions.js"></script>
<script>
		jQuery( "#tabs-profile" ).on( "tabsactivate", function( event, ui ) {
			jQuery( '.flexslider .slide' ).resize();
		});

		$( "#desconto" ).click(function() {
		  alert( "Seu desconto foi aplicado com sucesso !!!" );
		  $("#valor_atual").html("1400,00");
		  $("#item_valor_1").val("140000");
		  $( "#desconto" ).hide();
		});


	</script>
</body>
</html>