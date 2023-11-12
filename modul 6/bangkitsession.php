<?php
  session_start();
  $_SESSION['var_session']='Masukkan Nama Anda';
  $_SESSION['var_session']='Masukkan No HP Anda';
  if((isset($_SESSION['var_session'])) and
  isset ($_SESSION['var_session2']))
  {
    echo " Session Baru Saja Dibuat";
  }
?>