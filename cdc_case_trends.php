<?php
// output to the browser

$content = file_get_contents("https://covid.cdc.gov/covid-data-tracker/COVIDData/getAjaxData?id=us_compare_trends_data") or die("ERROR: Cannot open the file.");

header('Content-Type: text/json; charset=UTF-8');

echo ($content);
?>
