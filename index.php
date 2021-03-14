<?php
session_start();
include "./model/database.php";
$c = mysqli_query($conn, "select distinct a.catID, catName from course a join category b on a.catID = b.catID where status");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Excellent Coaching Vietnam</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/project-1.css">
    <script>
    var xmlhttp;
    function getSearch(a){
      xmlhttp=GetXmlHttpObject();
      null==xmlhttp?alert("Trình duyệt không hỗ trợ HTTP Request"):(xmlhttp.onreadystatechange=stateChanged,xmlhttp.open("GET","getData.php?key="+a,!0),xmlhttp.send(null))
    }
    function stateChanged(){
      4==xmlhttp.readyState&&(document.getElementById("result").innerHTML=xmlhttp.responseText)
    }
    function GetXmlHttpObject(){
      return window.XMLHttpRequest?new XMLHttpRequest:window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):null
    }
  </script>
</head>

<body class="home">
    <section class="site-wrapper">
        <?php include "./layout/header.php" ?>
        <?php include "./layout/body.php" ?>
        <?php include "./layout/map.php" ?>
        <?php include "./layout/footer.php" ?>
        <?php include "./layout/background.php" ?>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>