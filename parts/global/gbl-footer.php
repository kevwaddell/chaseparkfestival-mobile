<?php  
/* TICKET DATA */
$tickets_active = get_field('tickets_active', 'options');
$ticket_provider_http = get_field('gbl_ticket_provider', 'options');
$tickets_url = get_field('gbl_tickets_url', 'options');

/* CONTACT DATA */
$contact_name = get_field('gbl_contact_name', 'options');
$contact_email = get_field('gbl_contact_email', 'options');
$contact_tel = get_field('gbl_contact_telephone', 'options');
$contact_tel_link = str_replace(" ", "", $contact_tel);

/* SOCIAL MEDIA LINKS DATA */
$social_links = get_field('gbl_social_links', 'options');
?>
<footer id="footer-site-info" role="contentinfo" class="bg-col-blue">
	<div class="footer-top">
		
		<div class="container-fluid">
			<?php if ($tickets_active) { ?>
			<div class="ticket-details">
				<div class="ticket-info text-center">
					Tickets are available for purchase from<br />
					<a href="<?php echo $ticket_provider_http; ?>"><?php echo str_replace("http://", "", $ticket_provider_http); ?></a>
				</div>
				<a href="<?php echo $tickets_url; ?>" target="_blank" class="btn btn-default btn-block book-tickets-btn tk-azo-sans-uber">Book Your Tickets</a>
			</div>
			<?php } ?>
			<div class="contact-info text-center txt-col-blue-dk"><strong>For more Information contact <?php echo $contact_name; ?> on <a href="tel:<?php echo $contact_tel_link; ?>"><?php echo $contact_tel; ?></a> or <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></strong></div>
			</div>
		
		<?php if (!empty($social_links)) { ?>
		<div class="social-links">
			<?php foreach ($social_links as $link) { ?>
				<a href="<?php echo $link['link_url']; ?>" target="_blank"><i class="fa <?php echo $link['link_icon']; ?>"></i><span class="sr-only"><?php echo $link['link_title']; ?></span></a>
			<?php } ?>
		</div>
		<?php } ?>
		
	</div>
	
	<div class="footer-base txt-col-wht">
		<?php wp_nav_menu(array( 
			'container' => 'false', 
			'menu' => 'Legal Nav', 
			'menu_class'  => 'footer-base-menu clearfix list-unstyled bold text-center',
			'fallback_cb' => false ) 
			); 
		?>
		
		<strong class="text-center block">&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights reserved.</strong>
	</div>
</footer>
