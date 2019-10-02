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
					<li>Home</li><li>Forms</li><li>Smart Form Elements</li>
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

				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark">
							<i class="fa fa-edit fa-fw "></i> 
								Edição de 
							<span>
								<?php echo $entidade; ?>
							</span>
						</h1>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
						<ul id="sparks" class="">
							<li class="sparks-info">
								<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
								<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
									1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
								<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
								<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12">
						
						<div class="well">
							<button class="close" data-dismiss="alert">
									×
							</button>
							<h1 class="semi-bold">Edição de <?php echo $entidade; ?></h1>
						<p> 
							<strong><?php echo $entidade; ?></strong>
						</p>
						
						
						</div>
				
						
					</div>
				</div>
				
				<!-- widget grid -->
				<section id="widget-grid" class="">
				
					
				
					<!-- START ROW -->
				
					<div class="row">
				
						<!-- NEW COL START -->
						<article class="col-sm-12 col-md-12 col-lg-12">
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
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
									<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
									<h2>Basic Form Elements </h2>
				
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
				
										<form class="smart-form">
											<header>
												Standard Form Header
											</header>
				
											<fieldset>
												
												
											
											 
												<section>
													<label class="label">Nome</label>
													<label class="input">
														<input type="text" maxlength="10">
													</label>
													<div class="note">
														<strong>Maxlength</strong> is automatically added via the "maxlength='#'" attribute
													</div>
												</section>
																				
											
											
											</fieldset>
											

				
											<footer>
												<button type="submit" class="btn btn-primary">
													Submit
												</button>
												<button type="button" class="btn btn-default" onclick="window.history.back();">
													Back
												</button>
											</footer>
										</form>
				
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-8" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
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
									<h2>Administração da Loja</h2>
									<ul class="nav nav-tabs pull-right in">
				
										<li class="active">
				
											<a data-toggle="tab" href="#hb1"> <i class="fa fa-lg fa-arrow-circle-o-down"></i> <span class="hidden-mobile hidden-tablet"> Funcionarios </span> </a>
				
										</li>
				
										<li>
											<a data-toggle="tab" href="#hb2"> <i class="fa fa-lg fa-arrow-circle-o-up"></i> <span class="hidden-mobile hidden-tablet"> Catalogo da Loja<span class="label bg-color-blue txt-color-white"> label <i class="fa fa-exclamation"></i> </span> </span> </a>
										</li>
				
									</ul>
								</header>
				
								<!-- widget div-->
								<div>
				
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
				
									</div>
									<!-- end widget edit box -->
				
									<!-- widget content -->
									<div class="widget-body">
				
										<div class="tab-content">
											<div class="tab-pane active" id="hb1">
				
												<div class="tabbable tabs-below">
													<div class="tab-content padding-10">
														<div class="tab-pane active" id="A1">
															<p>
																
																<div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
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
																	<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
																	<h2>Bootstrap Duallist Box </h2>
																	
																</header>
												
																<!-- widget div-->
																<div>
												
																	<!-- widget edit box -->
																	<div class="jarviswidget-editbox">
																		<!-- This area used as dropdown edit box -->
												
																	</div>
																	<!-- end widget edit box -->
												
																	<!-- widget content -->
																	<div class="widget-body">
																		
																		<select multiple="multiple" size="10" name="gerentes" id="initializeDuallistbox">
																			<option value="gerente_{{usuario.id}}" ng-repeat="usuario in todoList.usuarios">{{usuario.name}}</option>
																			<option value="gerente_{{usuario.id}}" ng-repeat="usuario in todoList.gerentes" selected="selected">{{usuario.name}}</option>
																		</select>
												
																	</div>
																	<!-- end widget content -->
												
																</div>
																<!-- end widget div -->
												
															</div>
															</p>
														</div>
														<div class="tab-pane" id="B1">
															<p>
																Caixas/Atendentes
															</p>
														</div>
														<div class="tab-pane" id="C1">
															<p>
																Manutenção
															</p>
														</div>
													</div>
													<ul class="nav nav-tabs">
														<li class="active pull-left">
															<a data-toggle="tab" href="#A1">Gerentes</a>
														</li>
														<li class="pull-right">
															<a data-toggle="tab" href="#B1">Atendentes</a>
														</li>
														<li class="pull-right">
															<a data-toggle="tab" href="#C1">Manutenção</a>
														</li>
													</ul>
												</div>
				
											</div>
											<div class="tab-pane" id="hb2">
				
												<ul id="internal-tab-1" class="nav nav-tabs tabs-pull-right">
													<li class="active">
														<a href="#is1" data-toggle="tab">Catalogo</a>
													</li>
													<li>
														<a href="#is2" data-toggle="tab">Promoções</a>
													</li>
													<li>
														<a href="#is3" data-toggle="tab">Campanhas</a>
													</li>
												</ul>
												<div class="tab-content padding-10">
													<div class="tab-pane active" id="is1">
														<p>
															I love everyone! I love to be around some people, I love to stay away from others, and some I'd just love to punch right in the face!
				
														</p>
													</div>
													<div class="tab-pane fade" id="is2">
														<p>
															Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
														</p>
													</div>
													<div class="tab-pane fade" id="is3">
														<p>
															Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
														</p>
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
						<!-- END COL -->
				
					
				
					</div>
				
					<!-- END ROW -->
				
					
				
				</section>
				<!-- end widget grid -->


			</div>
			<!-- END MAIN CONTENT -->

		</div>