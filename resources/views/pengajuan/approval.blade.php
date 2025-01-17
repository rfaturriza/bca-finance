<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approval Pengajuan</title>
</head>
<body>
    <h1>Approval Pengajuan</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Dealer</th>
                <th>Merk Kendaraan</th>
                <th>Harga Kendaraan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengajuan as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->dealer }}</td>
                    <td>{{ $item->merk_kendaraan }}</td>
                    <td>{{ $item->harga_kendaraan }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <form action="{{ route('pengajuan.approve', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" style="color: green;">Approve</button>
                        </form>
                        <form action="{{ route('pengajuan.reject', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" style="color: red;">Reject</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>