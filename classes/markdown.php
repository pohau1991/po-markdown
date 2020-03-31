<?php

class MarkDown{
	
	protected $_string;

	public function __construct(String $str){
		$this->_string = $str;
	}

	public function displayMarkedDownString(){
		$tempString = str_replace(array("\r\n", "\r", "\n"), "<br />", $this->_string);

		$stringArray = explode('<br /><br />', $tempString);
		$finalString = '';
		
		foreach($stringArray as $sa){
			$finalString .= $this->lineTagFilter($this->anchorTagFilter($sa));
		}

		return $finalString;

	}
	public function lineTagFilter(String $str){
		$arr = explode(' ',trim($str));
		if(count($arr) > 1 || strlen($arr[0]) > 0){
			$lineTag = 'p';
			if(strpos($arr[0], '#') > -1 && preg_match('/^(.)\1*$/u', $arr[0]) && strlen($arr[0]) <= 6){
				$lineTag = 'h'.strlen(array_shift($arr));
			}

			return "<{$lineTag}>".implode(' ',$arr)."</{$lineTag}>";	
		}
		return $str;
	}

	public function anchorTagFilter(String $str){
		if (preg_match_all('#\[(.*?)\]\((.*?)\)#', $str, $matches)) {
		   	for($i = 0 ; $i < count($matches[0]); $i++){
		   	$replacement = '';
		   		for($y = count($matches); $y > 0; $y--){
		   			$yIndex = $y-1;
		   			switch($yIndex){
		   				case 2:
		   					$replacement .="<a href='{$matches[$yIndex][$i]}'>";	
		   					break;
		   				case 1:
		   					$replacement .="{$matches[$yIndex][$i]}</a>";
		   					break;
		   				case 0:
		   					$str = str_replace($matches[$yIndex][$i], $replacement, $str);
		   					break;

		   			}
		   		}
		   }
		}
		return $str;
	}
}

?>