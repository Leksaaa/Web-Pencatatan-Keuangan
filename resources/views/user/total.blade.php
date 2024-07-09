<div class="total-kategori"> <!-- Container untuk Total Kategori -->
    <h1>Total Pemasukan dan Pengeluaran</h1>
    <table>
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($totalByCategory as $item)
            <tr>
                <td>{{ $item->nama_kategori }}</td>
                <td>{{ $item->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
