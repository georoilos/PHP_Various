<?php
include("libs\LIB_http.php"); include("libs\LIB_parse.php");
# Request the login page
$domain = "http://www.schrenk.com/";
$target = $domain."nostarch/webbots/query_authentication";
$page_array = http_get($target, $ref="");
echo $page_array['FILE']; // Display the login page
sleep(2); // Include small delay between page fetches
echo "<hr>";
# Send the query authentication form
$login = $domain."nostarch/webbots/query_authentication/index.php";
#$login = $domain."nostarch/webbots/form_analyzer.php";
$data_array['enter'] = "Enter";
$data_array['username'] = "webbot";
$data_array['password'] = "sp1der3";
$page_array = http_post_form($login, $ref=$target, $data_array);
echo $page_array['FILE']; // Display first page after login page
sleep(2); // Include small delay between page fetches
echo "<hr>";
# Parse session variable
$session = return_between($page_array['FILE'],"session=","\"",EXCL);
# Request subsequent pages using the session variable
$page2 = $target . "/index2.php?session=".$session;
$page_array = http_get($page2, $ref="");
echo $page_array['FILE']; // Display page two
?>