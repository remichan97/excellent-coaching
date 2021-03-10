<?php if(isset($_GET['request'])) {
    switch ($_GET['request']) {
        case 'detail':
            include "./view/coursedetail.php";
        break;
        case 'contact':
            include "./view/contact.php";
        break;
        case 'people':
            include "./view/people.php";
        break;
    }
} else {
    include "./view/home.php";
}