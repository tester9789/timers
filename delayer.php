<?php
$seconds = isset($_GET['seconds']) ? $_GET['seconds'] : 1;
sleep($seconds);
echo json_encode(array('delayed' => $seconds));

?>
