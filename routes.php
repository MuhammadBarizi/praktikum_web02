<?php
if(isset($_GET['page'])) { //masukan
  $page = $_GET['page'];
}
else {
  $page = "";
}

switch($page) {  
  case"beranda" : include "pages/beranda.php";
  break;
  case"tentangsaya" : include "pages/tentang-saya.php";
  break;
  case"test" : include "pages/test.php";
  break;
  default: include "pages/kampus.php";
}



?>