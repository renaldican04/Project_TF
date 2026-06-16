<!DOCTYPE html>
<html>
<head>
    <title>Data Jersey</title>
</head>
<body>

<h2>Data Jersey</h2>

<a href="<?php echo e(route('jerseys.create')); ?>">Tambah Jersey</a>

<table border="1" cellpadding="5">
<tr>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php $__currentLoopData = $jerseys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jersey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($jersey->name); ?></td>
    <td><?php echo e($jersey->category->name); ?></td>
    <td><?php echo e($jersey->price); ?></td>
    <td><?php echo e($jersey->stock); ?></td>
    <td>
        <a href="<?php echo e(route('jerseys.edit', $jersey->id)); ?>">Edit</a>

        <form action="<?php echo e(route('jerseys.destroy', $jersey->id)); ?>" method="POST" style="display:inline;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Hapus</button>
        </form>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\jersey-store\resources\views/jerseys/index.blade.php ENDPATH**/ ?>