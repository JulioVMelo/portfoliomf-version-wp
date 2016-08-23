<section class="sobre">
	<div class="content">
		<a id="sobre"></a>
		<?php
			$my_page = get_page_by_title( 'sobre' );
		?>
		<h2><?php echo $my_page->post_title ?></h2>
		<i class="fa fa-graduation-cap"></i>
		<p><?php  echo $my_page->post_content ?></p>
	</div>
</section>