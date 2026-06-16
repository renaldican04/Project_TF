<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h3>Transaksi Pembelian Jersey</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('transactions.store') }}" method="POST">
    @csrf

    <label>Nama Jersey</label>
    <select name="jersey_id" required>
        <option value="">-- Pilih Jersey --</option>
        @foreach ($jerseys as $jersey)
            <option value="{{ $jersey->id }}">
                {{ $jersey->name }} - Rp{{ number_format($jersey->price) }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Jumlah</label>
    <input type="number" name="quantity" min="1" required>

    <br><br>

    <button type="submit">Beli</button>
</form>


</body>
</html>
