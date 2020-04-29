<?php
function wordCount($s){
	echo(str_word_count($s));
}
function charCount($s,$c=NULL){
	echo(substr_count($s, $c));
}
?>