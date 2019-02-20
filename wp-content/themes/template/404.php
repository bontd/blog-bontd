<?php get_header(); ?>
<div id="area-contents" class="area noskin" style="margin-top:100px;padding: 100px 0;text-align:center;">
    <div class="wrap">
        <div class="atl"></div>
        <div class="atr"></div>
        <div class="atc"></div>
        <div class="amm">
            <div class="aml"></div>
            <div class="amr"></div>
            <div class="amc">
				<?php
					_e('<h2>404 NOT FOUND</h2>', 'Error');
					_e('<p>The article you were looking for was not found, but maybe try looking again!', 'Error');
					// get_search_form();

					// _e('<h3>Content categories: </h3>', 'Error');
					// echo '<div class="404-cat-list">';
					// 	wp_list_categories( array( 'title_li' => '' ) );
					// echo '</div>';

					// _e('Tag Cloud', 'Error');
					// wp_tag_cloud();
				?>
			</div>
		</div>
	
	</div>
</div>
<?php get_footer(); ?>