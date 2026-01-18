

<?php $__env->startSection('content'); ?> 
    <div class="d-flex justify-content-between">
        <h2>Student List</h2>
        <a href="index.php?page=create" class="btn btn-primary">Add New Student</a>
    </div>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Course</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <tr>
                    <td><?php echo e($s->name); ?></td> 
                    <td><?php echo e($s->email); ?></td>
                    <td><?php echo e($s->course); ?></td>
                    <td>
                        <a href="index.php?page=edit&id=<?php echo e($s->id); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="index.php?page=delete&id=<?php echo e($s->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\workshop8\app\views/students/index.blade.php ENDPATH**/ ?>