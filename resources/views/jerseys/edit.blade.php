<!DOCTYPE html>
<html>
<head>
    <title>Edit Jersey</title>
</head>
<body>

<h2>Edit Jersey</h2>

<form method="POST" action="{{ route('jerseys.update', $jersey->id) }}">
    @csrf
    @method('PUT')

    <label>Kategori</label><br>
    <select name="category_id" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ $jersey->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Nama Jersey</label><br>
    <input type="text" name="name" value="{{ $jersey->name }}" required>
    <br><br>

    <label>Harga</label><br>
    <input type="number" name="price" value="{{ $jersey->price }}" required>
    <br><br>

    <label>Stok</label><br>
    <input type="number" name="stock" value="{{ $jersey->stock }}" required>
    <br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('jerseys.index') }}">Kembali</a>

</body>
</html>
