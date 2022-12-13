<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Edumel- Education Html Template by dreambuzz">
  <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
  <meta name="author" content="dreambuzz">

  <title>Asosiasi Jurnal</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/vendors/bootstrap/bootstrap.css">
  <!-- Iconfont Css -->
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/vendors/awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/vendors/flaticon/flaticon.css">
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/fonts/gilroy/font-gilroy.css">
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/vendors/magnific-popup/magnific-popup.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/vendors/animate-css/animate.css">
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/vendors/animated-headline/animated-headline.css">
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/vendors/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/vendors/owl/assets/owl.theme.default.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/css/woocomerce.css">
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo e(asset('frontend')); ?>/css/responsive.css">

</head>

<body id="top-header">



<?php echo $__env->make('client.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo e($slot); ?>


<?php echo $__env->make('client.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





    <!-- Main jQuery -->
    <script src="<?php echo e(asset('frontend')); ?>/vendors/jquery/jquery.js"></script>
    <!-- Bootstrap 5:0 -->
    <script src="<?php echo e(asset('frontend')); ?>/vendors/bootstrap/popper.min.js"></script>
    <script src="<?php echo e(asset('frontend')); ?>/vendors/bootstrap/bootstrap.js"></script>
    <!-- Counterup -->
    

    <script src="<?php echo e(asset('frontend')); ?>/js/script.js"></script>


  </body>
  </html>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/client/layouts/master.blade.php ENDPATH**/ ?>