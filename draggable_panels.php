<html>
<head>
<title>Draggable Panels</title>

<link rel="stylesheet" type="text/css" href="css/panels.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
</head>
<body>
<center>

<?php
include("draggable_panels.inc.php");
?>
<script type="text/javascript">
$(document).ready(function(){
	$('div.myBoxHandle').css({cursor:"move"});
	$("#panel_container").sortable({ 
		items: 'li', 
		revert: true, 
		placeholder: 'holdercss', 
		forcePlaceholderSize: 'true',
		cursor: 'move',
		handle: $(".myBoxHandle"), 
		update: function(e, ui) { 
			var order = "";
			var left_list_items = $("#left_ul").children();
			for(var x=0; x<left_list_items.length; x++) {
				if (left_list_items[x].id == "left_empty_panel")
					continue;
				order  += "left:"+left_list_items[x].id+",";
			}
			var right_list_items = $("#right_ul").children();
		    for(var x=0; x<right_list_items.length; x++) {
				if (right_list_items[x].id == "right_empty_panel")
					continue;		        
		        order  += "right:"+right_list_items[x].id+",";
		    }
		}});	
});
</script>
<?php

// create the columns with their panels and panel content
$columns = getColumns();
$left_column = $columns[0];
$right_column = $columns[1];

// display columns of panels
drawPage($left_column, $right_column);
?>
</center>
</body>
</html>