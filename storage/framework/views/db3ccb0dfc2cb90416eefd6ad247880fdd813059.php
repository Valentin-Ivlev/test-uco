<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Employees List</h2><br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($record->id); ?></th>
                            <td><?php echo e($record->username); ?></td>
                            <td><?php echo e($record->name); ?></td>
                            <td><?php echo e($record->email); ?></td>
                            <td>
                                <a href="/employees/edit/<?php echo e($record->id); ?>">Edit</a>&nbsp;&nbsp;&nbsp;
                                <button data-id="<?php echo e($record->id); ?>" class="btn btn-danger delete-employees">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('body').on('click', '.delete-employees', function () {
                let id = $(this).data('id');
                $.ajax({
                    url : '/employees/' + id,
                    method : 'delete',
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        '_method':'DELETE'
                    },
                    error: function(xhr, status, error) {
                        alert(error);
                    },
                    success: function () {
                        alert("Done!");
                        location.reload();
                    }
                })
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/makas/projects/uco/laravel-test-task/example-app/resources/views/employees/index.blade.php ENDPATH**/ ?>