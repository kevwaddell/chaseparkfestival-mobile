<?php 
$main_partners_active = get_field( 'main_partners_active', 'options' );	
?>
<?php if ($main_partners_active) { ?>
	<?php 
	$main_partner_name = get_field( 'main_partner_name', 'options' );
	$main_partner_website = get_field( 'main_partner_website', 'options' );
	$main_partner_logo = get_field( 'main_partner_logo', 'options' );
	$main_partner_text = get_field( 'main_partner_text', 'options' );
	$main_partner_year = get_field( 'main_partner_year', 'options' );
	$main_partner_color = get_field( 'main_partner_color', 'options' );
	$no_http = explode('http://', $main_partner_website);
	?>
	<section id="main-partner-panel" class="pg-section-full" style="background-color: <?php echo $main_partner_color; ?>;">
		<h2 class="section-header text-center tk-azo-sans-uber bg-col-wht" style="color: <?php echo $main_partner_color; ?>">Our main partner for <?php echo $main_partner_year; ?></h2>
		<div class="container-fluid">
			
			<figure class="partner-logo bg-col-wht">
				<img src="<?php echo $main_partner_logo; ?>" class="img-responsive">
			</figure>

			<div class="partner-txt txt-col-wht">
			<h3 class="txt-col-wht"><?php echo $main_partner_name; ?></h3>
			<?php echo $main_partner_text; ?>
			<a href="<?php echo $main_partner_website; ?>" class="btn btn-default btn-block btn-lg tk-azo-sans-uber" style="color: <?php echo $main_partner_color; ?>;"><?php echo $no_http[1]; ?></a>
			</div>
			
		</div>
	</section>
				
<?php } ?>

<?php  
$sponsors_active = get_field('sponsors_active', 'options');		
?>

<?php if ($main_partners_active && $sponsors_active) { ?>
<?php  
$section_title = get_field('gbl_sponsors_section_title', 'options');	
$sponsors_and_stalls = get_field('gbl_sponsors_and_stalls', 'options');	
?>
<section id="sponsors-and-stalls" class="wide-panel bg-col-orange text-center">
	<h3 class="panel-header text-center bg-col-wht tk-azo-sans-uber txt-col-orange">Our Sponsors for <?php echo $main_partner_year; ?></h3>
	<div class="sponsors-outer-wrap carousel slide" data-ride="carousel">
	<div class="carousel-inner" role="listbox">	
		<?php foreach ($sponsors_and_stalls as $k => $s ) { ?>

		<div id="sponsor-slide-<?php echo $k+1; ?>" class="item sponsors-inner-wrap<?php echo ($k == 0) ? " active":""; ?>">
				
			<div class="sponsor-logo" style="background-image: url(<?php echo $s['sponsor_logo']; ?>);">
			<a href="<?php echo $s['sponsor_website']; ?>" target="_blank" rel="nofollow"><span class="sr-only"><?php echo $s['sponsor_name']; ?></span></a>
			</div>		
			
		</div>

		<?php } ?>
		
	</div>
	</div>
</section>
<?php } ?>