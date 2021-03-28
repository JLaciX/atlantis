<?php 
$content = file_get_contents($_POST['x']); 
$url = parse_url($_POST['x'], PHP_URL_HOST);
$protocol = parse_url($_POST['x'], PHP_URL_SCHEME); 
$full = $protocol."://".$url."/";
//var_dump( parse_url("https://www.pizzatabor.hu/#kinalatunk"));
//echo $_POST['x'];
//$content = str_replace(['src="/',"src='/"],['src="'.$_POST['x'],"src='".$_POST['x']],$content);
$content = str_replace(['src="/',"src='/"],['src="'.$_POST['x'],"src='".$_POST['x']],$content);
$content = str_replace(['href="/',"href='/"],['href="'.$full,"href='".$full],$content);
$content = str_replace(['script',"script"],['p style="display:none"',"p style='color:green'"],$content);
//$pattern = "/<script ?.*>(.*)<\/script>/";
//preg_replace($pattern, 'W3Schools', $content);
echo $content;?>