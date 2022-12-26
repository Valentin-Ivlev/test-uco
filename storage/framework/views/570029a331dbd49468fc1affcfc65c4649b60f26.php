<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Employee Edit</h2><br>
                <?php if(session()->has('message')): ?>
                    <p class="btn btn-success btn-block btn-sm custom_message text-left"><?php echo e(session()->get('message')); ?></p>
                <?php endif; ?>
                <form action="<?php echo e(route('employees.update',$employees->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('patch'); ?>
                    <fieldset>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="<?php echo e($employees->name); ?>">
                            <span style="color:red"> <?php echo e($errors->has('name') ?  $errors->first('name') : ''); ?> </span>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo e($employees->email); ?>">
                            <span style="color:red"> <?php echo e($errors->has('email') ?  $errors->first('email') : ''); ?> </span>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;
                        <a href="/">Back</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/makas/projects/uco/laravel-test-task/example-app/resources/views/employees/edit.blade.php ENDPATH**/ ?>