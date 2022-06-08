<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('translation.signup'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <!-- auth-page wrapper -->
        <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
            <div class="bg-overlay"></div>
            <!-- auth-page content -->
            <div class="auth-page-content overflow-hidden pt-lg-5">
               
            </div>
            <!-- end auth page content -->

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('script'); ?>
            <script src="<?php echo e(URL::asset('assets/js/pages/form-validation.init.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('assets/js/pages/passowrd-create.init.js')); ?>"></script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('menu.auth_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/NLCS-project/Laravel/default/resources/views/auth-signup-cover.blade.php ENDPATH**/ ?>