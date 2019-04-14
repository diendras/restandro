<?php
 include "db.php";
 if(isset($_GET['id_bengkel']))
 {
 $id_bengkel=$_GET['id_bengkel'];
 $q=mysqli_query($con,"delete from `tb_product` where `id_bengkel`='$id_bengkel'");
 if($q)
 echo "success";
 else
 echo "error";
 }
