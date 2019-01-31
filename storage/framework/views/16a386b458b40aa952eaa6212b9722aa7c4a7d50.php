<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('lib/fontawesome/css/fontawesome.min.css')); ?>">

    <!-- <link href="/css/app.css" rel="stylesheet" type="text/css"> -->
    

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
    <style type="text/css">
        .help-block{
            color: red;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Nu-Music')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <ul class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="uploads/avatars/<?php echo e(Auth::user()->avatar); ?>" style="" width="32px" height="32px" position:absolute>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item fa fa-btn fa-sign-out" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a></li>

                                    <li><a class="dropdown-item fa fa-btn fa-profile" href="<?php echo e(route('profile')); ?>"
                                        onclick="event.preventDefault() document.getElementById('profile-form').submit();">
                                        <?php echo e(__('Profile')); ?>

                                    </a></li>

                                    <li><a class="dropdown-item fa fa-btn fa-shop" href="<?php echo e(route('shop')); ?>">
                                        <?php echo e(__('Shop')); ?>

                                    </a></li>

                                    <li><a class="dropdown-item fa fa-btn fa-profile" href="<?php echo e(route('upload')); ?>">
                                        <?php echo e(__('Upload')); ?>

                                    </a></li>

                                    <li><a class="dropdown-item fa fa-btn fa-about" href="<?php echo e(route('about')); ?>">
                                        <?php echo e(__('About')); ?>

                                    </a></li>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    
                                    <form id="profile-form" action="<?php echo e(route('profile')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                                    <form id="about-form" action="<?php echo e(route('about')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                                    <form id="shop-form" action="<?php echo e(route('shop')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </ul>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        
        <div id="example" style="position:fixed; left:0; bottom:0; width:100%; color:white; z-index:1;"></div>

        <footer class="footer" style="position:relative; bottom:0; width:100%; background-color:black; color:white; text-align:center;">
            &copy; Copyright &reg;
        </footer>
    </div>

</body>
</html>
