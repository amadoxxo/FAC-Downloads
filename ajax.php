<?php
/**
 * 
 * 
* @param integer $status
* @param string $msg
* @param array $data
* @return void
*/
function json_output($status = 200, $msg = 'OK', $data = null) {
    header('Content-Type: application/json');
    echo json_encode([
        'status' => $status,
        'msg' => $msg,
        'data' => $data
    ]);
    die;
}

if (!isset($_FILES['file'])) {
    json_output(403, 'Archivo no valido.'); 
}

$file = $_FILES['file'];
$path = 'uploads/';

if (!is_dir($path)) {
    mkdir($path);
}

$uploaded = move_uploaded_file($file['tmp_name'], $path.$file['name']);
if (!$uploaded) {
    json_output(400, 'Hubo un error al subir el archivo.');
}

json_output(200, 'Archivo subido con éxito', $path.$file['name']);