<!DOCTYPE html>
<html>
<head>
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h3>Daftar Transaksi Pembelian Jersey</h3>

    <a href="<?php echo e(route('transactions.create')); ?>" class="btn btn-primary mb-3">
        Tambah Transaksi
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
        <th>No</th>
        <th>Nama Jersey</th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Tanggal</th>
    </tr>

    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($t->jersey_name); ?></td>
        <td><?php echo e(ucfirst($t->category_name)); ?></td>
        <td><?php echo e($t->quantity); ?></td>
        <td>Rp<?php echo e(number_format($t->total_price)); ?></td>
        <td><?php echo e($t->created_at); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\jersey-store\resources\views/transactions/index.blade.php ENDPATH**/ ?>