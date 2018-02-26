<?php
setcookie("SET BY THIS PAGE", "This is a diagnostic cookie.");
?>
<head>
    <title>HTTP Request Diagnostic Page</title>
    <style type="text/css">
        p { color: black; font-weight: bold; font-size: 110%; font-family: arial}
        .title { color: black; font-weight: bold; font-size: 110%; font-family: arial}
        .text {font-weight: normal; font-size: 90%;}
        TD { color: black; font-size: 100%; font-family: courier; vertical-align: top;}
        .column_title { color: black; font-size: 100%; background-color: eeeeee; font-weight: bold; font-family: arial}
    </style>
</head>

<p class="title">Webbot Diagnostic Page</p>
<p class="text">This web page is a tool to diagnose webbot functionality by examining what the webbot sends to webservers.
<table border="1" cellspacing="0" cellpadding="3" width="800">
    <tr class="column_title">
        <th width="25%">Variable</th>
        <th width="75%">Value sent to server</th>
    </tr>
    <tr>
        <td>HTTP Request Method</td><td><?echo $_SERVER["REQUEST_METHOD"];?></td>
    </tr>
    <tr>
        <td>Your IP Address</td><td><?echo $_SERVER["REMOTE_ADDR"];?></td>
    </tr>
    <tr>
        <td>Server Port</td><td><?echo $_SERVER["SERVER_PORT"];?></td>
    </tr>
    <tr>
        <td>Referer</td>
        <td><?php
            if(isset($_SERVER['HTTP_REFERER']))
                echo $_SERVER['HTTP_REFERER'];
            else
                echo "Null<br>";
            ?>
        </td>
    </tr>
    <tr>
        <td>Agent Name</td>
        <td><?php
            if(isset($_SERVER['HTTP_USER_AGENT']))
                echo $_SERVER['HTTP_USER_AGENT'];
            else
                echo "Null<br>";
            ?>
        </td>
    </tr>
    <tr>
        <td>Get Variables</td>
        <td><?php
            if(count($_GET)>0)
                var_dump($_GET);
            else
                echo "Null";
            ?>
        </td>
    </tr>
    <tr>
        <td>Post Variables</td>
        <td><?php
            if(count($_POST)>0)
                var_dump($_POST);
            else
                echo "Null";
            ?>
        </td>
    </tr>
    <tr>
        <td>Cookies</td>
        <td><?php
            if(count($_COOKIE)>0)
                var_dump($_COOKIE);
            else
                echo "Null";
            ?>
        </td>
    </tr>
</table>
<p class="text">This web page also sets a diagnostic cookie, which should be visible the second time you access this page.</p>