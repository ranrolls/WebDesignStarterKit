<?php 

$arRows = array();

while ($row_rsPackages = mysql_fetch_assoc($rsPackages)) {
  array_push($arRows, $row_rsPackages);
}

header('Content-type: application/json');
echo json_encode($arRows);

?>