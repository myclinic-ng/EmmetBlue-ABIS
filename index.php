<?php
function enroll($name, $files){
	$file = implode(",", $files);

	$cmd = "\"./bin/blue.exe\" enroll \"$file\" \"$name\" \"DEMO\" \"SAMUELS-PC\" \"sa\" \"root\" \"EmmetBlue\" \"[Biometrics].[Humanity]\"";

	$str = exec($cmd, $result);

	print_r($result);
}

function identify($file){
	$cmd = "\"./bin/blue.exe\" identify \"$file\" \"DEMO\" \"SAMUELS-PC\" \"sa\" \"root\" \"EmmetBlue\" \"[Biometrics].[Humanity]\" 20.0";
	
	$str = exec($cmd, $result);

	print_r($result);

}

enroll("Dex Right", [
	"C:/emmetblue/src/bin/fpcache/capture.jpg"
]);


// identify("./bin/img/jide.jpg");
identify("C:/emmetblue/src/bin/fpcache/capture.jpg");