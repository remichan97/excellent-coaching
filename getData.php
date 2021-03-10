<?php
  include "./model/database.php";
  $key=$_GET['key'];
  $sql="select * from course where cName like '%$key%'";
  $result='';
  $rs=mysqli_query($conn,$sql);
  if($rs!=null){
    foreach($rs as $item){
      $result.="<section><a href='../courses?courseID=$item[cID]'>".$item['cName']."</a></section>";
    }
  }else{
    $result="Không tìm thấy sản phẩm";
  }
  echo $result;
?>