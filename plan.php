<?php

$line2 = 22;
$line4 = 18;
$line7 = 22;
$line8 = 22;
$line5 = 18;
$line3 = 18;
$line6 = 18;
$line1 = 18;
$extra = 25;

$run_90 = $_POST['run_90'];
$run_180 = $_POST['run_180'];
$run_750 = $_POST['run_750'];

$bottles_90 = $_POST['bottles_90'];
$bottles_190 = $_POST['bottles_190'];
$bottles_750 = $_POST['bottles_750'];

$total_labour = $_POST['total_labour'];

$input = $_POST['input'];


if($run_90==true) {
	if($bottles_90>140000){
		$run_line2 = "RUN";
	}
	else{
		$run_line2 = "Bottle Sortage";
	}
}
else{
	$run_line2 = "Don't run";
}


if($run_90==true) {
	if($bottles_90>140000){
		if (a25>0) {
			$run_line4 = "RUN";
		}
		else{
			$run_line4 = "Not Required";
		}
	}
	else{
		$run_line4 = "Bottle Sortage";
	}
}
else{
	$run_line4 = "Don't run";	
}


if($run_750==true){
	if($bottles_750>1500){
		$run_line1 = "RUN";
	}
	else {
		$run_line1 = "No Bottle";
	}
}
else{
	$run_line1 = "No";
}


if ($run_line1 == "RUN") {
	$labour_for_90_180 = $total_labour - $line1 - $extra;
}
else {
	$labour_for_90_180 = $total_labour - $extra;
}


if($run_line2 == "RUN") {
	$labour_for_4 = $labour_for_90_180 - $line2;
}
else {
	$labour_for_4 = $labour_for_90_180;
}


if($run_line4 == "RUN") {
	$labour_for_180 = $labour_for_4 - $line4;
}
else {
	$labour_for_180 = $labour_for_4;
}


if($labour_for_180>$line7){
	$run_line7 = "RUN";
}
else{
	$run_line7 = "Labour Sortage";
}


if($run_line7 == "RUN7") {
	$after_7 = $labour_for_180 - $line7;
}
else {
	$after_7 = 0;
}


if($after_7>$line8){
	$run_line8 = "RUN";
}
else{
	$run_line8 = "Labour Sortage";
}


if($run_line8 == "RUN") {
	$after_8 = $after_7 - $line8;
}
else {
	$after_8 = 0;
}


if($after_8>$line5){
	$run_line5 = "RUN";
}
else{
	$run_line5 = "Labour Sortage";
}


if($run_line5 == 1) {
	$after_5 = $after_8 - $line5;
}
else {
	$after_5 = 0;
}


if($after_5>$line3){
	$run_line3 = "RUN";
}
else{
	$run_line3 = "Labour Sortage";
}


if($run_line3 == 1) {
	$after_3 = $after_5 - $line3;
}
else {
	$after_3 = 0;
}


if($run_line2=="RUN"){
	$input = $input - 750;
}
else{
	$input = 0;
}


if($run_line4=='Not Required'){
	$run_line6 = "Run Full Day";
}
else{
	if ($input<300) {
		$run_line6 = 'Run Half Day';
	}
	else{
		$run_line6 = "Don't Run";
	}
}


echo "Run Line 1". $run_line1. "<br>";

echo "Run Line 2". $run_line2. "<br>";

echo "Run Line 3". $run_line3. "<br>";

echo "Run Line 4". $run_line4. "<br>";

echo "Run Line 5". $run_line5. "<br>";

echo "Run Line 6". $run_line6. "<br>";

echo "Run Line 7". $run_line7. "<br>";

echo "Run Line 8". $run_line8. "<br>";

?>