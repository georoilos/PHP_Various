<?php
# Define target page
$target = "http://www.schrenk.com/nostarch/webbots/
									basic_authentication/index.php";
# Define login credentials for this page
$credentials = "webbot:sp1der3";
# Create the cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target); // Define target site
curl_setopt($ch, CURLOPT_USERPWD, $credentials); // Send credentials
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Return page in string
# Echo page
$page = curl_exec($ch); // Place web page into a string
echo $page; // Echo downloaded page
# Close the cURL session
curl_close($ch);
?>