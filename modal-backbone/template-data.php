<?php
	/**
	 * Backbone Templates
	 * This file contains all of the HTML used in our modal and the workflow itself.
	 *
	 * We use this external file as well as the wp_ajax call to give the templates complete access to the
	 * WordPress system and allow for easy localization.
	 *
	 * Each template is wrapped in a script block ( note the type is set to "text/html" ) and given an ID.
	 * The Template class in the Backbone application grabs and converts these blocks into compiled templates
	 * to be used and reused in your application.
	 *
	 * The entire thing is wrapped in a single empty div tag as it's set as the $el of the template class ( and must
	 * be a single object, not multiple ).
	 *
	 * Again, you don't have to use this UI assembly pattern -- I personally find it useful.
	 */
?><div>
	<?php
	/**
	 * The Modal Window, including sidebar and content area.
	 * Add menu items to ".navigation-bar nav ul"
	 * Add content to ".backbone_modal-main article"
 	 */
	?>
	<script type="text/html" id='modal-window'>
		<div class="backbone_modal">
			<a class="backbone_modal-close" href="#" title="<?php echo __( 'Close' , 'backbone_modal' );?>"><span class="backbone_modal-icon ir"><?php echo __( 'Close' , 'backbone_modal' );?></span></a>
			<div class="backbone_modal-content">
				<div class="navigation-bar"> <nav> <ul></ul> </nav> </div>
				<section class="backbone_modal-main" role="main">
					<header><h1><?php echo __( 'Backbone Modal' , 'backbone_modal' );?></h1></header>
					<article></article>
					<footer>
						<div class="inner text-right">
							<button id="btn-cancel" class="button button-large"><?php echo __( 'Cancel' , 'backbone_modal' );?></button>
							<button id="btn-ok" class="button button-primary button-large"><?php echo __( 'Save &amp; Continue' , 'backbone_modal' );?></button>
						</div>
					</footer>
				</section>
			</div>
		</div>
	</script>

	<?php
	/**
	 * The Modal Backdrop
	 */
	?>
	<script type="text/html" id='modal-backdrop'>
		<div class="backbone_modal-backdrop">&nbsp;</div>
	</script>
	<?php
	/**
	 * Base template for a navigation-bar menu item ( and the only *real* template in the file ).
	 */
	?>
	<script type="text/html" id='modal-menu-item'>
		<li class="nav-item"><a href="<%= url %>"><%= name %></a></li>
	</script>
	<?php
	/**
	 * A menu item separator.
	 */
	?>
	<script type="text/html" id='modal-menu-item-separator'>
		<li class="separator">&nbsp;</li>
	</script>

</div>