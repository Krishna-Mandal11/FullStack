

<?php $__env->startSection('content'); ?>
    <h2>Edit Student</h2>
    <form action="index.php?page=update&id=<?php echo e($student->id); ?>" method="POST">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($student->name); ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo e($student->email); ?>" required>
        </div>
        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" value="<?php echo e($student->course); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\workshop8\app\views/students/edit.blade.php ENDPATH**/ ?>