<?php
$serverName = "nhanvotri.mssql.somee.com";
$connectionInfo = array(
    "Database" => "nhanvotri",
    "UID" => "nhanvt162_SQLLogin_1",
    "PWD" => "xnhtccks2v",
    "CharacterSet" => "UTF-8",
    "TrustServerCertificate" => true
);

$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn) {
    die("Connection failed: " . print_r(sqlsrv_errors(), true));
}
?>