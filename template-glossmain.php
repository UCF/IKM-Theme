<?php
/**
 * Template Name: Glossary-Main
 **/
?>
<?php get_header(); ?>
    <div class="container">
	
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/ikmtheme/third-party/glossary.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/v/dt/dt-1.10.18/fh-3.1.4/datatables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.es6.min.js"></script>	
	<script src="https://cdn.jsdelivr.net/gh/julmot/datatables.mark.js@2.0.1/dist/datatables.mark.es6.min.js"></script>
	<script>
//var url = 'https://ucf.datacookbook.com/institution/terms/list?un=apiuser&pw=3Si2LFc1oNIK&requestType=list&outputFormat=xml&html_definition=true&functionalArea=institutional+knowledge+management&status=latest_approved'
//var url = 'https://randomuser.me/api/?results=5'


$(document).ready(function() {
		$.ajax({            
			xhrFields: {
				withCredentials: true
			},
			type: "GET",
            		url: 'http://forms.ikm.ucf.edu/cookbook/glossary.php',
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
						var row = [ sTitle, sDefinition ]
						definitions.push(row);
						
					
						/*var nameText = document.createTextNode(sTitle);
						//var defText = document.createTextNode(sDefinition); 
						//defText.innerHTML = sDefinition;
						
						var cell = document.createElement('td');
						var a = document.createElement('a');
						a.appendChild(nameText);
						a.title = sTitle;
						a.href = sUrl;
						a.setAttribute("target","_blank");
						cell.appendChild(a);
						row.appendChild(cell);
						//cell.style.width = '10%';
						
						var cell = document.createElement('td');
						cell.innerHTML = sDefinition;
						//cell.appendChild(defText);
						row.appendChild(cell);
						//cell.style.width = '70%';
					

						elem.appendChild(row);*/
				   
					});
					
					JSON.stringify(definitions);
					console.log(definitions);
					
					$('#main').DataTable({
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
