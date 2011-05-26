<?php
/**
 * Creates content to display in a Panel
 */
class TestB_PanelContent{
	
	function __construct(){
		
	}
	
	function getData(){
		?>
		<script>
		$(document).ready(function(){
			$('tr.link_row').css({cursor:"pointer"}).click(function(){
				window.location=this.id;
			});	
			$('tr.link_row').hover( 
				function(){
		    		$(this).addClass("linkHover");
				},
				function(){
		     		$(this).removeClass("linkHover");
				});

		});	
		</script>
		<table class="panel_content">
		<tr class="link_row" id="http://www.google.com">
		<td>
		TestB Link To Google
		</td>
		</tr>
		<tr class="link_row" id="http://www.yahoo.com"><td>
		TestB Link To Yahoo
		</td></tr>

		</table>
		<?php	
	}	
}
?>
