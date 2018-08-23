<?php 

class vista{
	
	function html($vista){
		$html = file_get_contents('../Vista/'.$vista.'.html');
		return $html;
	}
}



?>