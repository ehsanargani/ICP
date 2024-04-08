
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Core stylesheet files. REQUIRED -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap-rtl.css">

    <!-- Font Awesome -->
    <!-- WARNING: Font Awesome doesn't work if you view the page via file:// -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css">

    <!-- animate.css -->
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.css">
    <!-- END: core stylesheet files -->
    <!-- Theme main stlesheet files. REQUIRED -->
    <link rel="stylesheet" href="assets/css/chl-rtl.css">
    <link rel="stylesheet" href="assets/css/theme-peter-river-rtl.css">
    <!-- END: theme main stylesheet files -->

    <style media="screen">
        .app {
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>

<body class="bg-clouds">
<div class="app">
    <div class="app-login">
        <div class="text-center box shadow-5 animated fadeInLeft b-r-4 p-a-20">
            <h1 class="f-4 m-a-0"> </h1>
            <hr>
            <h4>ورود به سامانه</h4>
            <form class="form-horizontal login_form" method="POST" action="<?php echo e(route('login')); ?>" >
                <?php echo e(csrf_field()); ?>


                <div class="form-group has-feedback text_input">
                    <input id="email" placeholder="نام کاربری" type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                                        <strong><?php echo app('translator')->getFromJson('backend.error_mail'); ?></strong>
                                    </span>
                    <?php endif; ?>
                    <span class="form-control-feedback">
              <i class="fa fa-fw fa-user"></i>
            </span>
                </div>
                <div class="form-group has-feedback text_input">
                    <input id="password" placeholder="<?php echo app('translator')->getFromJson('backend.password'); ?>" type="password" class="form-control " name="password" required>

                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                    <?php endif; ?>
                    <span class="form-control-feedback">
              <i class="fa fa-fw fa-key"></i>
            </span>
                </div>
                <button type="submit" class="btn btn-primary btn-block m-b-15"><?php echo app('translator')->getFromJson('backend.login'); ?></button>
<!--
                <p class="text-left">
                    <a href="#">
                        <small><?php echo app('translator')->getFromJson('backend.forgetpassword'); ?></small>
                    </a>
                </p>
-->
                <!--<p class="text-muted text-right">-->
                <!--    <?php echo app('translator')->getFromJson('backend.asq_register_leter'); ?>-->
                <!--    <a href="<?php echo e(route('register')); ?>"><?php echo app('translator')->getFromJson('backend.req_register'); ?></a>-->
                <!--</p>-->
            </form>

        </div>
    </div>

    <!-- Modal -->

</div>

<!-- Core javascript files. REQUIRED -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/vendor/jquery/jquery.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>