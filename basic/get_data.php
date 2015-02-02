<?php

$data_type = $_GET['type'];
$result = null;

if ($data_type === 'vertex') {
    $result = pack('f*', 0,   0.8,   0,
                        0.5,  -0.2,  0,
                        -0.5, -0.2,  0);
} else if ($data_type === 'indice') {
    $result = pack('v*', 0, 1, 2); // 'n' little endian; 'v' big endian
}

header('Content-type: application/octet-stream');
header('access-allow-origin: *');
echo $result;

?>