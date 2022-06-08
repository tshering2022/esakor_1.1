<?php $__env->startSection('title'); ?> Landing <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/swiper/swiper.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    


    <body data-bs-spy="scroll" data-bs-target="#navbar-example">

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
                            <a class="nav-link active d-flex flex-column" href="#hero"><i class="ic las la-user-friends fs-24" align="center"></i><p>About eSakor</p></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex flex-column" href="#services"><i class="ic lab la-sistrix fs-24" align="center"></i>Track Transaction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex flex-column" href="#features"><i class='ic las la-headset fs-24' align="center"></i>Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex flex-column" href="#plans"><i class="ic las la-question-circle fs-24" align="center"></i>FAQs</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <!-- end navbar -->
            <?php echo $__env->yieldContent('landing_nav'); ?>

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
    </body>


    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::asset('/assets/libs/swiper/swiper.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/assets/js/pages/landing.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/NLCS-project/Laravel/default/resources/views/menu/landing_nav.blade.php ENDPATH**/ ?>