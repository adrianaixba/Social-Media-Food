<!doctype html>
<html>
<!--html lang="<?php echo e(config('app.locale')); ?>"-->
    <head>
    	<!-- yield: something is inserted here(placeholder), "title" is the name; fuse will be able to access this -->
        <title><?php echo $__env->yieldContent('title'); ?></title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo e(URL::to('src/css/main.css')); ?>">
    </head>
    <body>
        
        <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="container">
        	<!-- content will live here -->
        	<?php echo $__env->yieldContent('content'); ?>
        </div>
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="<?php echo e(URL::to('src/js/app.js')); ?>"></script>
    </body>
</html>
