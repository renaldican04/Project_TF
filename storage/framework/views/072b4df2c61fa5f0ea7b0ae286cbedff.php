<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h3>Transaksi Pembelian Jersey</h3>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('transactions.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <label>Nama Jersey</label>
    <select name="jersey_id" required>
        <option value="">-- Pilih Jersey --</option>
        <?php $__currentLoopData = $jerseys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jersey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($jersey->id); ?>">
                <?php echo e($jersey->name); ?> - Rp<?php echo e(number_format($jersey->price)); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <br><br>

    <label>Jumlah</label>
    <input type="number" name="quantity" min="1" required>

    <br><br>

    <button type="submit">Beli</button>
</form>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\jersey-store\resources\views/transactions/create.blade.php ENDPATH**/ ?>