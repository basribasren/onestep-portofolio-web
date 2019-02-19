<section class="colorlib-about" data-section="about">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-12">
				<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
					<div class="col-md-12">
						<div class="about-desc">
							<span class="heading-meta">About Us</span>
							<h2 class="colorlib-heading">Who Am I?</h2>
							<p><strong>Hi I'm Jackson Ford</strong> On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php include 'data_about.php';?>
					<?php 
						$data['services'] = array(
							$service01, 
							$service02,
							$service03,
							$service04
						);
						$this->load->view('component/component_service', $data) 
					?>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
						<div class="hire">
							<h2>I am happy to know you <br>that 300+ projects done sucessfully!</h2>
							<a href="#" class="btn-hire">Hire me</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>