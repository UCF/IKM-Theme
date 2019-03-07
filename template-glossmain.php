<?php
/**
 * Template Name: Glossary-Main
 **/
?>
<?php get_header(); ?>
    <div class="container">
	
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/IKM-Theme/datatable.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/v/dt/dt-1.10.18/fh-3.1.4/datatables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.es6.min.js"></script>	
	<script src="https://cdn.jsdelivr.net/gh/julmot/datatables.mark.js@2.0.1/dist/datatables.mark.es6.min.js"></script>
	<script>


$(document).ready(function() {
		$.ajax({            
			xhrFields: {
				withCredentials: true
			},
			type: "GET",
            		url: 'https://forms.ikm.ucf.edu/cookbook/glossary.php',
            		dataType: "xml",
			crossDomain: true,
			success: function(xml){
                
				var definitions = [];
				var datarow = [];
				definitions.datarow = datarow;
				
				var elem = document.getElementById("main");
			
					$(xml).find('Term').each(function(){
						//var row = document.createElement('tr');
					
						var sTitle = $(this).find('Term > name').text();
						var sDefinition = $(this).find('html-definition').text();
						var sUrl = $(this).find('perma-link-url').text();			
						
						sTitle = "<a href="+sUrl+">"+sTitle+"</a>";
						var row = [ sTitle, sDefinition ];
						definitions.push(row);
						
					
				   
					});
					
					JSON.stringify(definitions);
					console.log(definitions);
					
					$('#main').DataTable({
						"columnDefs":[
							{ className: "defStyle", targets: 1 }
						], 						
						"data": definitions,
						"paging":true,
						"ordering": false,
						"mark": true,
						"dom": '<"top"fip>rt<"bottom"ip><"clear">',
						"columns": [
							{"title": "Term"},
							{"title": "Definition"}
						]
					
					});
					
					
				},
			error: function() {
				alert("An error occurred while processing XML file.");
			}
        });

    
});
</script>

<style>
.defStyle a:link, a:visited, a:hover {
    text-decoration: none;
    color: #333;
}

</style>
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

		</script>
		<style>
				
		</style>
 		</article>
            </div>
        </div>
<table id="main" class="display wrap cell-border width="auto" ">
  <thead>
    <tr>
      <th scope="col" style="width: 20%; ">Name</th>
      <th scope="col">Definition</th>
    </tr>
  </thead>
  <tbody></tbody>
</table>
    
    </div>
    <div id="events-header" class="wide"> 
        <div class="container">
            <div class="row">
                <div class="span12"></div>
            </div>
        </div>
    </div>		
<?php get_footer();?>
