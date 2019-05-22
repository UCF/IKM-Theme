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
	
	<link type="text/css" href="//gyrocode.github.io/jquery-datatables-alphabetSearch/1.2.5/css/dataTables.alphabetSearch.css" rel="stylesheet" />
	<script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-alphabetSearch/1.2.5/js/dataTables.alphabetSearch.min.js"></script>	
	
	
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
						var sPublic = '';

						//to handle multiple tags
						x = $(this).find('Term > tags > tag > name');
						for (i = 0; i < x.length; i++) {
							if (x[i].childNodes[0].nodeValue == 'Public'){
								sPublic = 'Public';				
							}
						}	
						
						//Only show terms that have been tagged as public
						if (sPublic == 'Public'){
							var sTitle = $(this).find('Term > name').text();
							var sDefinition = $(this).find('html-definition').text();
							var sUrl = $(this).find('perma-link-url').text();			
							
							/* sTitle = "<a href="+sUrl+">"+sTitle+"</a>";*/
							
							var row = [ sTitle, sDefinition ];
							definitions.push(row);
						}					
				   
					});
					
					JSON.stringify(definitions);
					console.log(definitions);
					
					$('#main').DataTable({
						"columnDefs":[
							{ className: "defStyle", targets: 1 }
						], 										
						"data": definitions,
						"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "Show All"]],
						"paging":true,
						"pagingType": "simple_numbers",
						"ordering": false,
						"mark": true,
						"dom":  
							'<"top"Aflp>rt<"bottom"ip><"clear">',
						"columns": [
							{"title": "Term"},
							{"title": "Definition"}
						],
						/*"dom": 'Alfrtip',*/
					        "alphabetSearch": {
						 	column: 0
					      	},
						
					      	"initComplete": function( settings, json ){
						 	      
					      	},
						"drawCallback": function(){
							}					
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
	.dataTables_wrapper .dataTables_filter {
	   float: left !important;
	   padding: 10px 0 0 0;
	}
	.dataTables_wrapper .dataTables_paginate{
		padding: 3px;
	}
	.dataTables_wrapper .dataTables_length {
		clear: both;		
		float: left;
	   	padding: 10px 0 0 0;
	}	
	.dataTables_wrapper .dataTables_length select {
		width: auto;
	}
	table.dataTable tbody tr.alphabet-group td{
		padding: 4px 0px 4px 5px;
		font-size: 13px;
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
