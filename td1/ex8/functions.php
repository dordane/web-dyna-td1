<?php

function un($s){
	echo(ucfirst($s));
}
function de($s){
	echo(strtoupper($s));
}
function tr($s){
	echo(strtolower($s));
}
function qr($s){
	echo(nl2br($s));
}
function ci($s){
	echo(sha1($s));
}
function sx($s){
	echo(md5($s));
}
function se($s){
	echo(ucwords($s));
}
function hu($s){
	echo(convert_uuencode($s));
}
function ne($s){
	echo(htmlentities($s));
}
function di($s){
	echo(wordwrap($s,3,"<br />\n"));
}
?>