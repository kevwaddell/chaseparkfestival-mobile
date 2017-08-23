<?php  
$sponsors_active = get_field('sponsors_active', 'options');		
?>

<?php if ($sponsors_active) { ?>
<?php  
$section_title = get_field('gbl_sponsors_section_title', 'options');	
$sponsors_and_stalls = get_field('gbl_sponsors_and_stalls', 'options');	
//echo '<pre class="debug">';print_r($sponsors_and_stalls);echo '</pre>';
?>
<section id="sponsors-and-stalls" class="wide-panel bg-col-blue-dk text-center">
	<h3 class="panel-header bg-col-orange tk-azo-sans-uber txt-col-wht"><?php echo $section_title; ?></h3>
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