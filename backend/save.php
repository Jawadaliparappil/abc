<?php
session_start();
if (!isset($_SESSION['admin'])) {
  http_response_code(403);
  exit("Not authorized");
}
$file = '../data/teachers.csv';
$fp = fopen($file, 'a');
fputcsv($fp, [$_POST['name'], $_POST['subject'], $_POST['phone'], $_POST['email']]);
fclose($fp);
?>
