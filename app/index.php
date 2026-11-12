<?php 
require 'controller/control.php';
include __DIR__ . '/view/share/header.php';

$data = new Telma();
$data->telmaManager();
include __DIR__ . '/view/share/footer.php';
?>