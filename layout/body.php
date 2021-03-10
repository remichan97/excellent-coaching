<?php if(isset($_GET['request'])) {
    switch ($_GET['request']) {
        case 'home':
            include "./view/home.php";
        break;
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