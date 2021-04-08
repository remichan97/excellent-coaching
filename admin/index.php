<?php if (!isset($_SESSION)) {
    session_start();
}
?>
<?php if(!isset($_SESSION['user'])): //chỉ hiển thị form login nếu trc đó chưa có ai Sign in vào?> 
<?php include "../admin/loginprocedure.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign in to the Control Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <div class="login-form">
        <form method="post">
            <?php include "../admin/failedlogin.php" ?>
            <h2 class="text-center">Sign in</h2>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required="required" name="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="required" name="pw">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="login">Sign in</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php else:?>
<?php header("Location: " . "../admin/cpanel") //nếu có ai Sign in rồi thì chuyển hướng sang trang admin luôn, không Sign in nữa?>
<?php endif;?>