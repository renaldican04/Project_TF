<!DOCTYPE html>
<html>
<head>
    <title>Data Jersey</title>
</head>
<body>

<h2>Data Jersey</h2>

<a href="{{ route('jerseys.create') }}">Tambah Jersey</a>

<table border="1" cellpadding="5">
<tr>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

@foreach($jerseys as $jersey)
<tr>
    <td>{{ $jersey->name }}</td>
    <td>{{ $jersey->category->name }}</td>
    <td>{{ $jersey->price }}</td>
    <td>{{ $jersey->stock }}</td>
    <td>
        <a href="{{ route('jerseys.edit', $jersey->id) }}">Edit</a>

        <form action="{{ route('jerseys.destroy', $jersey->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </td>
</tr>
@endforeach

</table>

</body>
</html>
