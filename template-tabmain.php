<?php
/**
 * Template Name: Tableau-Main
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

		<script>
			var myList = document.getElementsByClassName("dijitTab");
			myList[0].style.color = "black";
			myList[0].style.background-color: "lightgrey";

			var myListTwo = document.getElementsByClassName("dijitTabChecked");
			myListTwo[0].style.color = "white";
			myListTwo[0].style.background-color: "darkolivegreen";
		</script>
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
