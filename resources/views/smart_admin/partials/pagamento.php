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
					<li>Home</li><li>Pagamentos</li><li>Pagamento # {{todoList.pagamento.id}}</li>
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
									<h2>Pagamento #{{todoList.pagamento.id}} </h2>
				
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
														<input class="form-control" type="text" placeholder="Type invoice number or date...">
														<div class="input-group-btn">
															<button class="btn btn-default" type="button">
																<i class="fa fa-search"></i> Busca
															</button>
														</div>
													</div>
												</div>
				
												<div class="col-sm-8 text-align-right">
				
													<div class="btn-group">
														<a href="javascript:void(0)" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i>Registrar Lynx </a>
													</div>
				
													<div class="btn-group">
														<a href="javascript:void(0)" class="btn btn-sm btn-success"> <i class="fa fa-plus"></i> Cancelar nota </a>
													</div>
				
												</div>
				
											</div>
				
										</div>
				
										<div class="padding-10">
											<br>
											<div class="pull-left">
												<img src="/adm/img/logo-blacknwhite.png" width="150" height="32" alt="invoice icon">
				
												<address>
													<br>
													<strong>{{todoList.pagamento.name}}</strong>
													<br>
													Endereço do Cliente,
													<br>
													Cidade - UF
													<br>
													<abbr title="Phone">P:</abbr> (xx) 91456-7890
												</address>
											</div>
											<div class="pull-right">
												<h1 class="font-400">{{todoList.pagamento.total}}</h1>
											</div>
											<div class="clearfix"></div>
											<br>
											<br>
											<div class="row">
												<div class="col-sm-9">
													<h4 class="semi-bold">Loja {{todoList.pagamento.shop}}</h4>
													<address>
														<strong>Jardins I</strong>
														<br>
														Alameda Casa Branca, 720 – Jardins
														<br>
														São Paulo - SP 
														<br>
														<abbr title="Phone">P:</abbr> (11) 3143-4317
													</address>
												</div>
												<div class="col-sm-3">
													<div>
														<div>
															<strong>Número da transação :</strong>
															<span class="pull-right"> # {{todoList.pagamento.id}} </span>
														</div>
				
													</div>
													<div>
														<div class="font-md">
															<strong>Data :</strong>
															<span class="pull-right"> <i class="fa fa-calendar"></i> {{todoList.pagamento.created_at | date:'MM/dd/yyyy @ h:mma'}} </span>
														</div>
				
													</div>
													<br>
													<div class="well well-sm  bg-color-darken txt-color-white no-border">
														<div class="fa-lg">
															Total :
															<span class="pull-right"> R$ {{todoList.pagamento.total}} </span>
														</div>
				
													</div>
													<br>
													<br>
												</div>
											</div>
											<table class="table table-hover">
												<thead>
													<tr>
														<th class="text-center">QTY</th>
														<th>ITEM</th>
														<th>DESCRIÇÃO</th>
														<th>TOTAL</th>
														<th>SUBTOTAL</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center"><strong>1</strong></td>
														<td><a href="javascript:void(0);">Venda no app</a></td>
														<td>Essa venda é descrita no profile do cliente</td>
														<td>${{todoList.pagamento.total}}</td>
				
														<td>${{todoList.pagamento.total}}</td>
													</tr>
													
													<tr>
														<td colspan="4">Total</td>
														<td><strong>R$ {{todoList.pagamento.total}}</strong></td>
													</tr>
													<tr>
														<td colspan="4">PIS/COFINS</td>
														<td><strong>13%</strong></td>
													</tr>
												</tbody>
											</table>
				
											<div class="invoice-footer">
				
												<div class="row">
				
													<div class="col-sm-7">
														<div class="payment-methods">
															<h5>Tipo de Pagamento : Cartão</h5>
															<img src="/adm/img/invoice/paypal.png" width="64" height="64" alt="paypal">
															<img src="/adm/img/invoice/americanexpress.png" width="64" height="64" alt="american express">
															<img src="/adm/img/invoice/mastercard.png" width="64" height="64" alt="mastercard">
															<img src="/adm/img/invoice/visa.png" width="64" height="64" alt="visa">
														</div>
													</div>
													<div class="col-sm-5">
														<div class="invoice-sum-total pull-right">
															<h3><strong>Total: <span class="text-success">R$ {{todoList.pagamento.total}}</span></strong></h3>
														</div>
													</div>
				
												</div>
												
												<div class="row">
													<div class="col-sm-12">
														<p class="note">**Verificar se tem nota fiscal gerada para esse pagamento.</p>
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
