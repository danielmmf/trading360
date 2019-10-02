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
								Forms 
							<span>> 
								Form Elements
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
							<h1 class="semi-bold">What are "Smart Form Elements?"</h1>
						<p> 
							SmartAdmin comes with a fully customized grid system catered specifically for building form layouts. Its not technically "better" than the bootstrap 3 built in grid system, 
							but rather more simplified for rapid form layout and faster development. Idealy you would use either the <strong>bootstrap</strong> grid or the <strong>smart-form</strong> grid, 
							when building your form layouts. It is important not to mix elements from two seperate classes as it can cause conflict.  
						</p>
						
						<p>
							You can explore some of the <a href="form-templates.html" title="Go to Bootstrap Forms">layouts</a> made using Smart Forms grid system or if you are not comfortable with this grid system you can simply stick to the default <a href="bootstrap-forms.html" title="Go to Bootstrap Forms">Bootstrap forms</a> 
						</p>
						</div>
				
						
					</div>
				</div>
				
				<!-- widget grid -->
				<section id="widget-grid" class="">
				
					
				
					<!-- START ROW -->
				
					<div class="row">
				
						<!-- NEW COL START -->
						<article class="col-sm-12 col-md-12 col-lg-6">
				
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
													<label class="label">Default text input with maxlength</label>
													<label class="input">
														<input type="text" maxlength="10">
													</label>
													<div class="note">
														<strong>Maxlength</strong> is automatically added via the "maxlength='#'" attribute
													</div>
												</section>
																				
												
											
											</fieldset>
											
											<fieldset>
													
												<section>
													<label class="label">File input</label>
													<div class="input input-file">
														<span class="button"><input type="file" id="file" name="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
													</div>
												</section>
				
												
											</fieldset>
				
											<fieldset>
												
												
												
												<section>
													<label class="label">Select default</label>
													<label class="select">
														<select>
															<option value="0">Choose name</option>
															<option value="1">Alexandra</option>
															<option value="2">Alice</option>
															<option value="3">Anastasia</option>
															<option value="4">Avelina</option>
														</select> <i></i> </label>
												</section>
				
												
											</fieldset>
				
											<fieldset>
											
				
												<section>
													<label class="label">Textarea resizable</label>
													<label class="textarea textarea-resizable"> 										
														<textarea rows="3" class="custom-scroll"></textarea> 
													</label>
												</section>
				
												
											</fieldset>
				
											<fieldset>
												<section>
													<label class="label">Columned radios</label>
													<div class="row">
														<div class="col col-4">
															<label class="radio">
																<input type="radio" name="radio" checked="checked">
																<i></i>Alexandra</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Alice</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Anastasia</label>
														</div>
														<div class="col col-4">
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Avelina</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Basilia</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Beatrice</label>
														</div>
														<div class="col col-4">
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Cassandra</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Clemencia</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Desiderata</label>
														</div>
													</div>
												</section>
				
												<section>
													<label class="label">Inline radios</label>
													<div class="inline-group">
														<label class="radio">
															<input type="radio" name="radio-inline" checked="checked">
															<i></i>Alexandra</label>
														<label class="radio">
															<input type="radio" name="radio-inline">
															<i></i>Alice</label>
														<label class="radio">
															<input type="radio" name="radio-inline">
															<i></i>Anastasia</label>
														<label class="radio">
															<input type="radio" name="radio-inline">
															<i></i>Avelina</label>
														<label class="radio">
															<input type="radio" name="radio-inline">
															<i></i>Beatrice</label>
													</div>
												</section>
											</fieldset>
				
											<fieldset>
												<section>
													<label class="label">Columned checkboxes</label>
													<div class="row">
														<div class="col col-4">
															<label class="checkbox">
																<input type="checkbox" name="checkbox" checked="checked">
																<i></i>Alexandra</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Alice</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Anastasia</label>
														</div>
														<div class="col col-4">
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Avelina</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Basilia</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Beatrice</label>
														</div>
														<div class="col col-4">
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Cassandra</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Clemencia</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Desiderata</label>
														</div>
													</div>
												</section>
				
												<section>
													<label class="label">Inline checkboxes</label>
													<div class="inline-group">
														<label class="checkbox">
															<input type="checkbox" name="checkbox-inline" checked="checked">
															<i></i>Alexandra</label>
														<label class="checkbox">
															<input type="checkbox" name="checkbox-inline">
															<i></i>Alice</label>
														<label class="checkbox">
															<input type="checkbox" name="checkbox-inline">
															<i></i>Anastasia</label>
														<label class="checkbox">
															<input type="checkbox" name="checkbox-inline">
															<i></i>Avelina</label>
														<label class="checkbox">
															<input type="checkbox" name="checkbox-inline">
															<i></i>Beatrice</label>
													</div>
												</section>
											</fieldset>
				
											<fieldset>
												<div class="row">
													<section class="col col-5">
														<label class="label">Radio Toggles</label>
														<label class="toggle">
															<input type="radio" name="radio-toggle" checked="checked">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Alexandra</label>
														<label class="toggle">
															<input type="radio" name="radio-toggle">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Anastasia</label>
														<label class="toggle">
															<input type="radio" name="radio-toggle">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Avelina</label>
													</section>
				
													<div class="col col-2"></div>
				
													<section class="col col-5">
														<label class="label">Checkbox Toggles</label>
														<label class="toggle">
															<input type="checkbox" name="checkbox-toggle" checked="checked">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Cassandra</label>
														<label class="toggle">
															<input type="checkbox" name="checkbox-toggle">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Clemencia</label>
														<label class="toggle">
															<input type="checkbox" name="checkbox-toggle">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Desiderata</label>
													</section>
												</div>
											</fieldset>
				
											<fieldset>
												<section>
													<label class="label">Ratings with different icons</label>
													<div class="rating">
														<input type="radio" name="stars-rating" id="stars-rating-5">
														<label for="stars-rating-5"><i class="fa fa-star"></i></label>
														<input type="radio" name="stars-rating" id="stars-rating-4">
														<label for="stars-rating-4"><i class="fa fa-star"></i></label>
														<input type="radio" name="stars-rating" id="stars-rating-3">
														<label for="stars-rating-3"><i class="fa fa-star"></i></label>
														<input type="radio" name="stars-rating" id="stars-rating-2">
														<label for="stars-rating-2"><i class="fa fa-star"></i></label>
														<input type="radio" name="stars-rating" id="stars-rating-1">
														<label for="stars-rating-1"><i class="fa fa-star"></i></label>
														Stars
													</div>
				
													<div class="rating">
														<input type="radio" name="trophies-rating" id="trophies-rating-7">
														<label for="trophies-rating-7"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-6">
														<label for="trophies-rating-6"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-5">
														<label for="trophies-rating-5"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-4">
														<label for="trophies-rating-4"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-3">
														<label for="trophies-rating-3"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-2">
														<label for="trophies-rating-2"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-1">
														<label for="trophies-rating-1"><i class="fa fa-trophy"></i></label>
														Trophies
													</div>
				
													<div class="rating">
														<input type="radio" name="asterisks-rating" id="asterisks-rating-10">
														<label for="asterisks-rating-10"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-9">
														<label for="asterisks-rating-9"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-8">
														<label for="asterisks-rating-8"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-7">
														<label for="asterisks-rating-7"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-6">
														<label for="asterisks-rating-6"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-5">
														<label for="asterisks-rating-5"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-4">
														<label for="asterisks-rating-4"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-3">
														<label for="asterisks-rating-3"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-2">
														<label for="asterisks-rating-2"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-1">
														<label for="asterisks-rating-1"><i class="fa fa-asterisk"></i></label>
														Asterisks
													</div>
													<div class="note">
														<strong>Note:</strong> you can use more than 300 vector icons for rating.
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
				
						</article>
						<!-- END COL -->
				
					
				
					</div>
				
					<!-- END ROW -->
				
					
				
				</section>
				<!-- end widget grid -->


			</div>
			<!-- END MAIN CONTENT -->

		</div>