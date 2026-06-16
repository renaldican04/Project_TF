<!DOCTYPE html>
<html>
<head>
    <title>Edit Jersey</title>
</head>
<body>

<h2>Edit Jersey</h2>

<form method="POST" action="<?php echo e(route('jerseys.update', $jersey->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <label>Kategori</label><br>
    <select name="category_id" required>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"
                <?php echo e($jersey->category_id == $category->id ? 'selected' : ''); ?>>
                <?php echo e($category->name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <br><br>

    <label>Nama Jersey</label><br>
    <input type="text" name="name" value="<?php echo e($jersey->name); ?>" required>
    <br><br>

    <label>Harga</label><br>
    <input type="number" name="price" value="<?php echo e($jersey->price); ?>" required>
    <br><br>

    <label>Stok</label><br>
    <input type="number" name="stock" value="<?php echo e($jersey->stock); ?>" required>
    <br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="<?php echo e(route('jerseys.index')); ?>">Kembali</a>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\jersey-store\resources\views/jerseys/edit.blade.php ENDPATH**/ ?>