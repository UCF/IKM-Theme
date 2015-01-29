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
                	<script type='text/javascript' src='https://public.tableausoftware.com/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 1024px; height: 720px;'><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;publicrevizit.tableausoftware.com&#47;static&#47;images&#47;KG&#47;KG2JNRT78&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1024' height='720' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='path' value='shared&#47;KG2JNRT78' /> <param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;publicrevizit.tableausoftware.com&#47;static&#47;images&#47;KG&#47;KG2JNRT78&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /><param name='showTabs' value='y' /></object></div><div style='width:1024px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/shared/KG2JNRT78' target='_blank'>Learn About Tableau</a></div></div>
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
