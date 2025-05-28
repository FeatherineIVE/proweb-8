<table border="1">
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
