
<style type="text/css" media="screen">
	
/* ==========================================================
! Section: Features
========================================================== */
.section-features {
  padding-top: 40px;
  padding-bottom: 40px;
}

.feature-item {
  text-align: center;
  margin-bottom: 20px;
  background: #09afad;
  color: #ffffff;
  position: relative;
  padding-top: 25px;
  padding-bottom: 15px;
  border-radius: 6px;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.feature-item:hover {
  margin-top: -5px;
}

.feature-icon {
  text-align: center;
  font-size: 25px;
  color: #ffffff;
  background: #031634;
  border-radius: 100%;
  width: 50px;
  height: 50px;
  line-height: 50px;
  margin: 0 auto;
  position: absolute;
  top: -25px;
  left: 50%;
  margin-left: -25px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.feature-title {
  font-size: 16px;
  font-weight: bold;
  text-transform: uppercase;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.feature-description p {
  font-size: 14px;
  line-height: 16px;
}
</style>

<?php 
$feature = array(
	array(
		'icon' => 'fas fa-globe',
		'title' =>'Web Development',
		'desc' => 'Develop web using PHP or NodeJS Framework'
	),
	array(
		'icon' => 'fas fa-server',
		'title' =>'Back-End Development',
		'desc' => 'Develop Back-end web'
	),
	array(
		'icon' => 'fas fa-code',
		'title' =>'REST API Development',
		'desc' => 'Develop Rest API with Documentation'
	),
);
?>

<div class="section section-features" id="features">
	<div class="container">	
		<!-- Features -->
		<div class="row">				
			<!-- item -->
			<?php 
				$arrlength = count($feature);
				for ($i = 0; $i < $arrlength; $i++){
			?>
				<div class="col-md-4">
					<div class="feature-item">
						<div class="feature-icon">
							<span><i class="<?php echo $feature[$i]['icon']; ?>"></i></span>
						</div>
						<h2 class="feature-title"><?php echo $feature[$i]['title']; ?></h2>
						<div class="feature-description">
							<p><?php echo $feature[$i]['desc']; ?></p>
						</div>
					</div>					
				</div>
			<?php
				}
			?>
			<!-- /item -->
		</div>
		<!-- /features -->	
	</div>
</div>