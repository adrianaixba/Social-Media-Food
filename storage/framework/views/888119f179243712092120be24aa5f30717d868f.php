<!-- extends from the master.blade.php file -->

<!-- target a section, must match the key of the section -->
<!-- everything btwn section and endsection -->
<?php $__env->startSection('title'); ?>
    Welcome!
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="row">
        
        
        <div class="col-md-6">
            <h3>Sign up</h3>
            
            <form action="<?php echo e(route('signup')); ?>" method="post">
                
                <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                    <label for="email">Enter email</label>
                    
                    <input class="form-control" type="text" name="email" id="email" value="<?php echo e(Request::old('email')); ?>">
                </div>

                
                <div class="form-group <?php echo e($errors->has('first_name') ? 'has-error' : ''); ?>">
                    <label for="first_name">Enter first name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo e(Request::old('first_name')); ?>">
                </div>

                
                
                    
                    
                

                
                <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                    <label for="password">Enter password</label>
                    <input class="form-control" type="password" name="password" id="password" value="<?php echo e(Request::old('password')); ?>">
                </div>

                
                <button type="submit" class="btn btn-primary">Submit</button>
                
                <input type ="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
            </form>
        </div>
        
        <div class="col-md-6">
            <h3>Sign in</h3>
            <form action="<?php echo e(route('signin')); ?>" method="post">
                
                <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                    <label for="email">Enter email</label>
                    <input class="form-control" type="text" name="email" id="email" value="<?php echo e(Request::old('email')); ?>">
                </div>
                
                <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                    <label for="password">Enter password</label>
                    <input class="form-control" type="password" name="password" id="password" value="<?php echo e(Request::old('password')); ?>">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type ="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>