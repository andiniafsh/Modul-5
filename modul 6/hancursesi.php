<?php
 session_start();
 echo $_SESSION['var_session1']='';
 echo $_SESSION['var_session2']="";
 session_destroy();
?>