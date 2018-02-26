<?php
include("libs/LIB_parse.php"); # Include parse library
include("libs/LIB_http.php"); # Include PHP/CURL library
// Download the page
$web_page = http_get($target="http://www.pals.gr", $referer="");
// Remove all JavaScript
$noformat = remove($web_page['FILE'], "<script", "</script>");
// Strip out all HTML formatting
$formatted = strip_tags($noformat);
// Remove Special characters
$formatted = str_replace("\t", "", $formatted); // Remove tabs
$formatted = str_replace("&nbsp;", "", $formatted); // Remove &nbsp
$formatted = str_replace("\n", "", $formatted); // Remove line feeds
// Removes White Space
echo $formatted;
//Write file
$file = fopen("clean.txt","w");
echo fwrite($file,$formatted);
fclose($file);
?>