<?php
  include "./model/database.php";
  $key=$_GET['key'];
  $sql="select * from course where status = '1' and cName like '%$key%' or description like '%$key%'";
  $result='';
  $rs=mysqli_query($conn,$sql);
  if(mysqli_num_rows($rs) > 0){
    foreach($rs as $item){
      $result.="<p><a href='../courses?courseID=$item[cID]'>".$item['cName']."</a></p>";
    }
  }else{
    $result.="<p>Không tìm thấy khóa học dựa trên từ khóa đã nhập<p>";
  }
  echo $result;
?>