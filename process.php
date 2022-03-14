<?php
$img = $_POST['image'];
$path = 'upload/';

$imPath = explode(";base64,", $img);
$img_type_aux = explode("image/", $imPath[0]);
$img_type = $img_type_aux[1];

$img_base64 = base64_decode($imPath[1]);
$img_name = uniqid() . '.png';

$file = $path . $img_name;
file_put_contents($file, $img_base64);

print_r($img_name);
?>