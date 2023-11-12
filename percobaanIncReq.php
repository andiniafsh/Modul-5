<?php
require_once ('cobaIncReq.php');
salam();
require_once('cobaIncReq.php');//tidak akan dipanggil
echo('<br> Batas require_once -----------');
include_once('cobaIncReq.php');
salam();
include_once('cobaIncReq.php');//tidak akan dipanggil
?>