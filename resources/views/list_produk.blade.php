<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <h1 class="mb-4">Input Produk</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('produk.simpan') }}">
        @csrf
        <table class="table">
            <tr>
                <td>Nama:</td>
                <td colspan="3"><input type="text" class="form-control" name="nama" required></td>
            </tr>
            <tr>
                <td>Deskripsi:</td>
                <td colspan="3"><textarea class="form-control" name="deskripsi" required></textarea></td>
            </tr>
            <tr>
                <td>Harga:</td>
                <td><input type="number" class="form-control" name="harga" required></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <h2 class="mt-5">Daftar Produk</h2>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $p)
                <tr>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->deskripsi }}</td>
                    <td>Rp{{ number_format($p->harga, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
