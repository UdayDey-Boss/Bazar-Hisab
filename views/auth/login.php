<?php
// views/auth/login.php
require_once 'config/lang.php';
?>
<!DOCTYPE html>
<html lang="<?php echo current_lang(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo __('login'); ?> - <?php echo __('app_name'); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="auth-box">
            <h2><?php echo __('app_name'); ?></h2>
            <h3><?php echo __('login'); ?></h3>
            
            <?php if(isset($_GET['error'])): ?>
                <div class="alert alert-danger"><?php echo __('email_or_password_wrong'); ?></div>
            <?php endif; ?>
            <?php if(isset($_GET['registered'])): ?>
                <div class="alert alert-success"><?php echo __('account_created'); ?></div>
            <?php endif; ?>

            <form action="index.php?action=login" method="POST">
                <div class="form-group">
                    <label><?php echo __('email'); ?></label>
                    <input type="email" name="email" value="<?php echo $_COOKIE['user_email'] ?? ''; ?>" required>
                </div>
                <div class="form-group">
                    <label><?php echo __('password'); ?></label>
                    <input type="password" name="password" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember"><?php echo __('remember_me'); ?></label>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo __('login'); ?></button>
            </form>
            <p><?php echo __('no_account'); ?> <a href="index.php?action=register"><?php echo __('register_now'); ?></a></p>
        </div>
    </div>
    <script src="assets/js/lang.js"></script>
</body>
</html>