		</div> <?php // Fin de ID Container?>
		<!-- Tab social -->
		<div id="tab-social">
			<div class="superior">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#home" data-toggle="tab">
										<i class="fa fa-facebook-square"></i> 
										<span class="hidden-xs"> Facebook </span>
									</a>
								</li>
								<li>
									<a href="#profile" data-toggle="tab">
										<i class="fa fa-twitter-square"></i> 
										<span class="hidden-xs"> Twitter </span>
									</a>
								</li>
								<li>
									<a href="#messages" data-toggle="tab">
										<i class="fa fa-instagram"></i> 
										<span class="hidden-xs"> Instagram </span>
									</a>
								</li>
								<li>
									<a href="#settings" data-toggle="tab">
										<i class="fa fa-pinterest-square"></i> 
										<span class="hidden-xs"> Pinterest </span>
									</a>
								</li>
								<li>
									<a href="#settings" data-toggle="tab">
										<i class="fa fa-instagram"></i> 
										<span class="hidden-xs"> Cinemagram </span>
									</a>
								</li>
							</ul>	
						</div>
					</div>

				</div>
			</div>

			<div class="inferior">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="home">
									<p>pane 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, quasi!</p>
								</div>
								<div class="tab-pane" id="profile">
									<p>pane 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, nam!</p>
								</div>
								<div class="tab-pane" id="messages">
									<p>pane 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, earum.</p>
								</div>
								<div class="tab-pane" id="settings">
									<p>pane 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat.</p>
								</div>
							</div>	
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- FIn de tab Social -->
		<footer id="footer" class="footer">
			<!-- marcas en footer -->	
			<div id="marcas">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php bones_footer_links(); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<ul id="brand-list">
								<li>
									<a class="brand-logo" href="">
										<img src="http://placehold.it/75x75" alt="">
									</a>
								</li>
								<li>
									<a class="brand-logo" href="">
										<img src="http://placehold.it/75x75" alt="">
									</a>
								</li>
								<li>
									<a class="brand-logo" href="">
										<img src="http://placehold.it/75x75" alt="">
									</a>
								</li>
								<li>
									<a class="brand-logo" href="">
										<img src="http://placehold.it/75x75" alt="">
									</a>
								</li>
								<li>
									<a class="brand-logo" href="">
										<img src="http://placehold.it/75x75" alt="">
									</a>
								</li>
								<li>
									<a class="brand-logo" href="">
										<img src="http://placehold.it/75x75" alt="">
									</a>
								</li>
								<li>
									<a class="brand-logo" href="">
										<img src="http://placehold.it/75x75" alt="">
									</a>
								</li>
								<li>
									<a class="brand-logo" href="">
										<img src="http://placehold.it/75x75" alt="">
									</a>
								</li>
							</ul>			
						</div>
					</div>

				</div>
			</div>
			<!-- Fin de marcas en footer -->

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-left">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
						</div>
						<div class="col-md-6 text-right">
							<a href="">Politica de privacidad</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin de Copyright -->
		</footer>
		
		

		

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
