<?php
$co_str = 'micgdx.mic.com.tw:1531/MICGDX';
$co_user = "eshopastst";
$co_pass = "eshopastst";
$connection = oci_connect($co_user, $co_pass, $co_str);

// $resourse = oci_parse($connection, "select * from MOM_SO_UPLOAD_IFACE");
$resourse = oci_parse($connection, "select ESHOP_ORDER_NUMBER, ORDER_LEVEL from MOM_SO_TEST");
$results = oci_execute($resourse);
while ($row = oci_fetch_array($resourse)) {
    echo "<pre>";
    var_dump($row);
    echo "</pre>";
}

// $resourse = oci_parse($connection, "describe MINV_ESHOP_ONHAND_V;");
// $results = oci_execute($resourse);
// $results = oci_execute($resourse, OCI_DESCRIBE_ONLY);
// for ($i = 0 ; $i < oci_num_fields($resourse) ; $i++) {
//     echo "<pre>";
//     echo "N:".oci_field_name($resourse, $i).",T:".oci_field_type($resourse, $i);
//     echo "</pre>";
// }



// $bind_datas = array(
//   "ESHOP_ORDER_NUMBER"=>"SO-100000020-",
//   "ORDER_LEVEL"=>"H",
//   "ORDER_DATE"=>"02/08/2017",
//   "ORACLE_CUSTOMER_NUMBER"=>"AUWOR02",
//   "BILL_TO_FLAG"=>"Y",
//   "SHIP_TO_FLAG"=>"Y",
//   "ADDRESS1"=>"行善路, 385號",
//   "ADDRESS2"=>"",
//   "POSTAL_CODE"=>NULL,
//   "CITY"=>"台北市",
//   "STATE"=>NULL,
//   "COUNTRY"=>"Australia",
//   "ORDER_TYPE"=>"E-Shop(NavAU)",
//   "SALESPERSON"=>"N0001",
//   "PRICE_LIST_NAME"=>"Price List for NAVSTORE",
//   "FOB_CODE"=>"CIF",
//   "SHIP_METHOD"=>"Belgium Post",
//   "ORGANIZATION_CODE"=>"NAS",
//   "CURRENCY"=>"AUD",
//   "PAYMENT_TERM"=>"IMMEDIATE",
//   "TELEPHONE"=>NULL,
//   "FAX"=>"0900000000",
//   "CONTACT_NAME"=>" ",
//   "E_MAIL"=>NULL,
//   "PROCESS_FLAG"=>"",
//   "PROCESS_DATE"=>"",
//   "ERROR_MESSAGE"=>"",
//   "STORE_CODE"=>"?????",
//   "DISCOUNT_CODE"=>NULL,
//   "DISCOUNT_AMT"=>208.95,
//   "ORDER_STATUS"=>"",
//   "DATA_SOURCE"=>"",
//   "DATA_DATE"=>"02/08/2017 10:33:20",
//   "LAST_UPDATED_DATE"=>""
// );

// $sql = "insert into MOM_SO_UPLOAD_IFACE (#erpcolumns#) values (#erpvalues#)";
// $erpcolumns = "";
// $erpvalues = "";
// foreach ($bind_datas as $bind_key => $bind_value) {
// 	$erpcolumns .= $bind_key.",";
// 	$erpvalues .= ":".$bind_key.",";
// }
// $erpcolumns = mb_substr($erpcolumns, 0, mb_strlen($erpcolumns)-1);
// $erpvalues = mb_substr($erpvalues, 0, mb_strlen($erpvalues)-1);
// echo "<pre>";
// var_dump($sql);
// echo "<br>";
// $sql = str_replace("#erpcolumns#", $erpcolumns, $sql);
// $sql = str_replace("#erpvalues#", $erpvalues, $sql);
// var_dump($sql);
// echo "<br>";
// $compiled = oci_parse($connection, $sql);

// var_dump(oci_error($compiled));

// foreach ($bind_datas as $bind_key => $bind_value) {
// 	oci_bind_by_name($compiled, ":".$bind_key, $bind_value);
// }

// var_dump($compiled);

// oci_execute($compiled);

// // var_dump(oci_error());

// // oci_commit($compiled);

// // var_dump(oci_error());
// echo "</pre>";