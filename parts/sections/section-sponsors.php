<?php  
$sponsors_active = get_field('sponsors_active', 'options');		
?>

<?php if ($sponsors_active) { ?>
<?php  
$section_title = get_field('gbl_sponsors_section_title', 'options');	
$sponsors_and_stalls = get_field('gbl_sponsors_and_stalls', 'options');	
$sponsors_total = count($sponsors_and_stalls);
$slides_total = ceil($sponsors_total / 2);
//echo '<pre class="debug">';print_r($sponsors_and_stalls);echo '</pre>';
$sponsor_counter = 0;
?>
<section id="sponsors-and-stalls" class="wide-panel bg-col-blue-dk text-center">
	<h3 class="panel-header bg-col-orange tk-azo-sans-uber txt-col-wht"><?php echo $section_title; ?></h3>
	<div class="sponsors-outer-wrap carousel slide" data-ride="carousel">
	<div class="carousel-inner" role="listbox">	
		<?php for ($i = 0; $i <= $slides_total; $i++ ) { ?>

		<div id="sponsor-slide-<?php echo $i; ?>" class="item sponsors-inner-wrap<?php echo ($i == 0) ? " active":""; ?>">
				
			<?php if (!empty($sponsors_and_stalls[$i])) { ?>
				<div class="sponsor-logo">
				<a href="<?php echo $sponsors_and_stalls[$i]['sponsor_website']; ?>" target="_blank" rel="nofollow" style="background-image: url(<?php echo $sponsors_and_stalls[$i]['sponsor_logo']; ?>);"><span class="sr-only"><?php echo $sponsors_and_stalls[$i]['sponsor_name']; ?></span></a>
				</div>		
			<?php } ?>
			
		</div>

		<?php } ?>
		
	</div>
	</div>
	
</section>
<?php } ?>