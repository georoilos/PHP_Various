<?php
# Define target page
$target = "http://www.schrenk.com/nostarch/webbots/cookie_authentication/index.php";
# Define the login form data
$form_data="enter=Enter&username=webbot&password=sp1der3";
# Create the cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target); // Define target site
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Return page in string
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookies.txt"); 
                              // Tell cURL where to write cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookies.txt"); 
                              // Tell cURL which cookies to send
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $form_data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); // Follow redirects
# Execute the PHP/CURL session and echo the downloaded page
$page = curl_exec($ch);
echo $page;
# Close the cURL session
curl_close($ch);
?>