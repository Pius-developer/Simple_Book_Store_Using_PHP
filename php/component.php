<?php

function inputElement($icon,$placeholder,$name, $value){

	$element = '<div class="input-group mb-3">
				    <span class="input-group-text bg-warning" id="basic-addon1">'.$icon.'</span>
					  <input type="text" class="form-control" autocomplete="off" placeholder="'.$placeholder.'" name="'.$name.'" value ="'.$value.'" aria-label="Username" aria-describedby="basic-addon1">
				</div>';
echo $element;


}



function buttonElement($btnid,$styleclass,$text,$name,$attr){
	$button = '<button name = '.$name.' class ="'.$styleclass.'"  id='.$btnid.'  '.$attr.'>'.$text.'</button>';

	echo $button;
}

?>