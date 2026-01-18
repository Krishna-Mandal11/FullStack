

<?php $__env->startSection('content'); ?>
    <h2>Add New Student</h2>
    <form action="index.php?page=store" method="POST">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save Student</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\workshop8\app\views/students/create.blade.php ENDPATH**/ ?>