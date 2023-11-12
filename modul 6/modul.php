<?php
$halaman=$_GET['page'];//mengakses variable YRL
if($halaman=="home"){
    include("depan.php");
}elseif($halaman=="profile")
{include("profile.php");}
else if ($halaman=="galeri")
{include("galeri.php");}
?>