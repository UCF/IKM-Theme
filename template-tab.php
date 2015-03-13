<?php
/**
 * Template Name: Tableau
 **/
?>
<?php get_header(); ?>
    <div class="container">
    <?php the_post();?>
        <div class="row page-content" id="<?=$post->post_name?>">
            <div class="span12">
                <article>
                    <? if(!is_front_page())	{ ?>
                            <h2><?php the_title();?></h2>
                    <? } ?>
                    <?php the_content();?>
			<hr />	

		
		<style>
			.tableauTabbedNaviagtion .dijitTab {
				color: black;
				background-color: lightgrey;
			}
			
			.tableauTabbedNaviagtion .dijitTabChecked {
				background-color: darkolivegreen;
				color: white;
			}
			
		</style>
 		</article>
            </div>
        </div>
    </div>
    <div id="events-header" class="wide">
        <div class="container">
            <div class="row">
                <div class="span12"></div>
            </div>
        </div>
    </div>		
<?php get_footer();?>
