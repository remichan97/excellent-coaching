<?php if(isset($_GET['request'])) {
    switch ($_GET['request']) {
        case 'detail':
            include "./view/coursedetail.php";
        break;
        case 'home':
            include "./view/home.php";
            break;
    }
} else {
    include "./view/home.php";
}
?>