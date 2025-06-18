    <!DOCTYPE html>
<html>
<head>
    <title>Data Anak</title>
</head>
<body>
    <h1>Data Anak</h1>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Gender</th>
            <th>Agama</th>
            <th>Hobi</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Jarak Rumah</th>
            <th>Foto Akte</th>
            <th>Foto KK</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $anak)
        <tr>
            <td>{{ $anak->nama }}</td>
            <td>{{ $anak->tempat_lahir }}</td>
            <td>{{ $anak->tanggal_lahir }}</td>
            <td>{{ $anak->gender }}</td>
            <td>{{ $anak->agama }}</td>
            <td>{{ $anak->hobi }}</td>
            <td>{{ $anak->nama_ayah }}</td>
            <td>{{ $anak->nama_ibu }}</td>
            <td>{{ $anak->jarak_rumah }}</td>

            <td>
                @if ($anak->foto_akte)
                    <img src="{{ asset('storage/' . $anak->foto_akte) }}" width="100">
                @endif
            </td>
            <td>
                @if ($anak->foto_kk)
                    <img src="{{ asset('storage/' . $anak->foto_kk) }}" width="100">
                @endif
            </td>

            <td>
                @if($anak->status == 'diterima')
                    <span style="color: green; font-weight: bold;">Diterima</span>
                @elseif($anak->status == 'ditolak')
                    <span style="color: red; font-weight: bold;">Ditolak</span>
                @else
                    <span style="color: orange; font-weight: bold;">Diproses</span>
                @endif
            </td>

            <td>
                @if($anak->status == 'diproses')
                    <form action="{{ route('anak.updateStatus', $anak->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="status" value="diterima">
                        <button type="submit">Terima</button>
                    </form>

                    <form action="{{ route('anak.updateStatus', $anak->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="status" value="ditolak">
                        <button type="submit">Tolak</button>

                    </form>
                @else
                    <em>Tindakan selesai</em>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
