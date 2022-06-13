<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-topbar="light">

    <head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?> | eSakor Auth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link href="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>">
        <?php echo $__env->make('layouts.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
    
 <!-- Begin page -->
 <div class="layout-wrapper landing">
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-landing fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(URL('/')); ?>">
                <img src="<?php echo e(URL::asset('assets/img/Logo.png')); ?>" class="card-logo card-logo-dark" alt="logo dark" height="55">
                <img src="<?php echo e(URL::asset('assets/img/Logo.png')); ?>" class="card-logo card-logo-light" alt="logo light"
                    height="">
            </a>
            <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0 text-center" id="navbar-example">
                    <li class="nav-item">
                    <a class="nav-link active d-flex flex-column" href="<?php echo e(URL('/login')); ?>"><i class="ic las la-user-friends fs-24" align="center"></i><p>Login</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-column" href="<?php echo e(URL('/register')); ?>"><i class="ic lab la-sistrix fs-24" align="center"></i>Register</a>
                    </li>
                    
                </ul>
            </div>

        </div>
    </nav>
    
    <?php echo $__env->yieldContent('content'); ?>
    <section class="section-footer">
        <div class="bg-overlay-footer">
            <div class="container pt-5">
             <p class="text-dark text-center pt-5">eSakor Portal & <b>National Land Commission Secretariat</b> 2016 - 2022</p>

             <div class="live-preview">
                 <div class="d-flex flex-wrap justify-content-center gap-5 align-content-center">
                     <button type="button"
                         class="btn btn-outline-dark position-relative p-0 avatar-xs rounded-circle">
                         <span class="avatar-title bg-transparent text-reset">
                             <i class="bx bxs-envelope fs-4"></i>
                         </span>
                     </button>
                     <button type="button"
                         class="btn btn-outline-dark position-relative p-0 avatar-xs rounded-circle">
                         <span class="avatar-title bg-transparent text-reset">
                             <i class="bx bxl-facebook-square fs-4"></i>
                         </span>
                     </button>
                     <button type="button"
                         class="btn btn-outline-dark position-relative p-0 avatar-xs rounded-circle">
                         <span class="avatar-title bg-transparent text-reset">
                             <i class="las la-headset fs-4"></i>
                         </span>
                     </button>
                     <button type="button"
                         class="btn btn-outline-dark position-relative p-0 avatar-xs rounded-circle">
                         <span class="avatar-title bg-transparent text-reset">
                             <i class="las la-globe fs-4"></i>
                         </span>
                     </button>
                 </div>
             </div>
            </div>
        </div>
    </section>
 </div>
    <?php echo $__env->make('layouts.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/libs/swiper/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/pages/landing.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\esakor_1.1\resources\views/menu/auth_nav.blade.php ENDPATH**/ ?>