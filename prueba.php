<?php
$archivo = "contador.txt"; 
$fp = fopen($archivo, "r+"); 
if (filesize($archivo)!=0){
	$old=fread($fp, filesize($archivo));
	
}else{
	$old="";
}
rewind($fp);
$old = $old +1;
fputs($fp, $old);
fclose($old);

for($i = 0; $i<strlen($old); $i++){
	$digito=substr($old, $i, 1);
	echo $digito;
}
?>