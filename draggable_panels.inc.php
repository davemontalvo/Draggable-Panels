<?php
include("Panel.php");
include("TestA_PanelContent.php");
include("TestB_PanelContent.php");
include("TestC_PanelContent.php");
include("TestD_PanelContent.php");

// creates panels with content and places them in left and right columns
function getColumns(){
	$left = Array();
	$right = Array();
	
	// create your Panels with content from TestX_PanelContent classes
	// new Panel("TestA") loads TestA_PanelContent into a new Panel
	// You can re-use a PanelContent class and pass an argument to change the content,
	// or create new PanelContent classes depending on your needs
	$left[] = new Panel("TestA");
	$left[] = new Panel("TestB");
	$right[] = new Panel("TestC");
	$right[] = new Panel("TestD");

	return array($left, $right);
}

// display columns with their panels
function drawPage($left_column, $right_column){
	$empty = new Panel("Empty");
	?>
	<div id="panel_container" class="panel_container">
		<div class="left_column">
			<ul class="myUL" id="left_ul">
			<?
				for ($i = 0; $i < count($left_column); $i++){
					$left_column[$i]->drawPanel();
				}
				$empty->drawEmptyPanel("left");
			?>
			</ul>
		</div>
		<div class="right_column">
			<ul class="myUL" id="right_ul">
			<?
				for ($i = 0; $i < count($right_column); $i++){
					$right_column[$i]->drawPanel();
				}				
				$empty->drawEmptyPanel("right");
			?>
			</ul>
		</div>
	</div> <!-- end panel_container -->
	<?	
}
?>
