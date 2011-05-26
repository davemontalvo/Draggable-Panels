<?php
/**
 * Creates a Panel
 */
class Panel {
	private $panel_type;
	private $panel_content;
	
	function __construct($panel_type){
		$this->panel_type = $panel_type;
	}
	
	/*
	 * Draw the panel <li></li> on the screen
	 */
	function drawPanel(){
		$content = str_replace(" ", "_", $this->panel_type);
		$panel_class = $content."_PanelContent";
		$this->panel_content = new $panel_class;
		$panel_title = $this->getPanelTitle($this->panel_type);		
		?>
			<li class="myList" id="<?=$content?>_panel">
			<div class="myBox">
			<!--My work area-->
			<div class="myBoxHandle"><b><?=$panel_title?></b></div>	
			<!--end of work area-->
				<div class="PanelContentArea" id="<?=$content?>">
				<?=$this->panel_content->getData()?>
				</div>
			</div>
			</li>		
		<?php
	}
	
	function drawEmptyPanel($column){
		?>
		<li class="myListEmpty" id="<?=$column?>_empty_panel"></li>
		<?php
	}
	
	function getPanelTitle($type){
		return $type;
	}
	
}
?>
