<?php
// Create connection to Oracle

ini_set('display_errors', 1);

$conn = oci_connect("eshopastst", "eshopastst", "micgdx.mic.com.tw:1531/MICGDX");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   print "Connected to Oracle!";
}
// Close the Oracle connection
oci_close($conn);
?>
