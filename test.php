<?php
$co_str = 'micgdx.mic.com.tw:1531/MICGDX';
$co_user = "eshopastst";
$co_pass = "eshopastst";
$connection = oci_connect($co_user, $co_pass, $co_str);

// $resourse = oci_parse($connection, "select * from MOM_SO_UPLOAD_IFACE where rownum < 5");
// $results = oci_execute($resourse);
// while ($row = oci_fetch_array($resourse)) {
//     echo "<pre>";
//     var_dump($row);
//     echo "</pre>";
// }

// $resourse = oci_parse($connection, "describe MINV_ESHOP_ONHAND_V;");
// $results = oci_execute($resourse);
// $results = oci_execute($resourse, OCI_DESCRIBE_ONLY);
// for ($i = 0 ; $i < oci_num_fields($resourse) ; $i++) {
//     echo "<pre>";
//     echo "N:".oci_field_name($resourse, $i).",T:".oci_field_type($resourse, $i);
//     echo "</pre>";
// }



$bind_datas = array(
  "ESHOP_ORDER_NUMBER"=>"'SO-100000025-'",
  "ORDER_LEVEL"=>"'H'",
  "ORDER_DATE"=>"02/08/2017",
  "ORACLE_CUSTOMER_NUMBER"=>"'AUWOR02'",
  "BILL_TO_FLAG"=>"'Y'",
  "SHIP_TO_FLAG"=>"'Y'",
  "ADDRESS1"=>"'行善路, 385號'",
  "ADDRESS2"=>"''",
  "POSTAL_CODE"=>"''",
  "CITY"=>"'台北市'",
  "STATE"=>"''",
  "COUNTRY"=>"'Australia'",
  "ORDER_TYPE"=>"'E-Shop(NavAU)'",
  "SALESPERSON"=>"'N0001'",
  "PRICE_LIST_NAME"=>"'Price List for NAVSTORE'",
  "FOB_CODE"=>"'CIF'",
  "SHIP_METHOD"=>"'Belgium Post'",
  "ORGANIZATION_CODE"=>"'NAS'",
  "CURRENCY"=>"'AUD'",
  "PAYMENT_TERM"=>"'IMMEDIATE'",
  "TELEPHONE"=>"",
  "FAX"=>"0900000000",
  "CONTACT_NAME"=>"'Peter Test'",
  "E_MAIL"=>"'peter@astralwebinc.com'",
  "PROCESS_FLAG"=>null,
  "PROCESS_DATE"=>null,
  "ERROR_MESSAGE"=>null,
  "STORE_CODE"=>"'?????'",
  "DISCOUNT_CODE"=>"''",
  "DISCOUNT_AMT"=>208,
  "ORDER_STATUS"=>null,
  "DATA_SOURCE"=>"''",
  "DATA_DATE"=>"02/08/2017",
  "LAST_UPDATED_DATE"=>null
);

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

// $sql = "insert into MOM_SO_UPLOAD_IFACE (#erpcolumns#) values (#erpvalues#)";

// $compiled = oci_parse($connection, $sql);

// var_dump(oci_error($compiled));

// foreach ($bind_datas as $bind_key => $bind_value) {
// 	oci_bind_by_name($compiled, ":".$bind_key, $bind_value);
// }

// var_dump($compiled);

// oci_execute($compiled);

// var_dump(oci_error());

// oci_commit($compiled);

// var_dump(oci_error());
// echo "</pre>";

// $sql = "insert into MOM_SO_UPLOAD_IFACE 
// (ESHOP_ORDER_NUMBER,ORDER_LEVEL,ORDER_DATE,ORACLE_CUSTOMER_NUMBER,BILL_TO_FLAG,SHIP_TO_FLAG,ADDRESS1,ADDRESS2,POSTAL_CODE,CITY,STATE,COUNTRY,ORDER_TYPE,SALESPERSON,PRICE_LIST_NAME,FOB_CODE,SHIP_METHOD,ORGANIZATION_CODE,CURRENCY,PAYMENT_TERM,TELEPHONE,FAX,CONTACT_NAME,E_MAIL,PROCESS_FLAG,ERROR_MESSAGE,STORE_CODE,DISCOUNT_CODE,DISCOUNT_AMT,ORDER_STATUS,DATA_SOURCE,DATA_DATE) 
// values 
// ('SO-100000025-','H','02/08/2017','AUWOR02','Y','Y','行善路, 385號','','','台北市','','Australia','E-Shop(NavAU)','N0001','Price List for NAVSTORE','CIF','Belgium Post','NAS','AUD','IMMEDIATE','0900000000','0900000000','Peter Test','peter@astralwebinc.com',null,null,'?????','',208,null,'','02/08/2017')";

$sql = "insert into MOM_SO_TEST 
(ESHOP_ORDER_NUMBER,ORDER_LEVEL) 
values 
('SO-100000025-','H')";

$compiled = oci_parse($connection, $sql);

oci_execute($compiled);

var_dump(oci_error($compiled));