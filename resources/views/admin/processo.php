<?php include "header.php" ?>
	
		<!-- END HEADER -->

		<!-- #NAVIGATION -->
		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<?php include "menu.php" ?>
		
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Miscellaneous</li><li>Invoice</li>
				</ol>
				<!-- end breadcrumb -->

				<!-- You can also add more buttons to the
				ribbon for further usability

				Example below:

				<span class="ribbon-button-alignment pull-right">
				<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
				<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
				<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
				</span> -->

			</div>
			<!-- END RIBBON -->

			<!-- MAIN CONTENT -->
			<div id="content">

				<!-- widget grid -->
				<section id="widget-grid" class="">
				
					<!-- row -->
					<div class="row">
				
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget well jarviswidget-color-darken" id="wid-id-0" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-colorbutton="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
				
								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"
				
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-barcode"></i> </span>
									<h2>Item #44761 </h2>
				
								</header>
				
								<!-- widget div-->
								<div>
				
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
				
									</div>
									<!-- end widget edit box -->
				
									<!-- widget content -->
									<div class="widget-body no-padding">
				
										<div class="widget-body-toolbar">
				
											<div class="row">
				
												<div class="col-sm-4">
				
													<div class="input-group">
														<input class="form-control" type="text" placeholder="Buscar processo...">
														<div class="input-group-btn">
															<button class="btn btn-default" type="button">
																<i class="fa fa-search"></i> Buscar
															</button>
														</div>
													</div>
												</div>
				
												<div class="col-sm-8 text-align-right">
				
													<!--div class="btn-group">
														<a href="javascript:void(0)" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> Edit </a>
													</div-->
				
													
													<a data-toggle="modal" href="#myModal" class="btn btn-success btn-md pull-right header-btn hidden-mobile"><i class="fa fa-plus"></i> Novo Pedido</a>
		
				
												</div>
				
											</div>
				
										</div>
				
										<div class="padding-10">
											<br>
											<div class="pull-left">Processo #
												<strong><?php echo $processo['numero_processo']; ?></strong>
				
												<address>
													<br>
													<strong><?php echo $processo['vara']; ?></strong>
													<br>
													<?php echo $processo['comarca']; ?>
													<br>
													<?php echo $processo['estado']; ?>
													<br>
													<abbr title="Phone">P:</abbr> (123) 456-7890
												</address>
											</div>
											<div class="pull-right">
												<h1 class="font-400"><?php echo $processo['reu']; ?></h1>
											</div>
											<div class="clearfix"></div>
											<br>
											<br>
											<div class="row">
												<div class="col-sm-9">
												</div>
												<div class="col-sm-3">
													<div>
														<div>
															<strong>Numero do processo :</strong>
															<span class="pull-right"> <?php echo $processo['numero_processo']; ?> </span>
														</div>
				
													</div>
													<div>
														<div class="font-md">
															<strong>Data de distribuição :</strong>
															<span class="pull-right"> <i class="fa fa-calendar"></i> <?php echo $processo['data_distribuicao']; ?> </span>
														</div>
				
													</div>
													<br>
													<div class="well well-sm  bg-color-darken txt-color-white no-border">
														<div class="fa-lg">
															Valor Causa :
															<span class="pull-right"> R$ <?php echo $processo['valor_causa']; ?> </span>
														</div>
				
													</div>
													<br>
													<br>
												</div>
											</div>
											<table class="table table-hover">
												<thead>
													<tr>
														<th>Pedido</th>
														<th>Status</th>
														<th>Criado</th>
														<th>Valor Risco</th>
													</tr>
												</thead>
												<tbody>
													<?php 

													$total = 0;
													foreach ($pedidos as $pedido) {
														$linha = sprintf('<tr>
														<td><a href="javascript:void(0);">%s</a></td>
														<td>%s</td>
														<td>%s</td>
														<td>R$ %s</td>
													</tr>', $pedido->tipo,$pedido->status,$pedido->created_at,$pedido->valor_risco);
														echo $linha;
														$total+=$pedido->valor_risco;

													}
													?>
													
													
													<tr>
														<td colspan="3">Total</td>
														<td><strong>R$ <?php echo $total+$processo['valor_causa']; ?></strong></td>
													</tr>
													
												</tbody>
											</table>
				
											<div class="invoice-footer">
				
											
												
												<div class="row">
													<div class="col-sm-12">
														<p class="note">**To avoid any excess penalty charges, please make payments within 30 days of the due date. There will be a 2% interest charge per month on all late invoices.</p>
													</div>
												</div>
				
											</div>
										</div>
				
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				
						</article>
						<!-- WIDGET END -->
				
					</div>
				
					<!-- end row -->
				
				</section>
				<!-- end widget grid -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		<!-- PAGE FOOTER -->
		<div class="page-footer">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<span class="txt-color-white">SmartAdmin 1.9.0 <span class="hidden-xs"> - Web Application Framework</span> © 2017-2019</span>
				</div>

				<div class="col-xs-6 col-sm-6 text-right hidden-xs">
					<div class="txt-color-white inline-block">
						<i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
						<div class="btn-group dropup">
							<button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
								<i class="fa fa-link"></i> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu pull-right text-left">
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Download Progress</p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-success" style="width: 50%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Server Load</p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-success" style="width: 20%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<button class="btn btn-block btn-default">refresh</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE FOOTER -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
		<div id="shortcut">
			<ul>
				<li>
					<a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
				</li>
				<li>
					<a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
				</li>
				<li>
					<a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
				</li>
				<li>
					<a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
				</li>
				<li>
					<a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
				</li>
				<li>
					<a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
				</li>
			</ul>
		</div>
		<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">
					Novo Pedido
				</h4>
			</div>
			<div class="modal-body no-padding">

				<form id="form-pedido" class="smart-form" method="POST" action="/pedido">

							<fieldset>
								<section>
									<div class="row">
										<label class="label col col-2">Pedido</label>
										<div class="col col-10">
											<label class="select"> <i class="icon-append fa fa-user"></i>
												<select name="tipo">
													<option value="0" selected="" disabled="">Selecione</option>
													<option>Horas Extras</option>
													<option>Dano Moral</option>
													<option>Dano Material</option>
													<option>Outros</option>
												</select>
											</label>
										</div>
									</div>
								</section>

								<section>
									<div class="row">
										<label class="label col col-2">Valor Risco Provavel</label>
										<div class="col col-10">
											<label class="input"> <i class="icon-append fa fa-lock"></i>
												<input type="text" name="valor_risco">
												<input type="hidden" name="processo_id" value="<?php echo $processo_id;?>">
											</label>
											
										</div>
									</div>
								</section>

								<section>
									<div class="row">
										<label class="label col col-2">Status</label>
										<div class="col col-10">
											<label class="select"> <i class="icon-append fa fa-user"></i>
												<select name="status">
													<option value="0" selected="" disabled="">Selecione</option>
													<option>Pendente</option>
													<option>Ativo</option>
													<option>Aguardando</option>
													<option>Outros</option>
												</select>
											</label>
										</div>
									</div>
								</section>
							</fieldset>
							
							<footer>
								<button type="submit" class="btn btn-primary">
									Adicionar pedido
								</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>

							</footer>
						</form>						
						

			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		<!-- END SHORTCUT AREA -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="/js/plugin/pace/pace.min.js"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="/js/libs/jquery-3.2.1.min.js"><\/script>');
			}
		</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="/js/libs/jquery-ui.min.js"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="/js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<script src="/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

		<!-- BOOTSTRAP JS -->
		<script src="/js/bootstrap/bootstrap.min.js"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="/js/notification/SmartNotification.min.js"></script>

		<!-- JARVIS WIDGETS -->
		<script src="/js/smartwidgets/jarvis.widget.min.js"></script>

		<!-- EASY PIE CHARTS -->
		<script src="/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

		<!-- SPARKLINES -->
		<script src="/js/plugin/sparkline/jquery.sparkline.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="/js/plugin/jquery-validate/jquery.validate.min.js"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="/js/plugin/select2/select2.min.js"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

		<!-- browser msie issue fix -->
		<script src="/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

		<!-- FastClick: For mobile devices -->
		<script src="/js/plugin/fastclick/fastclick.min.js"></script>

		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- Demo purpose only -->
		<script src="/js/demo.min.js"></script>

		<!-- MAIN APP JS FILE -->
		<script src="/js/app.min.js"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		<script src="/js/speech/voicecommand.min.js"></script>

		<!-- SmartChat UI : plugin -->
		<script src="/js/smart-chat-ui/smart.chat.ui.min.js"></script>
		<script src="/js/smart-chat-ui/smart.chat.manager.min.js"></script>

		<!-- PAGE RELATED PLUGIN(S) 
		<script src="..."></script>-->

		<script>
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();


			$("#form-pedido").submit(function(e) {

			    e.preventDefault(); // avoid to execute the actual submit of the form.

			    var form = $(this);
			    var url = form.attr('action');

			    $.ajax({
			           type: "POST",
			           url: url,
			           data: form.serialize(), // serializes the form's elements.
			           success : function ( json )
			            {

			                console.log(json);
			                $("#success_log").removeClass("hide");
			                $('#success_msgs').html("Processo foi ssalvo com sucesso numero #"+json.numero_processo+"<br>Para ver o procsso clique <a href=/admin/processo/"+json.id+">aqui</a>");
			                location.reload();
			            },
			            error: function( json )
			            {
			                if(json.status === 422) {
			                    var errors = json.responseJSON;
			                    $("#error_log").show();
			                    $("#error_log").removeClass("hide");
			                    $('#log_msgs').html("");
			                    var resposta = "";
			                    $.each(json.responseJSON, function (key, value) {
			                    	resposta +=key+" : "+value+"\n";
			                        $('.'+key+'-error').html(value);
			                        $('#log_msgs').html($('#log_msgs').html()+"<strong>"+key+" </strong> : "+value+"<br>");
			                        console.log(key, value);

			                    });
			                    alert(resposta);
			                } else {
			                    // Error
			                    // Incorrect credentials
			                    alert('Incorrect credentials. Please try again.')
			                }
			            }
			         });


			});

		})

		</script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script>
			var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-43548732-6']);
				_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>

	</body>

</html>