<?php
$csv = array_map('str_getcsv', file('../data/teachers.csv'));
$headers = array_shift($csv);
$data = array();
foreach ($csv as $row) {
  $data[] = array_combine($headers, $row);
}
header('Content-Type: application/json');
echo json_encode($data);
?>
