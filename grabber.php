<?php 
$content = file_get_contents($_POST['x']); 
//$content = str_replace(['src="/',"src='/"],['src="'.$_POST['x'],"src='".$_POST['x']],$content);
//$content = str_replace(['src="/',"src='/"],['src="'.$_POST['x'],"src='".$_POST['x']],$content);
$content = str_replace(['href="/',"href='/"],['href="'.$_POST['x'],"href='".$_POST['x']],$content);
$content = str_replace(['script',"script"],['p style="display:none"',"p style='color:green'"],$content);
//$pattern = "/<script ?.*>(.*)<\/script>/";
//preg_replace($pattern, 'W3Schools', $content);
echo $content;?>