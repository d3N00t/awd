<?php
function Submitted($token,$flag){
	$filepath="./submitted/".$token.'.txt';
	$teamFalg=fopen($filepath,'a+');
	$Textcontent=fread($teamFalg,filesize($filepath));
	if(Checkstr($Textcontent,$flag)){
		return true;
	}
	else{
		fwrite($teamFalg, $flag);
		return false;
	}
};
//Submitted($token,$flag);

function Checkstr($str,$flag){
 $needle =$flag;//判断是否包含a这个字符
 $tmparray = explode($needle,$str);
 if(count($tmparray)>1){
 return true;
 } else{
 return false;
 }
}; 

?>
