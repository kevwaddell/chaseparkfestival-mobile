<?php  
$stage_sponsor_text = get_field('stage_sponsor_text', 'options');	
$main_stage_price = get_field('main_stage_price', 'options');	
$second_stage_price = get_field('second_stage_price', 'options');	
?>

<section id="stage-sponsor-package" class="pg-section-full bg-col-blue-dk orange-border-top pad-bot-10">
	<h2 class="section-header text-center bg-col-orange txt-col-wht tk-azo-sans-uber">Stage Sponsorship</h2>
	<div class="container-fluid">
		
		<div class="stage-sponsor-text txt-col-wht pad-top-20 mag-bot-20 bold">
			<?php echo $stage_sponsor_text; ?>
		</div>
	</div>
		
	<div class="stage-info bg-col-wht text-center">
		<h3 class="mag-bot-10 tk-azo-sans-uber text-uppercase txt-col-wht bg-col-blue-dk pad-bot-10">Main Stage name</h3>
		<p class="price txt-col-blue bold tk-azo-sans-uber">&pound;<?php echo $main_stage_price; ?></p>
	</div>
	<div class="stage-info bg-col-wht text-center">
		<h3 class="mag-bot-10 tk-azo-sans-uber text-uppercase txt-col-wht bg-col-blue-dk pad-bot-10">Second Stage name</h3>
		<p class="price txt-col-blue bold tk-azo-sans-uber">&pound;<?php echo $second_stage_price; ?></p>
	</div>

</section>