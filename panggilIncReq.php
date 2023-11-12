<?php
include('cobaIncReq.php');
salam();
include('cobaIncReq.php'); //Akan tetap dipanggil
echo('<br>  Batas Include----------------------------------------------------------------');
require('cobaIncReq.php');
salam();
require('cobaIncReq.php'); //Akan tetap dipanggil
?>