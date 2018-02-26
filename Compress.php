<?php
include("libs\LIB_http.php");
# Get web page
$target = "http://goldensoap.page.tl/";
$ref = "";
$method = "GET";
$data_array = "";
$web_page = http_get($target, $ref, $method, $data_array, EXCL_HEAD);
# Get sizes of compressed and uncompressed versions of web page
$uncompressed_size = strlen($web_page['FILE']);
$compressed_size = strlen(gzcompress($web_page['FILE'], 
   $compression_value = 9));
$noformat_size = strlen(strip_tags($web_page['FILE']));
# Report the sizes of compressed and uncompressed versions of web page
?>
<html><body><p></p>
<table border="1">
<tr><th colspan="3">Compression report for <?php echo $target; ?></th></tr>
<tr><th>Uncompressed</th><th>Compressed</th></tr>
<tr><td align="right"><?php echo $uncompressed_size; ?> bytes</td>
<td align="right"><?php echo $compressed_size; ?> bytes</td>
</tr> </table>
</body></html>