<!DOCTYPE html>
<html>
<head>
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h3>Daftar Transaksi Pembelian Jersey</h3>

    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">
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

    @foreach ($transactions as $t)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $t->jersey_name }}</td>
        <td>{{ ucfirst($t->category_name) }}</td>
        <td>{{ $t->quantity }}</td>
        <td>Rp{{ number_format($t->total_price) }}</td>
        <td>{{ $t->created_at }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
