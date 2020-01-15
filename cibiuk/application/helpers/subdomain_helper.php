<?php

function subdomain(){
	$url = current_url();
	$url = rtrim("$url","/");
	$url = explode("/","$url");
	$subdomain = end($url);
	if (end($url)=="index") {
		$subdomain = prev($url);
		$subdomain = prev($url);
	}elseif(end($url)=="home"||end($url)=="admin"){
		$subdomain = prev($url);
	}
	return $subdomain;
}