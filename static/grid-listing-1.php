<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bragis</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    
    <!-- BASE CSS -->
    <link href="css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/listing.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
				
	<header class="header_in clearfix">
		<div class="container">
		<div id="logo">
			<a href="index.html">
				<img src="img/logo_sticky.svg" width="120" height="auto" alt="">
			</a>
		</div>
		<!-- /top_menu -->
		<a href="#0" class="open_close">
			<i class="icon_menu"></i><span>Menu</span>
		</a>
		<nav class="main-menu">
			<div id="header_menu">
				<a href="#0" class="open_close">
					<i class="icon_close"></i><span>Menu</span>
				</a>
				<a href="index.html"><img src="img/logo.svg" width="155" height="45" alt=""></a>
			</div>
			<ul>
				<li class="submenu">
					<a href="/" class="show-submenu">Home</a>
				</li>
			</ul>
		</nav>
	</div>
	</header>
	<!-- /header -->
	
	<main class="bg_color">

		<div class="filters_full version_2">
		    <div class="container clearfix">
		        <div class="sort_select">
		            <select name="sort" id="sort">
		                <option value="popularity" selected="selected">Ordenar por popularidade</option>
		                <option value="rating">Ordenar por avaliações</option>
		                <option value="date">Ordenar por mais recentes</option>
		            </select>
		        </div>
		        <a href="#0" class="open_filters btn_filters"><i class="icon_adjust-vert"></i><span>Filtros</span></a>
		        <div class="search_bar_list">
				    <input type="text" class="form-control" placeholder="Procurar...">
				</div>
				<a class="btn_search_mobile btn_filters" data-toggle="collapse" href="#collapseSearch"><i class="icon_search"></i></a>
		    </div>

		<div class="collapse" id="collapseSearch">
		    <div class="search_bar_list">
		        <input type="text" class="form-control" placeholder="Procurar...">
		    </div>
		</div>
		<!-- /collapseSearch -->
		</div>
		<!-- /filters_full -->
		
		<div class="container margin_30_40">
			<div class="page_header">
			    <h1>Profissionais</h1><span>: 814 encontrados</span>
			</div>		
			<div class="row">
				<aside class="col-lg-3" id="sidebar_fixed">
					<div class="filter_col">
						<div class="inner_bt"><a href="#" class="open_filters"><i class="icon_close"></i></a></div>
						<div class="filter_type">
							<h4><a href="#filter_1" data-toggle="collapse" class="opened">Categorias</a></h4>
							<div class="collapse show" id="filter_1">
								<ul>
								    <li>
								        <label class="container_check">Museu <small>12</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Vídeo <small>24</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Eventos Corporativos <small>23</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Teatro <small>11</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								</ul>
							</div>
							<!-- /filter_type -->
						</div>
						<!-- /filter_type -->
						<div class="filter_type">
							<h4><a href="#filter_2" data-toggle="collapse" class="closed">Avaliações</a></h4>
							<div class="collapse" id="filter_2">
								<ul>
								    <li>
								        <label class="container_check">Excelente 9+ <small>06</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Muito bom 8+ <small>12</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Bom 7+ <small>17</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Agradável 6+ <small>43</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								</ul>
							</div>
						</div>
						<!-- /filter_type -->
						<div class="filter_type">
							<h4><a href="#filter_3" data-toggle="collapse" class="closed">Distância</a></h4>
							<div class="collapse" id="filter_3">
                                <div class="range_input">Raio do destino <span></span> km</div>
								<div class="add_bottom_15"><input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal"></div>
							</div>
						</div>
						<!-- /filter_type -->
						<div class="filter_type">
							<h4><a href="#filter_4" data-toggle="collapse" class="closed">Preço</a></h4>
							<div class="collapse" id="filter_4">
								<ul>
										<li>
											<label class="container_check">R$0 — R$50<small>11</small>
											  <input type="checkbox">
											  <span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">R$50 — R$100<small>08</small>
											  <input type="checkbox">
											  <span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">R$100 — R$150<small>05</small>
											  <input type="checkbox">
											  <span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">R$150 — R$200<small>18</small>
											  <input type="checkbox">
											  <span class="checkmark"></span>
											</label>
										</li>
									</ul>
							</div>
						</div>
						<!-- /filter_type -->
						<div class="buttons">
							<a href="#0" class="btn_1 full-width">Filtrar</a>
						</div>
					</div>
				</aside>

				<div class="col-lg-9">
					<div class="row grid_sidebar">
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							 <div class="strip">
				                <figure>
				                    <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
				                    <img src="img/ana.jpeg" data-src="img/ana.jpeg" class="img-fluid lazy" alt="">
				                    <a href="detail-page.html" class="strip_info">
				                        <div class="item_title">
				                            <h3>Ana, 54 anos</h3>
				                            <small>Profissional de Audiodescrição</small>
				                        </div>
				                    </a>
				                </figure>
				                <ul>
				                    <li>
				                        <div class="score"><span>Score<em>350 avaliações</em></span><strong>8.9</strong></div>
				                    </li>
				                </ul>
				            </div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							 <div class="strip">
				                <figure>
				                    <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
				                    <img src="img/marcos.jpeg" data-src="img/marcos.jpeg" class="img-fluid lazy" alt="">
				                    <a href="detail-page.html" class="strip_info">
				                        <div class="item_title">
				                            <h3>Marcos, 43 anos</h3>
				                            <small>Intérprete de libras</small>
				                        </div>
				                    </a>
				                </figure>
				                <ul>
				                    <li>
				                        <div class="score"><span>Score<em>350 avaliações</em></span><strong>8.9</strong></div>
				                    </li>
				                </ul>
				            </div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							 <div class="strip">
				                <figure>
				                    <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
				                    <img src="img/luiza.jpeg" data-src="img/luiza.jpeg" class="img-fluid lazy" alt="">
				                    <a href="detail-page.html" class="strip_info">
				                        <div class="item_title">
				                            <h3>Luiza, 63 anos</h3>
				                            <small>Consultoria em audiodescrição</small>
				                        </div>
				                    </a>
				                </figure>
				                <ul>
				                    <li>
				                        <div class="score"><span>Score<em>350 avaliações</em></span><strong>8.9</strong></div>
				                    </li>
				                </ul>
				            </div>
						</div>
					</div>
					<!-- /row -->
					<div class="pagination_fg">
					  <a href="#">&laquo;</a>
					  <a href="#" class="active">1</a>
					  <a href="#">2</a>
					  <a href="#">3</a>
					  <a href="#">4</a>
					  <a href="#">5</a>
					  <a href="#">&raquo;</a>
					</div>
				</div>
				<!-- /col -->
			</div>		
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->

	<footer>
		<div class="container">
			
			<!-- /row-->
			<hr>
			<span>© 2021 Bragis</span>
				
			
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
	
	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
	
	<!-- Sign In Modal -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="modal_header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="ti-email"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="ti-lock"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center">
					<input type="submit" value="Log In" class="btn_1 full-width mb_5">
					Don’t have an account? <a href="account.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Modal -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/common_func.js"></script>
    <script src="assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/sticky_sidebar.min.js"></script>
    <script src="js/specific_listing.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script>
		$(window).on("load",function(){
		  var $container = $('.isotope-wrapper');
		  $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
		});
		$('.switch-field').on( 'click', 'input', 'change', function(){
		  var selector = $(this).attr('data-filter');
		  $('.isotope-wrapper').isotope({ filter: selector });
		});
	</script>

	<!-- Map -->
    <script src="js/main_map_scripts.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

</body>
</html>