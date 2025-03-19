<?php
$serverName = "sql_server";
$connectionOptions = array(
    "Database" => "master",
    "Uid" => "sa",
    "PWD" => "1StrongPwd!!"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
$sql = "SELECT * FROM SCDA01";
$stmt = sqlsrv_query($conn, $sql);
$data = [];
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $data[] = $row;
}
header('Content-Type: application/json');
echo json_encode($data);
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
