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
<script type='text/javascript' src='https://public.tableausoftware.com/javascripts/api/viz_v1.js'></script><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;publicrevizit.tableausoftware.com&#47;static&#47;images&#47;IP&#47;IPEDSDoctoralDegreesAwardedHistorical&#47;RaceandGendercombined&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='1024' height='720' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='IPEDSDoctoralDegreesAwardedHistorical&#47;RaceandGendercombined' /><param name='tabs' value='yes' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;publicrevizit.tableausoftware.com&#47;static&#47;images&#47;IP&#47;IPEDSDoctoralDegreesAwardedHistorical&#47;RaceandGendercombined&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /></object></div><div style='width:1024px;height:22px;padding:0px 10px 0px 0px;color:black;font:normal 8pt verdana,helvetica,arial,sans-serif;'><div style='float:right; padding-right:8px;'><a href='http://www.tableausoftware.com/public/about-tableau-products?ref=https://public.tableausoftware.com/views/IPEDSDoctoralDegreesAwardedHistorical/RaceandGendercombined' target='_blank'>Learn About Tableau</a></div>
		
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
