<?php
namespace infrajs\contacts;
use infrajs\router\Router;
use infrajs\ans\Ans;
use infrajs\config\Config;
use infrajs\cache\Cache;


$conf = Config::get('recaptcha');
$ans = array(); 
if (empty($conf['off'])) {
	if (empty($conf['secret'])) return Ans::err($ans,'Для reCAPTCHA не указан secret.');
	if (empty($conf['sitekey'])) return Ans::err($ans,'Для reCAPTCHA не указан sitekey.');
	
} else {
	$ans['class']='bg-warning';
	return Ans::ret($ans, '<a href="https://www.google.com/recaptcha/intro/index.html">reCAPTCHA</a> отключена.');
}
return Ans::ret($ans);