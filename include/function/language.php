<?php 
	$loged="0";
	
	if ($loged == 0)
	{
		$detect_lang=locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
		if($detect_lang == "fr_FR"){ $_user_lang="fr"; }
		elseif($detect_lang =="en_US"){ $_user_lang="en"; }
		else{ $_user_lang="en"; }
	}
	else
	{
		
	}
?>