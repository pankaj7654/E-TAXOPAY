<div class="banner">
			<!-- banner Slider starts Here -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-bg">
									<div class="container">
										<div class="banner-info">
											<h3 style="color:white">INCOME TAX DEPARTMENT</h3>
											<p><h4 style="color:white">Government of India</h4></p>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
										<div class="banner-info">
											<h4 style="color:white">To partner in the nation building process through progressive tax policy, efficient and effective administration and improved voluntary compliance</h4>
											<p style="color:white">This website aims to provide all information that the Income Tax Department is required to publish in terms of Section 4 of the RTI Act 2005</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
		          </div>
	</div>