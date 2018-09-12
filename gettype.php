<?php
$data = array(1, 1.0, NULL, new stdClass, 'foo');
foreach ($data as $value) {
    echo gettype($value), "\n";
}
?>