<?php
date_default_timezone_set("america/el_salvador");
$fecha_us=date("l d f y");
$fecha_es=date("d-m-y");
$hora_12=date("h:i a");
$hora_24=date("h:i");
$fecha_completa=date("l d f y h:i a");
echo $fecha_completa;