<div class="inner">
	<ul class="nav-list-l1">
		<?
			$args = array(	'theme_location' => 'main-menu',
							'container' => false,
							'items_wrap'=>'%3$s' // removes the <ul>
			);

			wp_nav_menu($args);
		?>
	</ul>
</div>