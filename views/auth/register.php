<?php
// views/auth/register.php
require_once 'config/lang.php';
?>
<!DOCTYPE html>
<html lang="<?php echo current_lang(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo __('register'); ?> - <?php echo __('app_name'); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="auth-box">
            <h2><?php echo __('app_name'); ?></h2>
            <h3><?php echo __('register'); ?></h3>

            <form action="index.php?action=register" method="POST">
                <div class="form-group">
                    <label><?php echo __('your_name'); ?></label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label><?php echo __('email'); ?></label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label><?php echo __('password'); ?></label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo __('register'); ?></button>
            </form>
            <p><?php echo __('have_account'); ?> <a href="index.php?action=login"><?php echo __('login_now'); ?></a></p>
        </div>
    </div>
    <script src="assets/js/lang.js"></script>
</body>
</html>